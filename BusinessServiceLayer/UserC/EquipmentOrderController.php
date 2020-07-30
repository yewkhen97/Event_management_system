<?php

include '../../BusinessServiceLayer/UserM/sEquipmentOrderModel.php';
if(isset($_GET["id"])){

$id1=$_GET['id'];

include '../UserM/sEquipmentOrderModel.php';

}

if(isset($_GET["event"])){
$ev=$_GET['event'];

$sup=$_SESSION["id"];
 if ($ev=='sc'){

 echo '<script type="text/javascript">'; 
echo 'alert("connect successful");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
echo '</script>';


}
else if ($ev=='fail'){
echo '<script type="text/javascript">'; 
echo 'alert("connect fail, please contact admin");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
echo '</script>';

	
}



}




?>