<?php
session_start();

function supplieraddEquipment($EQ_equipmentName,$EQ_quantityAvailable,$EQ_price,$EQ_detail,$S_supplierID){
    
    include '../UserM/EquipmentModel.php';
	
}



?>


<?php
if(isset($_GET["event"])){
$ev=$_GET['event'];

$sup=$_SESSION["id"];

if($ev=='supplieradd'){

supplieraddEquipment($_POST["EQname"],$sup,$_POST["EQquantity"],$_POST["EQprice"],$sup,$_POST["EQdetail"],$sup);


}
else if ($ev=='addsc'){

 echo '<script type="text/javascript">'; 
echo 'alert("Add successful");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
echo '</script>';


}
else if ($ev=='addfail'){
echo '<script type="text/javascript">'; 
echo 'alert("Add fail, please contact admin");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
echo '</script>';

	
}



}





?>