<?php
if (session_status() == PHP_SESSION_ACTIVE) {
}
else{
session_start();
}

function supplieraddPackage($EP_packageName,$S_supplierID,$EP_category,$EP_packagePrice){
    
    include '../UserM/sEventPackage.php';
	
}
// display event pacakges to customer
function displayPackagesCustomer(){
	include '../../BusinessServiceLayer/UserM/sEventPackage.php';
	$result2 = fetchPackageCustomer($_SESSION['id']);
	if ($result2-> num_rows > 0){
		while ($row = $result2 -> fetch_assoc()){
			// print out in table form
		    $str = "";
		    $str = "<tr>";
		    $str = "<form action=../../ApplicationLayer/UserView/cBookingForm.php method='POST'>";
		    $str .= "<td style='display:none;'><input name='pID' value='" . $row['EP_packageID'] . "'/>";
		    $str .= "<td style='display:none;'><input name='pName' value='" . $row['EP_packageName'] . "'/>";
		    $str .= "<td style='display:none;'><input name='pDes' value='" . $row['EP_category'] . "'/>";
		    $str .= "<td style='display:none;'><input name='pPrice' value='" . $row['EP_packagePrice'] . "'/>";
		    $str .= "<td>" . $row['EP_packageName'] . "</td>";
		    $str .= "<td>" . $row['EP_category'] . "</td>";
		    $str .= "<td>" . $row['EP_packagePrice'] . "</td>";
		    $str .= "<td>" . $row['S_supplierID'] . "</td>";
		    $str .= "<td><input type='submit' value='Book'/>";
		    // add other td here if there's more

		    // end of tr
		    $str .="</form>";
		    $str .= "</tr>";
		    echo $str;
		}
	}
}

// display event pacakges to supplier
function displayPackages(){
	include '../../BusinessServiceLayer/UserM/sEventPackage.php';
	$result = fetchPackage($_SESSION['id']);
	// search for packages offered by refering to supplier id
	if ($result-> num_rows > 0){
		while ($row = $result -> fetch_assoc()){
			// print out in table form
		    $str = "";
		    $str = "<tr>";
		    $str = "<form action=../../ApplicationLayer/UserView/sUpdateEventPackage.php method='POST'>";
		    $str .= "<td style='display:none;'><input name='pID' value='" . $row['EP_packageID'] . "'/>";
		    $str .= "<td style='display:none;'><input name='pName' value='" . $row['EP_packageName'] . "'/>";
		    $str .= "<td style='display:none;'><input name='pDes' value='" . $row['EP_category'] . "'/>";
		    $str .= "<td style='display:none;'><input name='pPrice' value='" . $row['EP_packagePrice'] . "'/>";
		    $str .= "<td>" . $row['EP_packageName'] . "</td>";
		    $str .= "<td>" . $row['EP_category'] . "</td>";
		    $str .= "<td>" . $row['EP_packagePrice'] . "</td>";
		    $str .= "<td><input type='submit' value='Edit'/>";
		    // add other td here if there's more

		    // end of tr
		    $str .="</form>";
		    $str .= "</tr>";
		    echo $str;
		}
	//echo $str;
	}

}
// update package
function supplierUpdPackage($EP_packageName,$S_supplierID,$EP_category,$EP_packagePrice,$EP_packageID){
	include '../UserM/sEventPackage.php';
	supplieraUpdPackage2($EP_packageName,$S_supplierID,$EP_category,$EP_packagePrice,$EP_packageID);
}
// delete package
function supplierDltPackage($EP_packageID){
	include '../UserM/sEventPackage.php';
}


?>


<?php
if(isset($_GET["event"])){
$ev=$_GET['event'];

$sup=$_SESSION["id"];

if($ev=='supplieradd'){

supplieraddPackage($_POST["title"],$sup,$_POST["details"],$_POST["price"]);


}

else if($ev=='supplierupd'){

supplierUpdPackage($_POST["title"],$sup,$_POST["details"],$_POST["price"],$_POST['pID']);


}

else if($ev=='supplierdlt'){
	$EP_id = $_POST['pID'];
	supplierDltPackage($EP_id);
}

else if ($ev=='updsc'){

echo '<script type="text/javascript">'; 
echo 'alert("Update successful");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
echo '</script>';


}
else if ($ev=='updfail'){
echo '<script type="text/javascript">'; 
echo 'alert("Update fail, please contact admin");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
echo '</script>';

	
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
else if ($ev=='dltsc'){
echo '<script type="text/javascript">'; 
echo 'alert("Deleted successfully");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
echo '</script>';
}
else if ($ev=='dltfail'){
echo '<script type="text/javascript">'; 
echo 'alert("Deletion fail, please contact admin");'; 
echo 'window.location.href = "../../ApplicationLayer/UserView/supplierMenu.php";';
echo '</script>';

	
}


}





?>