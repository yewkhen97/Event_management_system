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

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="supplierMenu.php?id=<?php echo"$_SESSION[id]";?>">Home</a>
            </li>
            <li class="breadcrumb-item active">supplier Dasboard</li>
          </ol>

          <!-- Page Content -->
          <h1>Your Event Package</h1>
          <br>
          <form method="POST" action="sAddEventPackage.php"><button><h5>Add Package<h5></button></form>
          <br>
          <table style="width:100%">
            <tr>
              <th style="display:none;">ID</th>
              <th style="display:none;">Name</th>
              <th style="display:none;">Des</th>
              <th style="display:none;">Money</th>
              <th>Event</th>
              <th>Description</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
            <!-- Access controller to display packages -->
            <?php
              include "../../BusinessServiceLayer/UserC/sEventPackageController.php";
              displayPackages();
            ?>
          </table>
<?php
         include 'supplierFooter.php';
         ?>
</html>