const navBar = document.getElementById("navbar");
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

// Close icon of Chat

const closeApp = document.getElementById("close_app");
const openApp = document.getElementById("open_app");
const chatIcon = document.getElementById("chat_icon");

closeApp.addEventListener("click", closeChatIcon);
openApp.addEventListener("click", openChatIcon);

function closeChatIcon() {
    chatIcon.style.display = "none";
    openApp.style.display = "flex";
}
function openChatIcon() {
    chatIcon.style.display = "flex";
    openApp.style.display = "none";
}







