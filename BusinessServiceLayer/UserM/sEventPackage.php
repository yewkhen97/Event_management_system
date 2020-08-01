<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 

if(isset($_GET["event"])){
$usertype=$_GET['event'];



if($usertype=='supplieradd'){
	//$sql1="SELECT count(*) as total from Event_Package";
	//$result2 = $conn->query($sql1);
//$data=$result2->fetch_assoc();
//$max2=$data['total']+1;
//$max="EP_".$max2;
$sql = "INSERT INTO Event_Package (EP_packageName,S_supplierID,EP_category,EP_packagePrice)
             VALUES ('$EP_packageName','$S_supplierID','$EP_category', '$EP_packagePrice')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
  header("Location: ../UserC/sEventPackageController.php?event=addsc");

} 


else {
    
header("Location: ../UserC/sEventPackageController.php?event=addfail");

}
   
}
else if ($usertype == 'supplierdlt'){
	$sql = "DELETE FROM event_package WHERE EP_packageID = '$EP_packageID'";
	if(mysqli_query($conn, $sql)){
		header("Location: ../UserC/sEventPackageController.php?event=dltsc");
	}
	else{
		header("Location: ../UserC/sEventPackageController.php?event=dltfail");
	}
}


}
// function to fecth event packages for customer

function fetchPackageCustomer($fetchID){
	include '../../libs/connection.php';
	$sql3="SELECT * FROM Event_Package";
	$result = $conn->query($sql3);
	return $result;	
}
// function to fecth event packages by id
function fetchPackage($fetchID){
	include '../../libs/connection.php';
	$sql3="SELECT * FROM Event_Package WHERE S_supplierID = '$fetchID'";
	$result = $conn->query($sql3);
	return $result;
	
}

// function to update package
function supplieraUpdPackage2($EP_packageName,$S_supplierID,$EP_category,$EP_packagePrice,$EP_packageID){
	include '../../libs/connection.php';
	if(isset($_GET["event"])){
	$usertype=$_GET['event'];
	if($usertype=='supplierupd')
	$sql = "UPDATE event_package SET EP_packageName ='$EP_packageName', EP_packagePrice ='$EP_packagePrice', EP_category ='$EP_category' WHERE S_supplierID = '$S_supplierID' AND EP_packageID = '$EP_packageID'";
	if(mysqli_query($conn, $sql)){
		header("Location: ../UserC/sEventPackageController.php?event=updsc");
	}
	else{
		header("Location: ../UserC/sEventPackageController.php?event=updfail");
	}
	}
}


$conn->close();



?>