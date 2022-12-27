<?php
include "server.php";
include "dummy.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="feedback.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@800&family=Ubuntu:wght@300&display=swap"
    rel="stylesheet">

</head>
<body>

    <div class="form-container">
        <form action="feedback.php" method="post">
            <h3>Give Your Feedback</h3>
            <label for="email">Email</label>
            <input type="email"placeholder="e-mail" name="email"  id="email">
            <label for="Phone Number">Phone number</label>
            <input type="text" name="phonenumber"placeholder="Phone-number" id="phonenumber">
            <label for="Your Message">Your Message</label>
            <textarea name="message" id="message" cols="20" rows="8" placeholder="Enter your message here"></textarea>
            <button type="submit" value="submit" class="bttn" name="feedback_user">
        </form>
    </div>

<div>
    <?php
    if(isset($_POST['feedback_user']))
    {
        $sql="INSERT INTO `feedback` VALUES('$_SESSION[username]','$_POST[email]','$_POST[phonenumber]','$_POST[message]') ;";
        mysqli_query($db,$sql);
       
    }
    ?>
</div>
    
</body>
</html>