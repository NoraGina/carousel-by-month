function toggleMenu(){
    const menu = document.querySelector('#menu');
  if (menu.className === "navbar-nav") {
    menu.classList.remove("navbar-nav");
    menu.classList.add("collapse-navbar");
   
   
  } else {
    menu.className = "navbar-nav";
  }
}