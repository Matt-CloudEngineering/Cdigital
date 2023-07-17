// JavaScript for the image slider
const images = document.querySelectorAll('.slider img.slider-image');
let index = 0;

function changeImage() {
  index = (index + 1) % images.length;
  images.forEach((image) => {
    image.style.opacity = 0;
  });
  images[index].style.opacity = 1;
  setTimeout(changeImage, 5000); // Change image every 5 seconds
}

changeImage();
