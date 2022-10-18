<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WASH.IT</title>
</head>

<link rel="stylesheet" href="landingpagestyle.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@800&family=Ubuntu:wght@300&display=swap"
    rel="stylesheet">

<body>
    <header class="header">
        <div class="left" >
            <div><a href="landingpage.php" style="text-decoration: none;">
                <span style="color:#0da8d2 ;">WASH</span><span style="color:rgb(255, 0, 0) ;">.</span><span style="color:rgb(0, 0, 0) ;">IT</span>
            </div></a>
        </div>

        <div class="mid">
            <ul class="navbar">
                <li><a href="landingpage.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
            </ul>

        </div>
        <div class="right">
            <button class='loginbtn'><a href="login.php" style="text-decoration: none;">Login / Register</button>
            </div>
    </header>


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
</section>
</body>
</html>