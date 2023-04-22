const header = document.querySelector("header");

// navbar open
let menu = document.querySelector("#menu-icon");
let navmanu = document.querySelector(".icons-container");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navmanu.classList.toggle("open");
};
