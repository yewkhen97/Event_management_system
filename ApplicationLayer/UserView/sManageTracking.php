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
            <li class="breadcrumb-item active">Order Status</li>
          </ol>

          <!-- Page Content -->
          <h1>Manage Order</h1>
          <hr>

 <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              List of Order Status</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                   
                    <tr>
                      <th>Booking ID</th>
                      <th>Event Package</th>
                      <th>Equipment</th>
                      <th>Venue</th>
                      <th>Price</th>
                      <th>Order Date</th>
                      <th>Customer ID</th>
                       <th>Status Tracking</th>
                      <th>Status Select</th>
                      <th>Estimated Date</th>
                        <th>Action </th>
                    </tr>

</thead>
                  <tfoot>
                    <tr>
                     <th>Booking ID</th>
                      <th>Event Package</th>
                      <th>Equipment</th>
                      <th>Venue</th>
                      <th>Price</th>
                      <th>Order Date</th>
                      <th>Customer ID</th>
                       <th>Status Tracking</th>
                      <th>Status Select</th>
                      <th>Estimated Date</th>
                        <th>Action </th>
                    </tr>
                  </tfoot>
                  <tbody>
                       <?php
              include "../../BusinessServiceLayer/UserC/cTrackingController.php";
                      manageOrder();
                         ?>

                
                   
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>







           <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © PARTY EVENT MANAGEMENT SYSTEM 2019/2020</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

 <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

   

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

<!-- Bootstrap core JavaScript-->
    <script src="../../libs/vendor/jquery/jquery.min.js"></script>
    <script src="../../libs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../libs/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../../libs/vendor/chart.js/Chart.min.js"></script>
    <script src="../../libs/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../libs/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../libs/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../libs/js/demo/datatables-demo.js"></script>
    <script src="../../libs/js/demo/chart-area-demo.js"></script>



             </body>
<script type="text/javascript">
  
   function alertLogin() {
  alert("Please Log out your  account First");
}
</script>
</html>