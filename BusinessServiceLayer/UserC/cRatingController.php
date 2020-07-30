<?php
function cratecon($rate,$comment){
    
	include '../UserM/loginModel.php';
}


include '../../BusinessServiceLayer/UserM/cRatingModel.php';

if(isset($_GET["id1"])){



$id1=$_GET['id1'];
if($usertype=='supplier'){
$rate='4';
suppliercon($rate,$_POST['cuscm']);


}


}




?>

