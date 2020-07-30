<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 


$sql = " SELECT S_supplierID,S_SSMNO,S_CompanyName,S_emailAddress,S_status FROM Supplier";
$result = $conn->query($sql);



if(isset($_GET["id"])){
 
if(isset($_GET["pen"])){
$id1=$_GET['id'];

$sts="pending";
$sql = "UPDATE Supplier SET S_status='$sts'WHERE S_supplierID='$id1'";
if ($conn->query($sql) === TRUE) {
	 header("Location: ../../ApplicationLayer/UserView/aApprovedAccount.php?event=sucp");
    } else {
    echo "Error updating record: " . $conn->error;
    header("Location: ../../ApplicationLayer/UserView/aApprovedAccount.php?event=fail");
}

}
else{
$id1=$_GET['id'];
$sts="approved";
$sql = "UPDATE Supplier SET S_status='$sts'WHERE S_supplierID='$id1'";
if ($conn->query($sql) === TRUE) {
	 header("Location: ../../ApplicationLayer/UserView/aApprovedAccount.php?event=suc");
    } else {
    echo "Error updating record: " . $conn->error;
    header("Location: ../../ApplicationLayer/UserView/aApprovedAccount.php?event=fail");
}

}
}



?>