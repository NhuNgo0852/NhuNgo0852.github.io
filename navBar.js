const navBar = document.getElementById("navbar");

// Open Menu icon********
const menuIcon = document.getElementById("menu_icon");
const closeIcon = document.getElementById("close_icon");

// The addEventListener() method attaches an event handler to an element.
menuIcon.addEventListener("click", openMenu); 
closeIcon.addEventListener("click",closeMenu);

function openMenu() {
    navBar.style.display = "flex";
    menuIcon.style.display = "none";
}

function closeMenu() {
    navBar.style.display = "none";
    menuIcon.style.display = "flex";
}
//Add active class to the current button (highlight it)







