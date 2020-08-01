<?php
function EOorderEquipment($cusID,$eqID,$eqQuantity,$eqPrice){
    include '../UserM/EquipmentModel.php';
}


function EOdeleteEquipment(){

    include '../UserM/EquipmentModel.php';
}



function displayOrder(){
	include '../../BusinessServiceLayer/UserM/EquipmentModel.php';
	$result2 = fetchOrder($_SESSION['id']);
	if ($result2-> num_rows > 0){
		while ($row = $result2 -> fetch_assoc()){
			// print out in table form

		    $str = "";
		    $str = "<tr>";
		    ?>
		    <form action="../../BusinessServiceLayer/UserM/EquipmentModel.php?id=<?php echo"$_SESSION[id]";?>&event=EOdelete" method="POST">
		    <?php
		    $str .= "<td style='display:none;'><input name='orderID' value='" . $row['EOd_orderID'] . "'/>";
		    $str .= "<td style='display:none;'><input name='cusID' value='" . $row['C_customerID'] . "'/>";
		    $str .= "<td>" . $row['EOd_orderID'] . "</td>";
		    $str .= "<td>" . $row['EQ_equipmentName'] . "</td>";
		    $str .= "<td>RM " . $row['EOd_quantity'] . "</td>";
		    $str .= "<td>" . $row['EOd_totalPrice'] . "</td>";
		    $str .= "<td><input type='submit' value='Delete'></td>";
		    // add other td here if there's more

		    // end of tr
		    $str .="</form>";
		    $str .= "</tr>";
		    echo $str;
		}
	}
}

?>


<?php
if(isset($_GET["event"])){
$ev=$_GET['event'];


if($ev=='EOadd'){
	$total=0;
	$total=$_POST["quantity"]*$_POST["price"];
	EOorderEquipment($_POST["cusID"],$_POST["eqID"],$_POST["quantity"],$total);
}
else if ($ev=='E0delete'){
	E0deleteEquipment();
}


}
?>
