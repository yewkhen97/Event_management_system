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
          <h1>Event Package</h1>
          <hr>
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
          <img src="../../libs/AGM_Connexion.jpg" style="width:50%" onclick="onClick(this)" alt="2019 AGM Package" align="center">
          <b><p>Chair and run your Annual General Meetingas here at<br> Connexion Conference & Event Centre with great convenience<br> and success! Enjoy hassle-free planning with our all-inclusive<br> packages starting from RM99.00 per person.</p></b>
          <form class="" action="sUpdateEventPackage.php?id=<?php echo"$_SESSION[id]";?>" method="post">
            <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit" name="button">Edit</button>
          </form>
          <form class="" action="sAddEventPackage.php?id=<?php echo"$_SESSION[id]";?>" method="post">
            <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit" name="button">Add Package</button>
          </form>
          
          
          <p><h1 class="w3-xxxlarge w3-text-red"><b>2019 AGM Prom Night Package</b></h1></p>
          <p><img src="../../libs/Prom_Connexion.jpg" style="width:50%" onclick="onClick(this)" alt="2019 AGM Package" align="center"></p>
          <b><p>Create wonderful memories with a spectacular evening of fun, <br> friendship and laughter! It’s easier to plan your Prom Night <br> in Kuala Lumpur with our all-inclusive packages from RM120 <br> per person</p></b>
          <form  action="sUpdateEventPackage.php?id=<?php echo"$_SESSION[id]";?>" method="post">
            <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit" name="button">Edit</button>
          </form>
          <form action="sAddEventPackage.php" method="post">
            <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" type="submit" name="button">Add Package</button>
          </form>
        
<br>
<?php
         include 'supplierFooter.php';
         ?>
</html>