<?php
if (session_status() != PHP_SESSION_ACTIVE) {
	session_start();
}




function cusbk($V_venueID,$EP_packageID,$eventPrice,$cusID){
    
    include '../UserM/BookingModel.php';
	
}

function cartList(){
	include '../../BusinessServiceLayer/UserM/BookingModel.php';
	$result = fetchCart($_SESSION['id']);
	$hiddenTotal = 0;

	if ($result-> num_rows > 0){
		//echo 'alert("Add failed, please contact admin");'; 
		while ($row = $result -> fetch_assoc()){
			 if(!empty($row['EP_packageID'])){
			$str = "";
		    $str = "<tr>";




		    $result2 = checknamepackage($row['EP_packageID']);
						if ($result2-> num_rows > 0){
							   while ($row2 = $result2 -> fetch_assoc()){
                          $str .= "<td>" . $row2['EP_packageName'] . "</td>";
                          $data3[] = $row2['EP_packageName'];
                          $_SESSION['EP_packageName'] = $data3;
                      }
						}



		   
		    $str .= "<td>" . $row['eventPrice'] . "</td>";
		      
		$str.="<td>  <form action='../../BusinessServiceLayer/UserM/delete.php' method='get'>
   <button type='submit' name='B_bookingID' value=". $row['B_bookingID'] . " class='btn btn-danger'>Delete</button>
</form></td>";
$data4[] = $row['B_bookingID'];
$_SESSION['B_bookingID1'] = $data4;
		    $str .= "</tr>";

		    echo $str;
		}
	 if(!empty($row['EOd_orderID'])){
			$str = "";
		    $str = "<tr>";


  $result3 = checknameequipment($row['EOd_orderID']);
						if ($result3-> num_rows > 0){
							   while ($row3 = $result3 -> fetch_assoc()){
                          $str .= "<td>" . $row3['EQ_equipmentName'] . "</td>";
							$data1[]=$row3['EQ_equipmentName'];
                          $_SESSION['EQ_equipmentName'] = $data1;

                         


                      }

						}







		   
		    $str .= "<td>" . $row['eventPrice'] . "</td>";
		$str.="<td>  <form action='../../BusinessServiceLayer/UserM/delete.php' method='get'>
   <button type='submit' name='B_bookingID' value=". $row['B_bookingID'] . " class='btn btn-danger'>Delete</button>
</form></td>";
$data2[] = $row['B_bookingID'];
$_SESSION['B_bookingID2'] = $data2;
		    $str .= "</tr>";
              
		    echo $str;
		}
		    $hiddenTotal += $row['eventPrice'];
		}
		return $hiddenTotal;
	}
}

function storingBookID(){
	//include '../../BusinessServiceLayer/UserM/BookingModel.php';
	$result = fetchCart($_SESSION['id']);
	$hiddenTotal = 0;
	$cartArray = array();
	$i = 0;
	if ($result-> num_rows > 0){
		while ($row = $result -> fetch_assoc()){
		     $cartArray[$i] = $row['B_bookingID'];
		     $i++;
		}
		$_SESSION['bID'] = $cartArray;
	}
}

function changeStatus(){
	include '../../BusinessServiceLayer/UserM/BookingModel.php';
	changeToPaid();
}

?>


<?php
if(isset($_GET["event"])){
$ev=$_GET['event'];

$sup=$_SESSION["id"];

if($ev=='cusadd'){
cusbk($_POST["ListVenue"],$_POST["pID"],$_POST["pPrice"],$sup);


}
else if ($ev=='addsc'){
echo '<script type="text/javascript">'; 
echo 'alert("Thank you, you have booked the package.");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
echo '</script>';


}
else if ($ev=='addfail'){
echo '<script type="text/javascript">'; 
echo 'alert("Booking fail, please contact admin");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
echo '</script>';

	
}



}





?>