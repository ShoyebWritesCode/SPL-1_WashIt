<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="landingpagestyle.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@800&family=Ubuntu:wght@300&display=swap"
    rel="stylesheet"> -->
</head>
<body>
<header>
    <div class="name">
        <h2> Wash.IT</h2>
    </div>
    <!--Navbar-->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
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
</body>
</html>