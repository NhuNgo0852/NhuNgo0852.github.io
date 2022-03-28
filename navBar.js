const navBar = document.getElementById("navbar");

// Open Menu icon********
const menuIcon = document.getElementById("menu_icon");
const closeIcon = document.getElementById("close_icon");

// The addEventListener() method attaches an event handler to an element.
menuIcon.addEventListener("click", openMenu); 

function openMenu() {
    navBar.style.display = "flex";
    menuIcon.style.display = "none";
    closeIcon.addEventListener("click",closeMenu);
    function closeMenu() {
        navBar.style.display = "none";
        menuIcon.style.display = "block";
    }
}

//Add active class to the current button (highlight it)







