
const hamMenu = document.querySelector(".ham-menu");

const offScreenMenu = document.querySelector(".off-screen-menu");

hamMenu.addEventListener("click", () => {
  hamMenu.classList.toggle("active");
  offScreenMenu.classList.toggle("active");
});

document.addEventListener('click', function(event) {
    if (!hamMenu.contains(event.target) && !hamMenu.contains(event.target)) {
      offScreenMenu.classList.remove('active');
      hamMenu.classList.remove("active");
    }
  });


