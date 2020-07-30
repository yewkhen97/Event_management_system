<?php
session_start();

function customerMessage($C_customerID,$R_comment){
    
    include '../UserM/cMessageModel.php';
	
}



?>


<?php
if(isset($_GET["event"])){
$ev=$_GET['event'];

$sup=$_SESSION["id"];

if($ev=='cusmsg'){

customerMessage($_POST["email"],$sup,$_POST["msg"]);


}
else if ($ev=='addsc'){

 echo '<script type="text/javascript">'; 
echo 'alert("Message successful");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
echo '</script>';


}
else if ($ev=='addfail'){
echo '<script type="text/javascript">'; 
echo 'alert("Message  fail, please contact admin");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/customerMenu.php";';
echo '</script>';

	
}



}





?>