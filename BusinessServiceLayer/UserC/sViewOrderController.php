<?php
	session_start();
	include '../UserM/sViewOrderModel.php';
	function RetrieveList($id)
	{
		$orderList=RetriveOrderList($id);
		return $orderList;
	}
	function RetriveDetails($B_bookingID,$id)
	{
		$orderDetails=RetriveOrderDetails($B_bookingID,$id);
		return $orderDetails;
	}


	if (isset($_GET["controllerFunction"])) 
	{

		if ($_GET["controllerFunction"]=="list")
		{
			$list=RetrieveList($_GET['id']);
			header("Location: ../../ApplicationLayer/UserView/sViewOrderList.php?data=".urlencode(serialize($list)));
		}
		elseif($_GET["controllerFunction"]=="details")
		{
			$order_details=RetriveDetails($_GET["bookingID"],$_GET['id']);
			header("Location: ../../ApplicationLayer/UserView/sViewOrderDetails.php?data=".urlencode(serialize($order_details)));
		}
	}
?>