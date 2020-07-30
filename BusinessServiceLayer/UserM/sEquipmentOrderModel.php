<?php
include '../../libs/connection.php';

if ($conn->connect_error) {




    die("Connection failed: " . $conn->connect_error);


} 


$sql = " SELECT EOd_orderID,C_customerID,EQ_equipmentID,EOd_quantity,EOd_totalPrice FROM Equipment_Order";
$result = $conn->query($sql);




$sql = "UPDATE Supplier SET S_status='$sts'WHERE S_supplierID='$id1'";
if ($conn->query($sql) === TRUE) {
	 header("Location: ../../ApplicationLayer/UserView/EquipmentOrderController.php?event=sucp");
    } else {
    echo "Error updating record: " . $conn->error;
    header("Location: ../../ApplicationLayer/UserView/EquipmentOrderController.php?event=fail");
}

}

}



?>