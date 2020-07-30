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
          <h1>Your Event Package Detail</h1>
          <hr>




<div class="container">
  <br><b><h2>Booking Package</h2></b><br>
  <form class="form-horizontal" action="../../BusinessServiceLayer/UserC/BookingController.php?id=<?php echo"$_SESSION[id]";?>&event=cusadd" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="DayStart">Day Start:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="DayStart" name="DayStart">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="DayEnd">Day End:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="DayEnd" name="DayEnd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="TimeStart">Time Start:</label>
      <div class="col-sm-10">          
        <input type="Time" class="form-control" id="TimeStart" name="TimeStart">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="TimeEnd">Time End:</label>
      <div class="col-sm-10">          
        <input type="Time" class="form-control" id="TimeEnd" name="TimeEnd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-1" for="Venue">Venue:</label>         
          <select name="ListVenue" form="ListVenue">
            <option value="Hotel Sri Malaysia">Hotel Sri Malaysia</option>
            <option value="Putra Hotel">Putra Hotel</option>
          </select>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" value="Confirm Booking" class="btn btn-default" style="border-color: black">
      </div>
    </div>
  </form>
</div>

<script>
  function myFunction() {
    alert("Thank you, you have booked the package.");
  }
</script>


<br>

     <?php
         include 'customerFooter.php';
         ?>



</html>