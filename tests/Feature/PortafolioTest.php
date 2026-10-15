<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class PortafolioTest extends TestCase
{
    public function test_la_pagina_principal_se_muestra_en_espanol_por_defecto(): void
    {
        // Un navegador sin idioma soportado cae en español (el primero de la lista).
        $this->withHeaders(['Accept-Language' => 'fr-FR,fr;q=0.9'])
            ->get('/')
            ->assertOk()
            ->assertSee('Desarrollador Fullstack')
            ->assertSee('Proyectos')
            ->assertSee('id="contact"', false);
    }

    public function test_el_idioma_elegido_se_conserva_entre_peticiones(): void
    {
        $this->withHeaders(['Accept-Language' => 'es'])->get('/lang/en')->assertRedirect();

        $this->get('/')->assertOk()->assertSee('Fullstack Developer')->assertSee('Get in touch');
        $this->get('/')->assertSee('Fullstack Developer'); // sigue en inglés

        $this->get('/lang/es');
        $this->withHeaders(['Accept-Language' => 'en'])->get('/')->assertSee('Contáctame'); // la elección pesa más que el navegador
    }

    public function test_un_idioma_no_soportado_no_existe(): void
    {
        $this->get('/lang/fr')->assertNotFound();
    }

    public function test_primera_visita_usa_el_idioma_del_navegador(): void
    {
        $this->withHeaders(['Accept-Language' => 'en-US,en;q=0.9'])
            ->get('/')
            ->assertSee('Get in touch');
    }

    public function test_los_proyectos_enlazan_a_sus_repositorios_y_a_la_demo(): void
    {
        $this->get('/')
            ->assertSee('https://github.com/Sandrez12/LSC', false)
            ->assertSee('https://sandrez12.github.io/Algoritmo-gen-tico-aplicado-a-un-portafolio-de-inversi-n/', false);
    }

    public function test_el_enlace_antiguo_de_portafolio_redirige(): void
    {
        $this->get('/portafolio')->assertRedirect('/#projects');
    }

    public function test_la_ruta_de_prueba_de_correo_ya_no_existe(): void
    {
        $this->get('/test-mail')->assertNotFound();
    }

    public function test_el_formulario_envia_el_correo_con_responder_a(): void
    {
        Mail::fake();

        $this->post('/contact', $this->datosValidos())
            ->assertRedirect()
            ->assertSessionHas('success');

        Mail::assertSent(ContactMessage::class, function (ContactMessage $mail) {
            return $mail->hasTo(config('portfolio.contact_email'))
                && $mail->hasReplyTo('ana@example.com')
                && $mail->hasSubject('[Portafolio] Hola');
        });
    }

    public function test_el_formulario_valida_los_campos(): void
    {
        Mail::fake();

        $this->post('/contact', ['name' => '', 'email' => 'no-es-correo', 'subject' => '', 'message' => ''])
            ->assertSessionHasErrors(['name', 'email', 'subject', 'message']);

        Mail::assertNothingSent();
    }

    public function test_el_campo_trampa_descarta_a_los_bots_sin_enviar_correo(): void
    {
        Mail::fake();

        $this->post('/contact', $this->datosValidos() + ['website' => 'http://spam.example'])
            ->assertRedirect();

        Mail::assertNothingSent();
    }

    public function test_un_fallo_de_correo_muestra_un_error_y_conserva_lo_escrito(): void
    {
        Mail::shouldReceive('to')->andThrow(new \RuntimeException('SMTP caído'));

        $this->post('/contact', $this->datosValidos())
            ->assertSessionHas('error')
            ->assertSessionHasInput('name', 'Ana');
    }

    public function test_el_formulario_limita_los_envios_repetidos(): void
    {
        Mail::fake();

        for ($i = 0; $i < 5; $i++) {
            $this->post('/contact', $this->datosValidos())->assertRedirect();
        }

        $this->post('/contact', $this->datosValidos())->assertStatus(429);
    }

    public function test_el_health_check_responde(): void
    {
        $this->get('/up')->assertOk();
    }

    /** @return array<string, string> */
    private function datosValidos(): array
    {
        return ['name' => 'Ana', 'email' => 'ana@example.com', 'subject' => 'Hola', 'message' => 'Me gustaría hablar contigo.'];
    }
}
