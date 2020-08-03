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
          <h1>Select Your Action</h1>
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
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='sViewEventPackage.php?id=<?php echo"$_SESSION[id]";?>'" >View Event Package</button>
            </div>



    <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Equipments  </div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#AddEquipmentModal">
                  <span class="float-left">Click to add Equipment!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='sAddEquipment.php?id=<?php echo"$_SESSION[id]";?>'" >Add Equipment</button>

            </div>


    <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-info o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Update Equipment</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#UpdateEquipmentModal">
                  <span class="float-left">Click to Update Equipment!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='sUpdateEquipment.php?id=<?php echo"$_SESSION[id]";?>'" >Update Equipment</button>

            </div>




<div class="col-xl-3 col-sm-6 mb-3">

              <div class="card text-white bg-primary o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Equipment Order</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#equipmentModal">
                  <span class="float-left">Click to view Order!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='../../BusinessServiceLayer/UserC/sViewOrderController.php?id=<?php echo"$_SESSION[id]";?>&controllerFunction=list'" >View Order</button>

            </div>
    </div>
    <div class="row">
<div class="col-xl-3 col-sm-6 mb-3">

              <div class="card text-white bg-success o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Order Status</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#statusModal">
                  <span class="float-left">Click to Manage Order status!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='sManageTracking.php?id=<?php echo"$_SESSION[id]";?>'" >Proceed Order Status</button>

            </div>
		<div class="col-xl-3 col-sm-6 mb-3">

              <div class="card text-white bg-info o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Report</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#statusModal">
                  <span class="float-left">Click to Generate Report!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='sAnalyticReport.php?id=<?php echo"$_SESSION[id]";?>'" >Proceed Generate Report</button>

            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-110">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-shuttle-van"></i>
                  </div>
                  <div class="mr-5">Supplier Information</div>
                </div>
                <a id="btnTrigger"class="card-footer text-white clearfix small z-1" href="#" data-toggle="modal" data-target="#profileModal">
                  <span class="float-left">Click to change your Information!</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>

                  </span>
                </a>
              </div>
              <div class="col-xl-3 col-sm-6 mb-3"> </div>
               <button type="button" class="btn btn-info w-100" onclick="window.location.href='sStatus.php?id=<?php echo"$_SESSION[id]";?>'" >Proceed Supplier profile</button>

            </div>

          </div>


<?php
         include 'supplierFooter.php';
         ?>
</html>