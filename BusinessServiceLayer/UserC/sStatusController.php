<?php
function suppliercon($S_SSMNO,$S_CompanyName,$S_emailAddress,$S_password,$S_phoneNo){
    
	include '../UserM/sStatusModel.php';
}

?>

<?php

include '../../BusinessServiceLayer/UserM/sStatusModel.php';



if(isset($_GET["id1"])){

$id1=$_GET['id'];

suppliercon($_POST["ssmNo"],$_POST["companyName"],$_POST["email"],$_POST["psw"],$_POST["phoneno"]);
}




?>

