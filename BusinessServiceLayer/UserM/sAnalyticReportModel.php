<?php
include '../../libs/connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
                          } 
     


function geteventsales($id){
	include '../../libs/connection.php';
	//$query = "SELECT booking.EOd_orderID,booking.eventPrice,booking.EP_packageID,event_package.EP_packageName,equipment_order.EQ_equipmentID FROM booking INNER Join event_package on booking.EP_packageID= event_package.EP_packageID INNER JOIN equipment_order  on booking.EOd_orderID=equipment_order.EOd_orderID  WHERE booking.C_customerID= '$id' AND booking.status = 'unpaid'";

$query = "SELECT MONTHNAME(Order_Date) , SUM(eventPrice),COUNT(B_bookingID)
FROM booking
INNER JOIN  event_package on
booking.EP_packageID=event_package.EP_packageID
WHERE event_package.S_supplierID='$id'
GROUP BY YEAR(booking.Order_Date), MONTH(booking.Order_Date)";
	$result = $conn->query($query);
		return $result;
}

function getequipmentsales($supplierID){
		include '../../libs/connection.php';
								$sql ="SELECT EQ_equipmentID from equipment 
									    where S_supplierID='$supplierID'";
                                $result = $conn->query($sql);
                               
                   				 if ($result-> num_rows > 0){
											while ($row = $result-> fetch_assoc()){
 							

                                             $Eid=$row["EQ_equipmentID"];

										$sql="SELECT MONTHNAME(Order_Date) , SUM(eventPrice),COUNT(B_bookingID)
										 FROM booking 
									  INNER JOIN equipment_Order On
									  booking.EOd_orderID= equipment_Order.EOd_orderID 
									  WHERE
									   booking.status='paid' and  equipment_Order.EQ_equipmentID='$Eid'
									   
									 GROUP BY YEAR(booking.Order_Date), MONTH(booking.Order_Date)";
											$result = $conn->query($sql);
								return $result;	

											     								 }
												}			


								
}

?>