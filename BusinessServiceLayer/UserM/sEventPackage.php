<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 

if(isset($_GET["event"])){
$usertype=$_GET['event'];



if($usertype=='supplieradd'){
	$sql1="SELECT count(*) as total from Event_Package";
	$result2 = $conn->query($sql1);
$data=$result2->fetch_assoc();
$max2=$data['total']+1;
$max="EP_".$max2;
$sql = "INSERT INTO Event_Package (EP_packageID,EP_packageName,S_supplierID,EP_category)
             VALUES ('$max','$EP_packageName','$S_supplierID','$EP_category')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
  header("Location: ../UserC/sEventPackageController.php?event=addsc");

} else {
    
header("Location: ../UserC/sEventPackageController.php?event=addfail");

}
   
}

}





$conn->close();



?>