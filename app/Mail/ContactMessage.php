<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactMessage extends Mailable
{
    /** @param array{name: string, email: string, subject: string, message: string} $data */
    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        // El remitente es la cuenta configurada del sitio (evita rechazos por suplantación);
        // la persona que escribe queda en "Responder a".
        return new Envelope(
            replyTo: [new Address($this->data['email'], $this->data['name'])],
            subject: '[Portafolio] '.$this->data['subject'],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.contact');
    }
}
