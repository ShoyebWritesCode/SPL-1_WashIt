<?php
require_once('connect.php');
	$serviceId = $_GET['serviceId'];
	$memberId = $_GET['memberId'];
	$totalPrice = $_GET['totalPrice'];

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

	if($memberId != 9999){
		echo "string";
		$q="SELECT * from `member` where memberId ='$memberId' ";
		$currentBonusPoint = 0;
		$currentM_Type = 1;
		if ($res = $mysqli->query($q))
		{
				if (mysqli_num_rows($res) == 1)
				{
						$row = $res->fetch_array();
						$currentBonusPoint=$row['bonusPoint'];
						$currentM_Type = $row['memberTypeId'];
				}

		}
		$currentBonusPoint= $currentBonusPoint+intval($totalPrice);
		if($currentBonusPoint > 800){
			$currentM_Type=2;
		}
		if($currentBonusPoint > 2000){
			$currentM_Type=3;
		}

		$q = "update member set  bonusPoint='$currentBonusPoint',memberTypeId='$currentM_Type' where memberId =$memberId";
		if(!$mysqli->query($q)){
			echo "Update failed: ". $mysqli->error;
		}else{
			header("Location: checkoutitems.php");
		}
	}

	$q = "update laundryservice set  dateOut='$currentDate' where serviceId =$serviceId";

  if(!$mysqli->query($q)){
  echo "Update failed: ". $mysqli->error;
  }else{
  header("Location: checkoutitems.php");
  }
 ?>
