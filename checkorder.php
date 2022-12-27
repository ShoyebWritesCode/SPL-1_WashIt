<?php
require_once('connect.php');
include "server.php";
//session_start();
//if (isset($_POST['regisItemSubmit']) && ($_SESSION['userStatus']=="ADMIN"||$_SESSION['userStatus']=="STAFF")){
?>
  <?php
      $sql4 = "SELECT memberID FROM member WHERE member.firstName = '$_SESSION[firstName]'";
      $result4 = mysqli_query($db, $sql4);
      $row4 = $result4->fetch_assoc();
  
      //echo "Member ID: " . $row4["memberID"]. "<br>";


  $memberIdToRegis= $row4['memberID'];
  $useMember =  $_POST['useMember'];
  $roomNo =  $_POST['roomNo'];
  echo "userMemberCheckBOx:".$useMember."<br>";
  echo "MemberId:".$memberIdToRegis."<br>";
  echo "Room No:".$roomNo."<br>";




 // $staffId = $_SESSION['staffId'];

  $varObtainService =0;


  $varItemsId= array();
  $varItemsName= array();
  $varItemsPrice= array();
  $varItemQuantity=array();
  $countItemsRow = 0;
  $totalPrice =0;
  $q="select * from item";
  $result=$mysqli->query($q);
  if(!$result){
    echo "Select failed. Error: ".$mysqli->error ;
  }
  while($row=$result->fetch_array()){ ?>
        <?php $varItemsName[$countItemsRow] = $row['itemName'];
              $varItemsId[$countItemsRow] = $row['itemId'];
              $varItemsPrice[$countItemsRow] = $row['price'];
              $varItemQuantity[$countItemsRow] = $_POST[($row['itemName']."Vol")];
              $countItemsRow+=1;
        ?>
<?php } ?>

<?php
for ($y = 0; $y < $countItemsRow; $y++) {

  if($varItemQuantity[$y]>0){
    $varObtainService =1;
  }
}

 ?>
 <?php
$varObtainMemberId=0;
 if($useMember == "1"){
   echo "Placed";
 $q = "SELECT * FROM `member` WHERE memberId='".$memberIdToRegis."'";
 if ($res = $mysqli->query($q))
 {
     if (mysqli_num_rows($res) == 1)
     {
         $row = $res->fetch_array();
         $varObtainMemberId=1;
     }

 }
}
elseif ($useMember == "0") {
  $varObtainMemberId=1;
  echo "failed";
}
else {
  $varObtainMemberId=0;
}

 ?>


  <?php
  if ($varObtainService==1 && $varObtainMemberId==1) {
    $q = "SELECT `generateServiceId`() AS `generateServiceId`";
    if ($res = $mysqli->query($q))
    {
        if (mysqli_num_rows($res) == 1)
        {
            $row = $res->fetch_array();
            $servideId = $row['generateServiceId'];
        }
    }
  // ETA DORKAR PORBE PORE echo "Staff ID : ".$_SESSION['staffId'];
    echo "<br>";
    echo "ServiceId is :".$servideId;
    echo "<br>";
    for ($x = 0; $x < $countItemsRow; $x++) {

        if($varItemQuantity[$x]>0){
          echo "ItemId: ".$varItemsId[$x];
          echo "&nbsp";
          echo "ItemName: ".$varItemsName[$x];
          echo "&nbsp";
          echo "ItemPrice: ".$varItemsPrice[$x];
          echo "&nbsp";
          echo "ItemQuantity: ".$varItemQuantity[$x];
          echo "&nbsp";
          echo "<br>";
        $itemQuantity = $varItemQuantity[$x];
        $itemId = $varItemsId[$x];
        if($useMember=="0"){
          $memberIdToRegis = $row4['memberID'];
        
          $q="INSERT INTO `regisitem` (`memberId`,`staffId`,`serviceId`,`itemId`,`quantity`) VALUES ('$memberIdToRegis','$staffId','$servideId','$itemId','$itemQuantity')";
          $result=$mysqli->query($q);
          if(!$result){
            echo "INSERT failed. Error: ".$mysqli->error ;
        }
        }
        else {
          $q="INSERT INTO `regisitem` (`memberId`,`serviceId`,`itemId`,`quantity`) VALUES ('$memberIdToRegis','$servideId','$itemId','$itemQuantity')";
          $result=$mysqli->query($q);
          if(!$result){
            echo "INSERT failed. Error: ".$mysqli->error ;
        }
      }
      $totalPrice =  $totalPrice+($varItemsPrice[$x]*$varItemQuantity[$x]);
    }
  }
  $q="SELECT curdate() as currentDate";
  $currentDate = 0;
  
  if ($res = $mysqli->query($q))
  {
      if (mysqli_num_rows($res) == 1)
      {
          $row = $res->fetch_array();
          $currentDate=$row['currentDate'];
      }

  }
  $q ="INSERT INTO `laundryservice` (`serviceId`,`memberId`,`dateIn`,`dateOut`,`serviceStatus`,`totalPrice`, `roomNo`) VALUES('$servideId','$memberIdToRegis','$currentDate','-','NF','$totalPrice', '$roomNo')";
  $result=$mysqli->query($q);
  if(!$result){
    echo "INSERT failed. Error: ".$mysqli->error ;
  }
  header("Refresh: 5; url=order.php");
  echo "<h1>Done.</h1>";
}
//elseif($varObtainMemberId==0){
 // header("Refresh: 3; url=order.php");
 // echo "<h1>Member id not found </h1>";
//}
//else{
//  header("Refresh: 3; url=order.php");
//  echo "<h1>No item to register </h1>";
//}
//}

?>