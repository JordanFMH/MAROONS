const $abrir = document.querySelector(".abrir");
const $cerrar = document.querySelector(".cerrar");
const $nav = document.querySelector(".header-section-navegacion");
const $hambu1 = document.querySelector(".header-hambu-1");
const $hambu2 = document.querySelector(".header-hambu-2");
const $hambu3 = document.querySelector(".header-hambu-3");
const $hambu4 = document.querySelector(".header-hambu-4");

function abrir(){
    $nav.classList.add("nav-visible");
    $abrir.classList.add("ocultarBoton");
}
$abrir.addEventListener("click", abrir);

function cerrar(){
    $nav.classList.remove("nav-visible");
    $abrir.classList.remove("ocultarBoton");
}
$cerrar.addEventListener("click", cerrar);
$hambu1.addEventListener("click", cerrar);
$hambu2.addEventListener("click", cerrar);
$hambu3.addEventListener("click", cerrar);
$hambu4.addEventListener("click", cerrar);