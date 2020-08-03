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
            <li class="breadcrumb-item active">Customer Dasboard</li>
          </ol>

          <!-- Page Content -->
          <h1>Select Your Event Package</h1>
          <hr>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()"></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-right:200px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo" style="color: black"><b>Event Packages</b></h1>
    <p><h1 class="w3-xxxlarge w3-text-red"><b>2019 AGM Prom Night Package</b></h1></p>
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
          <img src="../../libs/Prom_Connexion.jpg" style="width:100%" onclick="onClick(this)" alt="2019 AGM Package" align="center">
          <form action="cBookingForm.php?id=<?php echo"$_SESSION[id]";?>">
            <table align="center">
            <tr style="margin-left: 0px">
              <td><h3 class="package-A">Package A</h3></td>
              <td><h3 class="package-B">Package B</h3></td>
              <td><h3 class="package-C">Package C</h3></td>
            </tr>
            <tr>
              <td>
                <p style="background-color: lightblue;">
                  RM80 per person<br>Three Compartment Packed<br>Lunch</p>
              </td>
              <td>
                <p style="background-color: lightblue;">
                  RM100 per person<br>Three Compartment Packed<br>Lunch</p>
              </td>
              <td>
                <p style="background-color: lightblue;">
                  RM125 per person<br>Buffet Dine-in Lunch</p>
              </td>
            </tr>
            <tr>
              <td>
                <input type="submit" value="Choose package" name="Package_A">
              </td>
              <td>
                <input type="submit" value="Choose package" name="Package_B">
              </td>
              <td>
                <input type="submit" value="Choose package" name="Package_C">
              </td>
            </tr>
          </table>
          </form>
    </div>


<br>

     <?php
         include 'customerFooter.php';
         ?>



</html>