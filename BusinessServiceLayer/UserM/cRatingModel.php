<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 
if(isset($_GET["id"])){
$id1=$_GET['id'];
$sql = " SELECT * FROM Equipment_Order WHERE C_customerID='$id1'";
$result = $conn->query($sql);

}

if(isset($_GET["id1"])){
	$id2=$_GET['id1'];
$sql1="SELECT count(*) as total from Rating";
	$result2 = $conn->query($sql1);
	$date2="2019-04-29";
$supp="S_1";
$rat=4;
$data=$result2->fetch_assoc();

$max2=$data['total']+1;
$max="R_".$max2;
echo"$max";

$sql = "INSERT INTO Rating(R_rateID,C_customerID,S_supplierID,R_rate,R_date,R_comment)
             VALUES ('$max','$id2','$supp','$rat','$date2','$comment')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
 
 header("Location: ../../ApplicationLayer/UserView/customerMenu.php?id=$id2&event=rtsc");
} else {
    
  header("Location: ../../ApplicationLayer/UserView/index.php?event=rtfl");
 
}

}






?>