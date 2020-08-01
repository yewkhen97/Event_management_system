<?php
include '../../libs/connection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
                          } 
     
				//to get the order from customer
				function getEventOrder($supplierID){
								include '../../libs/connection.php';
								$sql="SELECT * FROM booking 
									  INNER JOIN event_package On
									  booking.EP_packageID= event_package.EP_packageID 
									  WHERE
									  event_package.S_supplierID= '$supplierID' and booking.status='paid'
									  ";
								$result = $conn->query($sql);
								return $result;	
										   }

				//to get the order from customer
				function getPurchasedOrder($custID){
								include '../../libs/connection.php';
								$sql="SELECT * FROM booking 
									  WHERE
									  C_customerID= '$custID' and status='paid'
									  ";
								$result = $conn->query($sql);
								return $result;	
										   }



//to get the order from customer
				function getEquipmentOrder($supplierID){
								include '../../libs/connection.php';
								$sql ="SELECT EQ_equipmentID from equipment 
									    where S_supplierID='$supplierID'";
                                $result = $conn->query($sql);
                               
                   				 if ($result-> num_rows > 0){
											while ($row = $result-> fetch_assoc()){
 							

                                             $Eid=$row["EQ_equipmentID"];

										$sql="SELECT * FROM booking 
									  INNER JOIN equipment_Order On
									  booking.EOd_orderID= equipment_Order.EOd_orderID 
									  WHERE
									   booking.status='paid' and  equipment_Order.EQ_equipmentID='$Eid'
									   
						
									  ";
											$result = $conn->query($sql);
								return $result;	

											     								 }
												}			


								
										         }



						function checknamepackage($id2){
											include '../../libs/connection.php';

											$query2 = "SELECT * FROM event_package WHERE EP_packageID = '$id2'";
											$result2 = $conn->query($query2);
											return $result2;
										}

						function checknameequipment($id3){
								include '../../libs/connection.php';
	

					$query3 = "SELECT equipment.EQ_equipmentName FROM equipment_order INNER JOIN equipment on equipment.EQ_equipmentID=equipment_order.EQ_equipmentID  WHERE equipment_order.EOd_orderID ='$id3'";
								$result3 = $conn->query($query3);
										return $result3;
													}

							function getStatus($id4){
									include '../../libs/connection.php';

								$query4= "SELECT * FROM tracking_order WHERE B_bookingID='$id4'";
								$result4 = $conn->query($query4);
										return $result4;

							}
							function getprogress($id5){
										include '../../libs/connection.php';
										$query5= "SELECT * FROM tracking_order WHERE B_bookingID='$id5'";
								$result5 = $conn->query($query5);
										return $result5;
							}

?>

<?php
if(isset($_GET["event"])){
$ev=$_GET['event'];



if($ev=='stsadd'){
$B_bookingID = $_POST['B_bookingID'];
$status= $_POST['status'];
$ETDate= $_POST['ETA'];

$sql = "INSERT INTO tracking_order (B_bookingID,TO_process,TO_Date)
             VALUES ('" .$B_bookingID ."','" .$status ."','" .$ETDate ."')";
 $result = $conn->query($sql);
      if(mysqli_affected_rows($conn) >0 ) {
  echo '<script type="text/javascript">'; 
echo 'alert("Success Add The Status");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/sManageTracking.php";';
echo '</script>';

} 
else{
	$nstatus=','.$status;
	$nETDate=','.$ETDate;
	  include '../../libs/connection.php';
	  $sql2 = "UPDATE tracking_order SET TO_process=CONCAT(TO_process, '" .$nstatus ."'), TO_Date=CONCAT(TO_Date,'" .$nETDate ."')
	      WHERE B_bookingID='" .$B_bookingID ."' ";
	 
             	if(mysqli_query($conn, $sql2)){
             		  echo '<script type="text/javascript">'; 
		         echo 'alert("Success Add The Status");'; 
								echo 'window.location.href = "../../ApplicationLayer/UserView/sManageTracking.php";';
						echo '</script>';
	}
            else {echo 'alert("fail to add, try again");'; }



	}



}





}










?>