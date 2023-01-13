// // const { active } = require("browser-sync");

// window.onload = function () {
//   const navbar = document.getElementById("navbar");
//   const scrollTop = navbar.offsetTop;
//   var prevScrollpos = window.pageYOffset;

//   function menuAnimation() {
//     var currentScrollPos = window.pageYOffset;
//     let opened = document.querySelector(".navbar-open");

//     if (prevScrollpos > currentScrollPos && !opened) {
//       navbar.style.top = "0";
//       scrollUp();
//     } else if (!opened) {
//       navbar.style.top = "-150px";
//     }

//     prevScrollpos = currentScrollPos;
//   }

//   function hamburger() {
//     const burger = document.querySelector(".navbar-burger-icon");

//     function burgerClick(e) {
//       document.body.classList.toggle("navbar-open");
//     }

//     burger.addEventListener("click", burgerClick);
//   }
// }