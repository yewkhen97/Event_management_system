<?php
function supplieraddEquipment($equipmentName,$category,$quantity,$price,$detail,$status,$supplierID){

    include '../UserM/sEquipmentModel.php';
}

function supplierdeleteEquipment($equipmentID){

    include '../UserM/sEquipmentModel.php';
}

function suppliereditEquipment($equipmentName,$category,$quantity,$price,$detail,$id1){

    include '../UserM/sEquipmentModel.php';
}


function displayEquipment(){
	include '../../BusinessServiceLayer/UserM/sEquipmentModel.php';
	$result2 = fetchEquipment();
	if ($result2-> num_rows > 0){
		while ($row = $result2 -> fetch_assoc()){
			// print out in table form

		    $str = "";
		    $str = "<tr>";
		    ?>
		    <form action="../../BusinessServiceLayer/UserC/EquipmentOrderController.php?id=<?php echo"$_SESSION[id]";?>&event=EOadd" method="POST">
		    <?php
		    $str .= "<td style='display:none;'><input name='eqID' value='" . $row['EQ_equipmentID'] . "'/>";
		    $str .= "<td style='display:none;'><input name='eqcategory' value='" . $row['EQ_category'] . "'/>";
		    $str .= "<td style='display:none;'><input name='eqstatus' value='" . $row['EQ_status'] . "'/>";
		    $str .= "<td style='display:none;'><input name='supID' value='" . $row['S_supplierID'] . "'/>";
		    $str .= "<td style='display:none;'><input name='cusID' value='" . $_SESSION['id'] . "'/>";
		    $str .= "<td style='display:none;'><input name='price' value='" . $row['EQ_price'] . "'/>";
		    $str .= "<td>" . $row['EQ_equipmentName'] . "</td>";
		    $str .= "<td>" . $row['EQ_quantityAvailable'] . "</td>";
		    $str .= "<td>RM " . $row['EQ_price'] . "</td>";
		    $str .= "<td>" . $row['EQ_detail'] . "</td>";
		    $str .= "<td><input type='number' size='9' placeholder='Enter quantity' name='quantity'/>";
		    $str .= "<input type='submit' value='Book'/></td>";
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


if($ev=='supplieradd'){
	$sup=$_POST["supID"];
	supplieraddEquipment($_POST["EQname"],$_POST["EQcategory"],$_POST["EQquantity"],$_POST["EQprice"],$_POST["EQdetail"],$_POST["EQstatus"],$sup);
}

else if ($ev=='supplierdelete'){
	supplierdeleteEquipment($_POST["EQid"]);
}

else if ($ev=='supplieredit'){
	$id=$_GET['id'];
	suppliereditEquipment($_POST["eqName"],$_POST["eqCategory"],$_POST["eqQty"],$_POST["eqPrice"],$_POST["eqDetail"],$id);
}



}
?>
