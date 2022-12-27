<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>membersmanagement</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
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
    <!-- <div class="motto">
      <h1>We provide professional laundry service</h1>
    </div> -->
  </div>
  <body>
    <div class="row">
    <div class="content">

      <div class="boxWrapper">


        <div class="">
          <!-- INSERT CODE HERE -->
          <table>
                  <col width="5%">
                  <col width="15%">
                  <!-- <col width="5%"> -->
                  <col width="10%">
                  <!-- <col width="10%"> -->
                  <!-- <col width="5%"> -->
                  <col width="10%">
                  <col width="10%">
                  <col width="10%">

                  <tr>
                      <th>Member ID</th>
                      <th>Name</th>
                      <!-- <th>Gender</th> -->
                      <th>Mobile No.</th>
                     <!-- <th>Member Type.</th>
                      <th>Bonuspoint</th>-->
                      <th>email</th>
                      <th>ID</th>
                      <th>Password</th>
                  </tr>
  		 <?php
  				 	$q="SELECT *,memberId FROM `member`";
  					$result=$mysqli->query($q);
  					if(!$result){
  						echo "Select failed. Error: ".$mysqli->error ;
  					}
  				 while($row=$result->fetch_array()){ ?>
                   <tr>
                      <td><?=$row['memberId']?></td>
                      <td><?=$row['firstName']?></td>
                      <!-- <td><?=$row['gender']?></td> -->
                      <td><?=$row['mobileNo']?></td>
                      <td><?=$row['email']?></td>
                      <td><?=$row['SID']?></td>
                      <td><?=$row['password']?></td>
                  </tr>
  				<?php } ?>
              </table>
        </div>
      </div>
    </div>
  </body>

</html>
