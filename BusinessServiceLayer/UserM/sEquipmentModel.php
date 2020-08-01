<?php
include '../../libs/connection.php';

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}


function fetchEquipment(){
	include '../../libs/connection.php';
	$sql3="SELECT * FROM equipment";
	$result = $conn->query($sql3);
	return $result;	
}









if(isset($_GET["event"])){
$ev=$_GET['event'];

if ($ev =='supplieradd') {
	$sql4="SELECT SUBSTRING(EQ_equipmentID, 4, 100) AS ExtractString FROM equipment where EQ_equipmentID = (select max(EQ_equipmentID) from equipment)";
	//$Eid = $conn->query($sql4);
	//$newid="EP_".$Eid["ExtractString"]+1;



$Eid = mysqli_query($conn, $sql4); 
     
 if ($Eid->num_rows > 0) {
     while($row = mysqli_fetch_assoc($Eid)) {
       $newid=  $row["ExtractString"];
       $plus=$newid+01;
       $newid2="EP_".$plus;
$sql = "INSERT INTO equipment (EQ_equipmentID,EQ_equipmentName,EQ_category,EQ_quantityAvailable,EQ_price,EQ_detail,EQ_status,S_supplierID) VALUES ('$newid2','$equipmentName','$category','$quantity','$price','$detail','$status','$supplierID')";
 	$result = $conn->query($sql);
 	if($result) {
 		echo '<script type="text/javascript">'; 
		echo 'alert("Add successful");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
		echo '</script>'; 
	}
	else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Add failed, please contact admin");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
		echo '</script>';
	} 
    }
}else{
    echo "failed";
}




}
else if ($ev =='supplierdelete') {
		$sql = "DELETE FROM equipment WHERE EQ_equipmentID ='$_POST[EQid]'";
		$result = $conn->query($sql);
		if($result) {
 		echo '<script type="text/javascript">'; 
		echo 'alert("Delete successful");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
		echo '</script>';
		}
		else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Delete failed, please contact admin");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
		echo '</script>';
		} 
}
else if ($ev =='supplieredit') {
		$sql = "UPDATE equipment SET EQ_equipmentName='$equipmentName',EQ_category='$category',EQ_quantityAvailable='$quantity',EQ_price='$price',EQ_detail='$detail' WHERE EQ_equipmentID='$id1'";
		$result = $conn->query($sql);
		if($result) {
 		echo '<script type="text/javascript">'; 
		echo 'alert("Edit successful");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
		echo '</script>';
		}
		else{
		echo '<script type="text/javascript">'; 
		echo 'alert("Edit failed, please contact admin");'; 
		echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
		echo '</script>';
		} 
}

}



?>