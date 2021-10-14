const menuIcon = document.querySelectorS(".menu_icon");
const navBar = document.querySelector(".navbar");

menuIcon.addEventListener("click", function (){
    navBar.classList.toggle("active");    
})