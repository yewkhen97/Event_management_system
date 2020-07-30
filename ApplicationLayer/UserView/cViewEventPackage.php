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
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo" style="color: black"><b>Event Package</b></h1>
    <p><h1 class="w3-xxxlarge w3-text-red"><b>2019 AGM Package</b></h1></p>
  </div>


  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
          <img src="../../libs/AGM_Connexion.jpg" style="width:50%" onclick="onClick(this)" alt="2019 AGM Package" align="center">
          <b><p>Chair and run your Annual General Meetingas here at<br> Connexion Conference & Event Centre with great convenience<br> and success! Enjoy hassle-free planning with our all-inclusive<br> packages starting from RM99.00 per person.</p></b>
          <form class="" action="cViewEventDetails.php?id=<?php echo"$_SESSION[id]";?>" method="post">
            <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit" name="button">Learn more</button>
          </form>
          
          
          <p><h1 class="w3-xxxlarge w3-text-red"><b>2019 AGM Prom Night Package</b></h1></p>
          <p><img src="../../libs/Prom_Connexion.jpg" style="width:50%" onclick="onClick(this)" alt="2019 AGM Package" align="center"></p>
          <b><p>Create wonderful memories with a spectacular evening of fun, <br> friendship and laughter! It’s easier to plan your Prom Night <br> in Kuala Lumpur with our all-inclusive packages from RM120 <br> per person</p></b>
          <form class="" action="cViewPackage.php?id=<?php echo"$_SESSION[id]";?>" method="post">
            <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit" name="button">Learn more</button>
          </form>
















<br>

     <?php
         include 'customerFooter.php';
         ?>



</html>