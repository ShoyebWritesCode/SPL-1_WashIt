<?php
include "server.php";
include "connect.php";
//include "index.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

<div class="right">
    <?php
    $sql = "SELECT firstName FROM member WHERE member.firstName = '$_SESSION[firstName]'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();
            
          echo "Username: " . $row["firstName"]. "<br>";

    $sql1 = "SELECT mobileNo FROM member WHERE member.firstName = '$_SESSION[firstName]'";
    $result1 = mysqli_query($db, $sql1);
    $row1 = $result1->fetch_assoc();

    echo "MobileNo.: " . $row1["mobileNo"]. "<br>";

    $sql2 = "SELECT email FROM member WHERE member.firstName = '$_SESSION[firstName]'";
    $result2 = mysqli_query($db, $sql2);
    $row2 = $result2->fetch_assoc();

    echo "Email: " . $row2["email"]. "<br>";

    $sql3 = "SELECT SID FROM member WHERE member.firstName = '$_SESSION[firstName]'";
    $result3 = mysqli_query($db, $sql3);
    $row3 = $result3->fetch_assoc();

    echo "Student ID: " . $row3["SID"]. "<br>";

    $sql4 = "SELECT memberID FROM member WHERE member.firstName = '$_SESSION[firstName]'";
    $result4 = mysqli_query($db, $sql4);
    $row4 = $result4->fetch_assoc();

    echo "Member ID: " . $row4["memberID"]. "<br>";

      $db->close();
      ?>
      <a href="index.php" style="color: blue;">Go back</a>
        </div>


        <div class="row">
    <div class="content">

      <div class="boxWrapper">


        <div class="">
          <table>
                  <col width="5%">
                  <col width="5%">
                  <col width="5%">
                  <col width="20%">
                  <col width="15%">
                  <col width="5%">
                  <col width="10%">
                  <col width="10%">
                  <col width="5%">


                  <tr>
                      <th>Service ID</th>
                      <th>Member ID</th>
                      <th>Member Name</th>
                      <th>Date In</th>
                      <th>Date Out</th>
                      <th>Service status</th>
                      <th>Total price</th>

                  </tr>
  		 <?php
  				 		$q="SELECT *,`firstName` FROM `laundryservice`,`member` where  laundryservice.memberId = '$row4[memberID]'  AND member.memberId = '$row4[memberID]' AND laundryservice.serviceStatus = 'NF'  ORDER BY `serviceId`";
  					$result=$mysqli->query($q);
  					if(!$result){
  						echo "Select failed. Error: ".$mysqli->error ;
  					}
  				 while($row=$result->fetch_array()){ ?>
             <?php
              $dashDateOut="";
              if ($row['dateOut']=="0000-00-00") {
                $dashDateOut="-";
              }
              else {
                $dashDateOut=$row['dateOut'];
              }
              $finishStatus="";
              if($row['serviceStatus']=="NF"){
                $finishStatus="Not finish";
              }
              else {
                $finishStatus="Finished";
              }
              ?>
                   <tr>
                      <td><?=$row['serviceId']?></td>
                      <td><?=$row['memberId']?></td>
                      <td><?=$row['firstName']?></td>
                      <td><?=$row['dateIn']?></td>
                      <td><?=$dashDateOut?></td>
                      <td><?=$finishStatus?></td>
                      <td><?=$row['totalPrice']?></td>
                  </tr>
  				<?php } ?>

              </table>
        </div>


      </div>

    </div>
        
</body>
</html>