(function () {
  "use strict";

  const toggle = document.querySelector(".menu-toggle");
  const nav = document.getElementById("nav");

  function cerrarMenu() {
    nav.classList.remove("open");
    toggle.setAttribute("aria-expanded", "false");
  }

  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      const abierto = nav.classList.toggle("open");
      toggle.setAttribute("aria-expanded", String(abierto));
    });
    nav.querySelectorAll('a[href^="#"]').forEach((a) => a.addEventListener("click", cerrarMenu));
    document.addEventListener("keydown", (e) => e.key === "Escape" && cerrarMenu());
  }

  // Marca en el menú la sección que se está leyendo
  const enlaces = [...document.querySelectorAll('.nav > a[href^="#"]')];
  if (enlaces.length && "IntersectionObserver" in window) {
    const porId = new Map(enlaces.map((a) => [a.getAttribute("href").slice(1), a]));
    const observador = new IntersectionObserver(
      (entradas) => {
        entradas.forEach((e) => {
          if (e.isIntersecting) {
            enlaces.forEach((a) => a.classList.remove("current"));
            porId.get(e.target.id)?.classList.add("current");
          }
        });
      },
      { rootMargin: "-35% 0px -60% 0px" }
    );
    porId.forEach((_, id) => {
      const seccion = document.getElementById(id);
      if (seccion) observador.observe(seccion);
    });
  }
})();
