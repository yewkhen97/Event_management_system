
<?php
session_start();
function suppliercon($email,$psw){
    
	include '../UserM/loginModel.php';
}
function customercon($email,$psw){
    
	include '../UserM/loginModel.php';
}
function eventcon($email,$psw){
    
	include '../UserM/loginModel.php';
}
function admincon($email,$psw){
    
	include '../UserM/loginModel.php';
}
?>

<?php
if(isset($_GET["lguser"])){
$usertype=$_GET['lguser'];



if($usertype=='supplier'){

suppliercon($_POST["email"],$_POST["psw"]);


}
if($usertype=='customer'){

customercon($_POST["email"],$_POST["psw"]);


}
if($usertype=='eventOrganizer'){

eventcon($_POST["email"],$_POST["psw"]);


}
if($usertype=='admin'){

admincon($_POST["email"],$_POST["psw"]);


}
}


if(isset($_GET["id"])){
$idcontrol=$_GET['id'];

     if($idcontrol=='ssuc'){

				 header("Location: ../../ApplicationLayer/UserView/supplierMenu.php?id=$_SESSION[id]");


				}
   else if ($idcontrol=='csuc'){
    header("Location: ../../ApplicationLayer/UserView/customerMenu.php?id=$_SESSION[id]");


                }
                else if ($idcontrol=='asuc'){
 header("Location: ../../ApplicationLayer/UserView/adminMenu.php?id=$_SESSION[id]");


                }

else if ($idcontrol=='lgfail'){
    header("Location: ../../ApplicationLayer/UserView/index.php?event=lgfail");
    session_destroy();


 }

}



?>