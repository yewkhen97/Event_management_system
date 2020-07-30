<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 

if(isset($_GET["event"])){
$usertype=$_GET['event'];



if($usertype=='cusmsg'){
	$sql1="SELECT count(*) as total from Rating";
	$result2 = $conn->query($sql1);
$data=$result2->fetch_assoc();
$max2=$data['total']+1;
$max="Msg_".$max2;
$sql = "INSERT INTO Rating (R_rateID,C_customerID,R_comment)
             VALUES ('$max','$C_customerID','$R_comment')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
  header("Location: ../UserC/cMessageController.php?event=addsc");

} else {
    
header("Location: ../UserC/cMessageController.php?event=addfail");

}
   
}

}





$conn->close();



?>