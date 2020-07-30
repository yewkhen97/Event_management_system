<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 

if(isset($_GET["event"])){
$usertype=$_GET['event'];



if($usertype=='cusadd'){
	$sql1="SELECT count(*) as total from Booking";
	$result2 = $conn->query($sql1);
$data=$result2->fetch_assoc();
$max2=$data['total']+1;
$max="BK_".$max2;
$sql = "INSERT INTO Booking (B_bookingID,EOd_orderID,V_venueID,EP_packageID,eventPrice)
             VALUES ('$max','$EOd_orderID','$V_venueID','$EP_packageID','$eventPrice')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
  header("Location: ../UserC/BookingController.php?event=addsc");

} else {
    
header("Location: ../UserC/BookingController.php?event=addfail");

}
   
}

}





$conn->close();



?>