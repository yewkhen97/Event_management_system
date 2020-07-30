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
              <a href="supplierMenu.php?id=S_1">Home</a>
            </li>
            <li class="breadcrumb-item active">Event Package</li>
          </ol>

          <!-- Page Content -->
          <h1>Customer Message</h1>
          <hr>

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              List of supplier account</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   
                    <tr>
                      <th>Booking ID</th>
                      <th>EOD_orderID</th>
                      <th>Venue</th>
                      <th>Package</th>
                      <th>Message</th>
                      
                    </tr>
                  </thead>
              
                     <?php
                 include '../../BusinessServiceLayer/UserC/sEventPackageController.php';
              
             


                    ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>









<br>
<?php
         include 'supplierFooter.php';
         ?>
</html>