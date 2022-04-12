const fullImg = document.getElementById("full_img");
const currentImg = document.getElementById("current_img");
const htmlElement = document.getElementsByTagName("html")[0];
// document.getElementByTagName: collection of Elements with the Tag "Html", [0]: to get the first Element 

const photos = document.getElementsByClassName("photo");
var imageIndex;

// Open full Image
const photosArray = Array.from(photos);

photosArray.forEach(function (photo, i) { // The Function run for each array Element
    photo.addEventListener("click", function () {
        // This Function is called whenever the Photo is clicked,
        imageIndex = i;
        fullImg.style.display = "flex";
        currentImg.src = this.src;
        htmlElement.style.overflowY = "hidden";
    });
});

// Prev & Next Button Image

const prev = document.getElementById("prev_img");
prev.addEventListener("click", prevImage);
function prevImage(){
    if (imageIndex > 0) {
        imageIndex--;
        currentImg.src = photosArray[imageIndex].src;
    }
}

const next = document.getElementById("next_img");
next.addEventListener("click", nextImage);
function nextImage(){
    if (imageIndex < photosArray.length-1) {
        imageIndex++;
        currentImg.src = photosArray[imageIndex].src;
    }
}

// Close Image
const closeImg = document.getElementById("close_img");

closeImg.addEventListener("click", closeImage);
function closeImage() {
    fullImg.style.display = "none";
    htmlElement.style.overflowY = "auto";
}