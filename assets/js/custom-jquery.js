jQuery(document).ready(function ($) {
  const nav_tabs = document.querySelector(".adventure__tabs");

  if (nav_tabs) {
    tabs();
  }

  function tabs() {
    const nav_tabs = $(".adventure__tab");
    const item_tabs = $(".adventure__item");

    showFirst();

    nav_tabs.each(function (index) {
      $(this).on("click", () => {
        resetActive();
        resetSliders();
        $(this).addClass("active");
        item_tabs.eq(index).addClass("active");
        setTimeout(() => {
          item_tabs.eq(index).addClass("show");
          setTimeout(() => {
            const slider = item_tabs.eq(index).find(".adventure__img");
            const item_tabs_check =
              document.querySelectorAll(".adventure__item");
            const slider_check =
              item_tabs_check[index].querySelector(".adventure__img");
            if (slider_check) {
              adventureSlider(slider);
            }
          }, 500);
        }, 200);
      });
    });

    function showFirst() {
      nav_tabs.eq(0).addClass("active");
      nav_tabs.eq(0).addClass("show");
      item_tabs.eq(0).addClass("active");
      item_tabs.eq(0).addClass("show");
      const slider = item_tabs.eq(0).find(".adventure__img");
      adventureSlider(slider);
    }

    function resetActive() {
      nav_tabs.each(function () {
        $(this).removeClass("active");
      });
      item_tabs.each(function () {
        $(this).removeClass("active");
      });
      item_tabs.each(function () {
        $(this).removeClass("show");
      });
    }
  }

  function resetSliders() {
    const sliders = $(".adventure__img");
    sliders.each(function () {
      if ($(this).hasClass("slick-initialize")) {
        $(this).slick("unslick");
      }
    });
  }

  function adventureSlider(slider) {

    slider.slick({
      slidesToShow: 1,
      arrows: true,
      waitForAnimate: true,
      slidesToScroll: 1,
      infinite: true,
      speed: 500,
    });

    const adventure__arrow_prev = slider
      .closest(".adventure__wrap")
      .find(".adventure__arrow--prev");

    const adventure__arrow_next = slider
      .closest(".adventure__wrap")
      .find(".adventure__arrow--next");
    adventure__arrow_prev.on("click", function () {
      slider.slick("slickPrev");
    });
    adventure__arrow_next.on("click", function () {
      slider.slick("slickNext");
    });
  }

  // add id to tag a js-referrer
  const js_referrer = document.querySelector("#js-referrer");
  const expectedReferral = "https://bludelego.it";
  const referringURL = document.referrer;
  console.log(referringURL, "referringURL");

  if (referringURL.indexOf(expectedReferral) !== -1) {
    const img = `<img src="https://bludelego.it/downloads/color-bludelego.svg" alt="">`;
    js_referrer.innerHTML = "";
    js_referrer.setAttribute("href", expectedReferral);
    js_referrer.insertAdjacentHTML("afterbegin", img);
  }
});
