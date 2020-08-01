<?php
include '../../libs/connection.php';

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}



function fetchOrder($cusID){
	include '../../libs/connection.php';
	$sql3="SELECT * FROM equipment JOIN equipment_order ON equipment_order.EQ_equipmentID=equipment.EQ_equipmentID WHERE C_customerID='$cusID';";
	$result = $conn->query($sql3);
	return $result;	
}


if(isset($_GET["event"])){
$ev=$_GET['event'];

if ($ev =='EOadd') {
	$sql4="SELECT SUBSTRING(EOd_orderID, 5, 100) AS ExtractString FROM equipment_order where EOd_orderID = (select max(EOd_orderID) from equipment_order)";
	$Eid = mysqli_query($conn, $sql4); 
     
 if ($Eid->num_rows > 0) {
     while($row = mysqli_fetch_assoc($Eid)) {
       $newid=  $row["ExtractString"];
       $plus=$newid+01;
       $newid2="EOD_".$plus;
	$sql = "INSERT INTO equipment_order (EOd_orderID,C_customerID,EQ_equipmentID,EOd_quantity,EOd_totalPrice) VALUES ('$newid2','$cusID','$eqID','$eqQuantity','$eqPrice')";
 	$result = $conn->query($sql);

 	if($result) {






 		$sql1="SELECT SUBSTRING(B_bookingID, 4, 100) AS ExtractString2 FROM booking where B_bookingID = (select max(B_bookingID) from booking)";
	$Eid2 = mysqli_query($conn, $sql1);
if ($Eid2->num_rows > 0) {
	  while($row2 = mysqli_fetch_assoc($Eid2)) {

$max2=$row2["ExtractString2"];
 $plus2=$max2+01;
$max="BK_".$plus2;
$date = date('Y-m-d');
$sql2 = "INSERT INTO Booking (B_bookingID,EOd_orderID,eventPrice,C_customerID,status,Order_Date)
             VALUES ('$max','$newid2','$eqPrice', '$cusID', 'unpaid','$date')";
$result = $conn->query($sql2);
 	if($result) {
 		echo '<script type="text/javascript">'; 
		echo 'alert("Add successful");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
		echo '</script>'; 
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Add failed, please contact admin");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
		echo '</script>';
	}



}
}



	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Add failed, please contact admin");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
		echo '</script>';
	}




	    }
}else{
    echo "failed";
} 
}
else if ($ev =='EOdelete') {
		$orderID=$_POST["orderID"];
		$sql = "DELETE FROM equipment_order WHERE EOd_orderID = '$orderID' ";
		$result = $conn->query($sql);
		if($result) {
 		echo '<script type="text/javascript">'; 
		echo 'alert("Delete successful");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
		echo '</script>';
		}
		else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Delete failed, please contact admin");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
		echo '</script>';
		} 
}

}



?>