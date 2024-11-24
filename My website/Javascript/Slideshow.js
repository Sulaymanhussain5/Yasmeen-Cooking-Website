
var images = document.querySelectorAll("#slideshow-container img"); //Collects all the images that is in "slideshow-container".
var currentImage = 0; //This variable is used to display current images

function nextImage() {  //This function updates images 
  images[currentImage].style.opacity = 0; //Makes the current image invisible
  currentImage = (currentImage + 1) % images.length; //It moves to 1 images in the container every slides
  images[currentImage].style.opacity = 1; //Images are visible, when it moves to next slide
}

setInterval(nextImage, 3000); //Every slides has 3 seconds until it moves to next slide