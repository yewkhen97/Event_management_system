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
          <h1>Pick Your Action </h1>
          <hr>

<div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-secondary o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Event Package</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#packageModal">
                  <span class="float-left">Click to view package!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='cViewEventPackage.php?id=<?php echo"$_SESSION[id]";?>'" >View Event Package</button>

            </div>

<div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Equipment Rental</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#equipmentModal">
                  <span class="float-left">Click to view equipment!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='cEquipment.php?id=<?php echo"$_SESSION[id]";?>'" >View Equipment</button>

            </div>

<div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Payment</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#paymentModal">
                  <span class="float-left">Click to view payment!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='cPaymentCheckout.php'" >Proceed Payment</button>

            </div>

<div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Tracking Event Package</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#ratingModal">
                  <span class="float-left">Click to Track your package!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='cTracking.php?id=<?php echo"$_SESSION[id]";?>'" >Proceed Tracking</button>

            </div>
<div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Equipment Order</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#paymentModal">
                  <span class="float-left">Click to view equipment order!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='cEquipmentOrder.php'" >View Equipment Order</button>

            </div>

          </div>















<?php
         include 'customerFooter.php';
         ?>



</html>