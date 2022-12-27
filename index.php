<?php 
  session_start();

  if (!isset($_SESSION['firstName'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['firstName']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WashIT</title>
    <link rel="stylesheet" href="css/fontawsome.css">
    <link rel="stylesheet" href="landingpagestyle.css">
</head>
<body>
   <header>
    <div class="name">
        <h2> Wash.IT</h2>
    </div>
    <!--Navbar-->
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><?php  if (isset($_SESSION['firstName'])) : ?>
    	Welcome <strong style="color: green;"><?php echo $_SESSION['firstName']; ?></strong><br>
    	 <a href="landingpage.php? logout='1'" style="color: red;">logout</a>
         <a href="dashboard.php" style="color: blue;">Dashboard</a>
    <?php endif ?></li>
        </ul>
        <div class="right">
        
        </div>
    </nav>
   </header> 

   <section>
    <div class="banner">
        <div class="banner-text">
            <h1>Laundry & Dry <br>Cleaning</h1>
            <p>
                IUT online Laundry professionals will give your clothes the <br>
                professional care and attention.
            </p>
            <a href="order.php" class="btn">Place Order</a>
        </div>
        <div class="banner-img">
            <img src="washing-machine.png"  height="500" width="500"  alt="">
        </div>
    </div>
   </section>
</body>
</html>