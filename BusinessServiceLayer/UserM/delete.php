<?php
	include '../../libs/connection.php';
	



	$B_bookingID = $_GET['B_bookingID'];


$query = "DELETE from booking where B_bookingID='" .$B_bookingID ."'";

$result = mysqli_query($conn,$query);
if($result) 
{
		echo "<script>alert('Delete successful')</script>";
		echo "<script>location.href='../../ApplicationLayer/UserView/cPaymentCheckout.php'</script>"; 			
}
else 
{		        
    die("Delete failed");
}
?>
