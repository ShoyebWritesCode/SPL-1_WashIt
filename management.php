<?php
require_once('connect.php');
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Management</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
  </head>
  <div class="header">
    <div class="logoWrapper">
      <div class="topnav">
        <a href="staffsignin.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
        <a href="management.php">Home</a>
      </div>
    <!-- </div>
    <div class="motto">
      <h1>We provide professional laundry service</h1>
    </div>
  </div>
  <body> -->
    <div class="row">
    <div class="content">
<!-- if(isset($_SESSION['userStatus']) && (($_SESSION['userStatus']=="STAFF") || ($_SESSION['userStatus']=="ADMIN"))){ -->
    <?php
      if(isset($_SESSION['userStatus']) && ($_SESSION['userStatus']=="STAFF") ){
    ?>
        <div class="boxWrapper high1020">

          <div class="box1">
            <div class="profileWrapper">
            </div>
            <div class="pofileText">
              <?php
              echo "Hello"."&nbsp".$_SESSION['userId']."<br>"."<br>"."Status:".$_SESSION['userStatus'];
              ?>
              <br>
              <br>
              <a href="logout.php">Logout</a>
            </div>

          </div>
          <div class="box2">
              <div class="rightFirstRow">
                <a href="updatestatus.php">
                  <div class="updateStatusWrapper">
                    <h1>Update Status</h1>
                  </div>
                </a>
                <a href="checkoutitems.php">
                  <div class="deliveryWrapper">
                    <h1>Checkout Item </h1>
                  </div>
                </a>
              </div>
              <div class="rightSecondRow">
                <a href="regisitem.php">
                  <div class="regisItemWrapper">
                    <h1>Order Item</h1>
                  </div>
                </a>

              </div>
              <div class="rightSecondRow">
                <a href="viewhistory.php">
                  <div class="viewHistorymWrapper">
                    <h1>View History</h1>
                  </div>
                </a>

              </div>

          </div>
          <?php
            }
            elseif (isset($_SESSION['userStatus']) && ($_SESSION['userStatus']=="ADMIN")) {
          ?>

          <div class="boxWrapper high1320">

            <div class="box1">
              <div class="profileWrapper">
              </div>
              <div class="pofileText">
                <?php
                echo "Hello"."&nbsp".$_SESSION['userId']."<br>"."<br>"."Status:".$_SESSION['userStatus'];
                ?>
                <br>
                <br>
                <a href="logout.php">Logout</a>
              </div>

            </div>
            <div class="box2">
                <div class="rightFirstRow">
                  <a href="updatestatus.php">
                    <div class="updateStatusWrapper">
                      <h1>Update Status</h1>
                    </div>
                  </a>
                  <a href="checkoutitems.php">
                    <div class="deliveryWrapper">
                      <h1>Checkout Items </h1>
                    </div>
                  </a>
                </div>
                <div class="rightSecondRow">
                  <a href="regisitem.php">
                    <div class="regisItemWrapper">
                      <h1>Order Item</h1>
                    </div>
                  </a>
                  <a href="regisitem.php">
                    <div class="regisItemWrapper">
                      <h1>Online Orders</h1>
                    </div>
                  </a>

                </div>
                <div class="rightSecondRow">
                  <a href="viewhistory.php">
                    <div class="viewHistorymWrapper">
                      <h1>View History</h1>
                    </div>
                  </a>

                </div>
                <div class="rightSecondRow">
                  <a href="staffmanagement.php">
                    <div class="staffManagementWrapper">
                      <h1>Staff management</h1>
                    </div>
                  </a>

                </div>
                <div class="rightSecondRow">
                  <a href="membermanagement.php">
                    <div class="memberManagementWrapper">
                      <h1>Member management</h1>
                    </div>
                  </a>

                </div>


            </div>

          <?php
            }
            else{
          ?>
          <div class="" style="text-align: center;margin:200px;">
            <h1>Please login first !</h1>
            <br>
            <br>
            <a href="welcome.php">
            <h3>Go back to welcome page !</h3>
            </a>
          </div>
          <?php } ?>

      </div>

    </div>
  </div>
  </body>

</html>
