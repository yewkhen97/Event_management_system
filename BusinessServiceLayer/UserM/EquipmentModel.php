<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 

if(isset($_GET["event"])){
$usertype=$_GET['event'];



if($usertype=='supplieradd'){
	$sql1="SELECT count(*) as total from Equipment";
	$result2 = $conn->query($sql1);
$data=$result2->fetch_assoc();
$max2=$data['total']+1;
$max="EQ_".$max2;
$sql = "INSERT INTO Equipment (EQ_equipmentID,EQ_equipmentName,EQ_quantityAvailable,EQ_price,EQ_detail,S_supplierID)
             VALUES ('$max','$EQ_equipmentName','$EQ_quantityAvailable','$EQ_price','$EQ_detail','$S_supplierID')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
  header("Location: ../UserC/sEquipmentController.php?event=addsc");

} else {
    
header("Location: ../UserC/sEquipmentController.php?event=addfail");

}
   
}

}





$conn->close();



?>