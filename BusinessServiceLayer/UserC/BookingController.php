<?php
session_start();

function cusbk($EOd_orderID,$V_venueID,$EP_packageID,$eventPrice){
    
    include '../UserM/BookingModel.php';
	
}



?>


<?php
if(isset($_GET["event"])){
$ev=$_GET['event'];

$sup=$_SESSION["id"];

if($ev=='cusadd'){

cusbk($_POST["DayStart"],$_POST["ListVenue"],$_POST["DayEnd"],$_POST["TimeStart"]);


}
else if ($ev=='addsc'){

 echo '<script type="text/javascript">'; 
echo 'alert("Thank you, you have booked the package.");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
echo '</script>';


}
else if ($ev=='addfail'){
echo '<script type="text/javascript">'; 
echo 'alert("Booking fail, please contact admin");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
echo '</script>';

	
}



}





?>