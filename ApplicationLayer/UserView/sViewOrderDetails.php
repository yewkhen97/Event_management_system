<?php
session_start();
if($_SESSION["id"] == ""){
echo '<script type="text/javascript">'; 
echo 'alert("Please Login First");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
<?php
   include 'supplierHeader.php';
?>

		<body>
			<!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="supplierMenu.php?id=<?php echo"$_SESSION[id]";?>">Home</a>
            </li>
            <li class="breadcrumb-item">
            	<a href="../../BusinessServiceLayer/UserC/sViewOrderController.php?id=<?php echo"$_SESSION[id]";?>&controllerFunction=list">Equipment Order</a>
            </li>
            <li class="breadcrumb-item active">Equipment Order Details</li>

          </ol>
		<!-- Top menu on small screens -->
		<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
		  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()"></a>
		</header>
     	<div class="container">
			<div class="row">
				<h2 class="text-danger">Equipment Order Details</h2>
					<table class="table table-bordered success">
						<thead>
							<tr>
								<?php  $data = unserialize(urldecode($_GET['data'])); ?>
								<th>Booking ID:</th>
								<td colspan="3"><?php echo $data[0]['B_bookingID']; ?></td>
							</tr>
							
									<tr>
										<th>Equipment Order ID:</th>
										<td colspan="3"><?php echo $data[0]["EOd_orderID"]; ?></td>
									</tr>
									<tr>
										<th>Equipment ID: </th>
										<td class="info"><?php echo $data[0]["EQ_equipmentID"]; ?></td>
										<th>Equipment Name: </th>
										<td class="info"><?php echo $data[0]["EQ_equipmentName"]; ?></td>
									</tr>
									<tr>
										<th>Order Date: </th>
										<td class="info"><?php echo $data[0]["Order_Date"]; ?></td>
										<th>Payment Status: </th>
										<td class="info"><?php echo $data[0]["status"]; ?></td>
									<tr>
										<th>Quantity: </th>
										<td class="info"><?php echo $data[0]["EOd_quantity"]; ?></td>
										<th>Total Payment: </th>
										<td class="info"><?php echo $data[0]["EOd_totalPrice"]; ?></td>
									</tr>
									<tr><td><h2 class="text-danger">Customer Details</h2></td></tr>	
									<tr>
										<th>Customer ID: </th>
										<td class="info"><?php echo $data[0]["C_customerID"]; ?></td>
									</tr>
									<tr>
										<th>Customer Name: </th>
										<td class="info"><?php echo $data[0]["C_name"]; ?></td>
										<th>Customer Phone Number: </th>
										<td class="info"><?php echo $data[0]["C_telNo"]; ?></td>
									</tr>
									<tr>
										<td colspan="4"><a align="center" href="../../BusinessServiceLayer/UserC/sViewOrderController.php?id=<?php echo"$_SESSION[id]";?>&controllerFunction=list" class="btn btn-warning">Back</a></td>
									</tr>


						</thead>
						


					</table>
				</div>
			</div>


		</body>
<?php
         include 'supplierFooter.php';
?>
</html>