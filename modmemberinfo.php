<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>ITS351_PROJECT</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <style>
    .navactive {
        color: white;
        background-color: #bcb562;
    }
    </style>
  </head>
  <div class="header">
    <div class="logoWrapper">
      <img >
      <div class="topnav">
        <a href="staffsignin.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
        <a href="management.php">Home</a>
      </div>
    </div>

  </div>

  <body>
    <?php
            $userid = $_GET['userid'];
    				$q = "select * from member where memberId=$userid";
    				$result = $mysqli->query($q);
    				if(!$result){
    					echo "Select failed: ".$mysqli->error;
    				}
    				$urow = $result->fetch_array();
     ?>
    <div class="registerContent">
      <div class="registerDiv">
        <h1>Modify (USER)</h1>
        <hr>
        <br>
        <form action="modifymember.php" method="post">

          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstName" value="<?=$urow['firstName']?>">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastName" value="<?=$urow['lastName']?>">

          <label for="status">Gender</label>
          <select class="statusSelect" name="gender">
            <option value="M" <?php if($urow['gender']== "M"){ echo "selected";} ?>>Male</option>
            <option value="F" <?php if($urow['gender']== "F"){ echo "selected";}?>>Female</option>
          </select>


          <label for="mobileNo">Mobile Number</label>
          <input type="text" id="mobileNo" name="mobileNumber" value="<?=$urow['mobileNo']?>">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" value="<?=$urow['email']?>">

          <label for="memberId">member Id</label>
          <input type="text" id="memberId" name="memberId" value="<?=$urow['memberId']?>" readonly>

          <input type="submit" name="memberModiftSubmit"value="Submit">
        </form>
      </div>
    </div>
      <div class="regisImageWrapper">
        <img src="regis.jpg" alt="">
      </div>
  </body>

  </html>
