<?php
function suppliercon($ssm,$companyName,$email,$psw,$supplierType,$phoneNo){
    
    include '../UserM/registerModel.php';
	
}

function customercon($C_name1,$C_email1,$C_telno1,$C_password1){
    
    include '../UserM/registerModel.php';
	
}
function eventcon($EO_companyName,$EO_emailAddress,$EO_password,$EO_telNo){
    
    include '../UserM/registerModel.php';
	
}


?>


<?php
if(isset($_GET["lguser"])){
$usertype=$_GET['lguser'];



if($usertype=='supplier'){

suppliercon($_POST["ssmno"],$_POST["companyno"],$_POST["spemail"],$_POST["psw"],$_POST["supplierType"],$_POST["phoneno"]);


}
if($usertype=='customer'){

customercon($_POST["cusname"],$_POST["email"],$_POST["phoneno"],$_POST["psw"]);


}
if($usertype=='eventOrganizer'){

eventcon($_POST["cusname"],$_POST["email"],$_POST["psw"],$_POST["phoneno"]);


}
}
if(isset($_GET["event"])){
$ev=$_GET['event'];

if($ev=='rgspsc'){

header("Location: ../../ApplicationLayer/UserView/index.php?event=rgspsc");


}
else if ($ev=='rgspfail'){

 header("Location: ../../ApplicationLayer/UserView/index.php?event=rgspfail");



}
else if ($ev=='rgcssc'){
 header("Location: ../../ApplicationLayer/UserView/index.php?event=rgcssc");


	
}
else if ($ev=='rgcsfl'){
  header("Location: ../../ApplicationLayer/UserView/index.php?event=rgcsfl");


	
}
else if ($ev=='rgevsc'){
 header("Location: ../../ApplicationLayer/UserView/index.php?event=rgevsc");


	
}
else if ($ev=='rgevfl'){
  header("Location: ../../ApplicationLayer/UserView/index.php?event=rgevfl");


	
}
}
?>