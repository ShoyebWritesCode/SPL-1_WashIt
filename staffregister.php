<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Staff Register</title>
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
      <img class="logo" src="BNN.png" border="0" />
      <div class="topnav">
        <a href="staffsignin.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
        <a href="management.php">Home</a>
      </div>
    </div>

  </div>
  <body>

    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign Up (STAFF,ADMIN)</h1>
        <hr>
        <br>
        <form action="finishregister.php" method="post">
          <label for="status">Status</label>
          <select class="statusSelect" name="status">
            <option value="ADMIN">Admin</option>
            <option value="STAFF">Staff</option>
          </select>

          <label for="userid">Staff Name</label>
          <input type="text" id="userid" name="userId" placeholder="">

          
          <label for="citizenNo">NID</label>
          <input type="text" id="citizenNo" name="citizenNumber" placeholder="">

          <label for="mobileNo">Mobile Number</label>
          <input type="text" id="mobileNo" name="mobileNumber" placeholder="">

          <label for="mail">Email</label>
          <input type="text" id="mail" name="email" placeholder="">


          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="">

          <label for="rePassword">Confirm Password</label>
          <input type="password" id="rePassword" name="rePassword" placeholder="">


          <input type="submit" name="staffRegisterSubmit"value="Submit">
        </form>
      </div>
    </div>
      <div class="regisImageWrapper">
        <img src="regis.jpg" alt="">
      </div>
  </body>

</html>
