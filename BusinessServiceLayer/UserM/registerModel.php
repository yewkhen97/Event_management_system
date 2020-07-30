<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 

if(isset($_GET["lguser"])){
$usertype=$_GET['lguser'];



if($usertype=='supplier'){
	$sql1="SELECT count(*) as total from Supplier";
	$result2 = $conn->query($sql1);
$data=$result2->fetch_assoc();
$max2=$data['total']+1;
$max="S_".$max2;
$sql = "INSERT INTO Supplier (S_supplierID,S_SSMNO,S_CompanyName,S_emailAddress,S_password,S_supplierType,S_phoneNO)
             VALUES ('$max','$ssm','$companyName','$email','$psw','$supplierType','$phoneNo')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
  header("Location: ../UserC/registerController.php?event=rgspsc");

} else {
    
header("Location: ../UserC/registerController.php?event=rgspfail");

}
   
}

else if($usertype=='customer'){
	$sql1="SELECT count(*) as total from Customer";
	$result2 = $conn->query($sql1);
$data=$result2->fetch_assoc();
$max2=$data['total']+1;
$max="C_".$max2;
echo"$max";
$sql = "INSERT INTO Customer (C_customerID,C_name,C_email,C_telNo,C_password)
             VALUES ('$max','$C_name1','$C_email1','$C_telno1','$C_password1')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
 header("Location: ../UserC/registerController.php?event=rgcssc");

} else {
    header("Location: ../UserC/registerController.php?event=rgcsfl");

 
}
   
}

else if($usertype=='eventOrganizer'){
	$sql1="SELECT count(*) as total from Event_Organizer";
	$result2 = $conn->query($sql1);
$data=$result2->fetch_assoc();
$max2=$data['total']+1;
$max="E_".$max2;
echo"$max";
$sql = "INSERT INTO Event_Organizer (EO_eventOrgID,EO_companyName,EO_emailAddress,EO_password,EO_telNo)
             VALUES ('$max','$EO_companyName','$EO_emailAddress','$EO_password','$EO_telNo')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
 header("Location: ../UserC/registerController.php?event=rgevsc");

} else {
       header("Location: ../UserC/registerController.php?event=rgevfl");
 
 
}
   
}


}



$conn->close();



?>