<?php
include "index.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="home.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@800&family=Ubuntu:wght@300&display=swap"
    rel="stylesheet">
</head>
<body>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="1.jpg" style="width:100%">
  <div class="text"><p></p></div>
</div>

<div class="mySlides fade">
  <img src="2.jpg" style="width:100%">
  <div class="text"><p></div>
</div>

<div class="mySlides fade">
  <img src="4.jpg" style="width:100%">
  <div class="text">.<p></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000);
}
</script>

</body>
</html> 