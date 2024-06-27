export function myMenu() {
  const menu = document.querySelector(".menu");
  const btn = document.querySelector(".main-header__btn");

  const body = document.body;

  if (menu && btn) {
    btn.addEventListener("click", (event) => {
      menu.classList.toggle("active");
      btn.classList.toggle("active");
      body.classList.toggle("lock");
    });

    menu.addEventListener("click", (event) => {
      if (event.target.classList.contains("menu")) {
        menu.classList.remove("active");
        btn.classList.remove("active");
        body.classList.remove("lock");
      }
    });

    menu.querySelectorAll(".menu__link").forEach((link) => {
      link.addEventListener("click", () => {
        menu.classList.remove("active");
        btn.classList.remove("active");
        body.classList.remove("lock");
      });
    });
  }

  /*===========================================*/

  const anchors = document.querySelectorAll('a[href*="#"]');

  anchors.forEach((anchor) => {
    anchor.addEventListener("click", (event) => {
      event.preventDefault();

      const blockID = anchor.getAttribute("href").substring(1);

      document.getElementById(blockID).scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    });
  });
}
