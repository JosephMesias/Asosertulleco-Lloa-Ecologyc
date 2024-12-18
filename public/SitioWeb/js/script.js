const $abrir = document.querySelector(".abrir");
const $cerrar = document.querySelector(".cerrar");
const $nav = document.querySelector(".nav");
const $navUl = document.querySelector(".nav-ul");
const $boton = document.querySelector(".abrir");

function abrir(){
    $nav.classList.add("nav-visible");
    $navUl.classList.add("nav-visible");
    $abrir.classList.add("ocultar-boton");
    $cerrar.classList.remove("ocultar-boton");
    $nav.removeAttribute("id", "ocultar");
    $boton.setAttribute("id", "ocultar");
}

function cerrar(){
    $nav.classList.remove("nav-visible");
    $navUl.classList.remove("nav-visible");
    $abrir.classList.remove("ocultar-boton");
    $cerrar.classList.add("ocultar-boton");
    $nav.setAttribute("id", "ocultar");
    $boton.removeAttribute("id", "ocultar");
}

$cerrar.addEventListener("click", cerrar);
$abrir.addEventListener("click", abrir);