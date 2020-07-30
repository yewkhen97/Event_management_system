<?php
session_start();

function supplieraddPackage($EP_packageName,$S_supplierID,$EP_category){
    
    include '../UserM/sEventPackage.php';
	
}



?>


<?php
if(isset($_GET["event"])){
$ev=$_GET['event'];

$sup=$_SESSION["id"];

if($ev=='supplieradd'){

supplieraddPackage($_POST["title"],$sup,$_POST["details"]);


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