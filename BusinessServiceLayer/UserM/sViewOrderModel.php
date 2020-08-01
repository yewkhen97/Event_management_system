<?php
	function RetriveOrderList($id)
	{
		include '../../libs/connection.php';

		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql="SELECT DISTINCT B.B_bookingID, B.C_customerID, B.status, B.Order_Date, EO.EOd_totalPrice FROM booking B JOIN equipment_order EO ON B.EOd_orderID = EO.EOd_orderID JOIN equipment E ON EO.EQ_equipmentID = E.EQ_equipmentID WHERE E.S_supplierID = '".$id."'";
		
		$query = $conn->query($sql);
		while($row = $query->fetch_array())
	   	{
	   				$listData[]=$row;
		}	
		return $listData;
	}
	

	function RetriveOrderDetails($B_bookingID, $id)
	{
		include '../../libs/connection.php';

		if ($conn->connect_error) 
		{
		    die("Connection failed: " . $conn->connect_error);
		} 
		$sql="SELECT DISTINCT B.B_bookingID, B.C_customerID, B.status, B.Order_Date, EO.EOd_orderID, EO.EOd_totalPrice, EO.EOd_quantity, E.EQ_equipmentID, E.EQ_equipmentName, C.C_name, C.C_telNo FROM booking B JOIN equipment_order EO ON B.EOd_orderID = EO.EOd_orderID JOIN equipment E ON EO.EQ_equipmentID = E.EQ_equipmentID JOIN customer C ON C.C_customerID = B.C_customerID WHERE B.B_bookingID = '".$B_bookingID. "'";

		$query = $conn->query($sql);
   		$order_details=array();	
   		
   		while($row = $query->fetch_array())
   		{

    		$order_details[]=$row;
		}
		return $order_details;
		
	}
?>
