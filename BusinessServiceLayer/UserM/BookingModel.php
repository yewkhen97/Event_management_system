<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 

if(isset($_GET["event"])){
$usertype=$_GET['event'];



if($usertype=='cusadd'){
	$sql1="SELECT SUBSTRING(B_bookingID, 4, 100) AS ExtractString2 FROM booking where B_bookingID = (select max(B_bookingID) from booking)";
	$Eid2 = mysqli_query($conn, $sql1);
if ($Eid2->num_rows > 0) {
	  while($row2 = mysqli_fetch_assoc($Eid2)) {

$max2=$row2["ExtractString2"];
 $plus2=$max2+01;
$max="BK_".$plus2;
$date = date('Y-m-d');
$sql = "INSERT INTO Booking (B_bookingID,V_venueID,EP_packageID,eventPrice,C_customerID,status,Order_Date)
             VALUES ('$max','$V_venueID','$EP_packageID','$eventPrice', '$cusID', 'unpaid','$date')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
  header("Location: ../UserC/BookingController.php?event=addsc&pPrice=$eventPrice");

} else {
    
header("Location: ../UserC/BookingController.php?event=addfail");

}
  





  }} 
}

}

function fetchCart($id){
	include '../../libs/connection.php';
	//$query = "SELECT booking.EOd_orderID,booking.eventPrice,booking.EP_packageID,event_package.EP_packageName,equipment_order.EQ_equipmentID FROM booking INNER Join event_package on booking.EP_packageID= event_package.EP_packageID INNER JOIN equipment_order  on booking.EOd_orderID=equipment_order.EOd_orderID  WHERE booking.C_customerID= '$id' AND booking.status = 'unpaid'";

$query = "SELECT * FROM booking WHERE C_customerID = '$id' AND status = 'unpaid'";
	$result = $conn->query($query);
		return $result;
}
function checknamepackage($id2){
	include '../../libs/connection.php';
	//$query = "SELECT booking.EOd_orderID,booking.eventPrice,booking.EP_packageID,event_package.EP_packageName,equipment_order.EQ_equipmentID FROM booking INNER Join event_package on booking.EP_packageID= event_package.EP_packageID INNER JOIN equipment_order  on booking.EOd_orderID=equipment_order.EOd_orderID  WHERE booking.C_customerID= '$id' AND booking.status = 'unpaid'";

$query2 = "SELECT * FROM event_package WHERE EP_packageID = '$id2'";
	$result2 = $conn->query($query2);
		return $result2;
}


function checknameequipment($id3){
	include '../../libs/connection.php';
	

$query3 = "SELECT equipment.EQ_equipmentName FROM equipment_order INNER JOIN equipment on equipment.EQ_equipmentID=equipment_order.EQ_equipmentID  WHERE equipment_order.EOd_orderID ='$id3'";
	$result3 = $conn->query($query3);
		return $result3;
}

function changeToPaid(){
	include '../../libs/connection.php';
	foreach ($_SESSION['bID'] as $book) {
		$query = "UPDATE booking SET status='paid' WHERE B_bookingID='$book'";
		$result = $conn->query($query);
	}
	unset($_SESSION['bID']);
}



$conn->close();



?>