export default function tabs() {
  const nav_tabs = document.querySelectorAll(".adventure__tab");
  const item_tabs = document.querySelectorAll(".adventure__item");

  showFirst()

  nav_tabs.forEach((item, index) => {
    item.addEventListener("click", () => {
      resetActive();
      item.classList.add('active')
      item_tabs[index].classList.add("active")
      setTimeout(() => {
        item_tabs[index].classList.add("show")
      }, 200)
    });
  });

  function showFirst() {
    nav_tabs[0].classList.add('active')
    nav_tabs[0].classList.add('show')
    item_tabs[0].classList.add('active')
    item_tabs[0].classList.add('show')
  }

  function resetActive() {
    nav_tabs.forEach((item) => {
      item.classList.remove("active");
    });
    item_tabs.forEach((item) => {
      item.classList.remove("active");
    });
    item_tabs.forEach(item => {
      item.classList.remove("show")
    })
  }
}
