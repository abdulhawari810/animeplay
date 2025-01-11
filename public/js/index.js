const navItems = document.querySelectorAll(".nav-items");
for (let i = 0; i < navItems.length; i++) {
  if (navItems[i].href === window.location.href) {
    console.log(navItems[i].href);
    navItems[i].classList.add("active");
  }
}
