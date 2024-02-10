document.addEventListener('DOMContentLoaded', () => {
    const desplegar = document.getElementById("desplegar");
    const hamburger = document.getElementById("hamburger");
    const navbar = document.getElementById("navbar");
    const opciones = desplegar.querySelectorAll(".option");
    hamburger.addEventListener("click", function () {
        desplegar.classList.toggle("ocultar");
        hamburger.classList.toggle("ocultar");
        navbar.classList.toggle("verde");
    });
    opciones.addEventListener("click", function () {
        desplegar.classList.toggle("ocultar");
        hamburger.classList.toggle("ocultar");
        navbar.classList.toggle("verde");
    });
});

// $(document).ready(function () {
//     $("#hamburger").click(function () {
//         if ($(this).hasClass("active")) {
//             $(this).removeClass("active");
//             $("#desplegar").hide(500)
//             $("#hamburger").removeClass("ocultar")
//             setTimeout(() => {
//                 $("#navbar").removeClass("verde")
//             }, 500);
//         } else {
//             $(this).addClass("active");
//             $("#desplegar").show("ocultar")
//             $("#hamburger").addClass("ocultar")
//             $("#navbar").addClass("verde")
//         }
//     });
//     $("#desplegar a").click(function () {
//         $("#hamburger").removeClass("active");
//         $("#desplegar").hide(500)
//         $("#hamburger").removeClass("ocultar")
//         setTimeout(() => {
//             $("#navbar").removeClass("verde")
//         }, 500);
//     })
// });