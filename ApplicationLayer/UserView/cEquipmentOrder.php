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
include "customerHeader.php";
    ?>
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="customerMenu.php?id=<?php echo"$_SESSION[id]";?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Event Organizer Dasboard</li>
          </ol>

          <!-- Page Content -->
          <h1>Your Equipment Ordered</h1>
          <hr>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()"></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
  <!-- Header -->
<h1 class="w3-jumbo" style="color: black"><b>Equipment Ordered</b></h1>
 <table style="width:100%" border="3">
            <tr>
              <th>Order ID</th>
              <th>Equipment Name</th>
              <th>Quantity Ordered</th>
              <th>Total Price</th>
              <th>Action</th>
            </tr>
            <?php
              include "../../BusinessServiceLayer/UserC/EquipmentOrderController.php";
              displayOrder();
            ?>

<br>

     <?php
         include 'customerFooter.php';
         ?>



</html>