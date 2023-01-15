window.onload = function () {
  const navbar = document.getElementById("navbar");
  const scrollTop = navbar.offsetTop;
  var prevScrollPos = window.pageYOffset;

  function menuAnimation() {
    var currentScrollPos = window.pageYOffset;
    let opened = document.querySelector(".navbar-open");

    if (prevScrollPos > currentScrollPos && !opened) {
      navbar.style.top = "0";
      scrollUp();
    } else if (!opened) {
      navbar.style.top = "-150px";
    }

    prevScrollPos = currentScrollPos;
  }

  function scrollUp() {
    if (window.pageYOffset > scrollTop) {
      navbar.style.backgroundColor = "gray";
    } else {
      navbar.style.backgroundColor = "transparent";
    }
  }

  

  function scroll() {
    showOnScroll();
    menuAnimation();
  }

  window.addEventListener("scroll", scroll);

  // showOnScroll();
  menuToggle();

  

  function menuToggle() {
    const burger = document.querySelector(".navbar-burger");

    function burgerClick(e) {
      document.body.classList.toggle("navbar-open");
    }

    burger.addEventListener("click", burgerClick);
  }
};