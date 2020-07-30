<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 
if(isset($_GET["id"])){
$id1=$_GET['id'];
$sql = " SELECT S_SSMNO,S_CompanyName,S_emailAddress,S_password,S_phoneNo FROM Supplier WHERE S_supplierID='$id1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
      


$ssm = $row['S_SSMNO'];
  $company = $row['S_CompanyName'];
  $email = $row['S_emailAddress'];
  $psw = $row['S_password'];
  $phone = $row['S_phoneNo'];
  


    }


}
}

if(isset($_GET["id1"])){
$id1=$_GET['id1'];
$sql = "UPDATE Supplier SET S_SSMNO='$S_SSMNO',S_CompanyName='$S_CompanyName',S_emailAddress='$S_emailAddress',S_password='$S_password',S_phoneNo='$S_phoneNo' WHERE S_supplierID='$id1'";
if ($conn->query($sql) == TRUE) {

	 header("Location: ../../ApplicationLayer/UserView/supplierMenu.php?id=$id1&event=suc");
    } else {
    echo "Error updating record: " . $conn->error;
    
}

}





?>