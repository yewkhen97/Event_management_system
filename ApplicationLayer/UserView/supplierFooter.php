  <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © PARTY EVENT MANAGEMENT SYSTEM 2020/2021</span>
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

<!-- view event package Modal-->
    <div class="modal fade" id="packageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View Event Package?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Go" below if you are want to view event package or "Cancel" if you not ready.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="sViewEventPackage.php?id=<?php echo"$_SESSION[id]";?>">Go!</a>
          </div>
        </div>
      </div>
    </div>
<!-- view equipment Modal-->
    <div class="modal fade" id="AddEquipmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Equipment?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Go" below if you are want to view event package or "Cancel" if you not ready.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="sAddEquipment.php?id=<?php echo"$_SESSION[id]";?>">Go!</a>
          </div>
        </div>
      </div>
    </div>
<!-- view edit equipment Modal-->
    <div class="modal fade" id="UpdateEquipmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Equipment?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Go" below if you are want to view event package or "Cancel" if you not ready.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="sUpdateEquipment.php?id=<?php echo"$_SESSION[id]";?>">Go!</a>
          </div>
        </div>
      </div>
    </div>
<!-- view equipment Modal-->
    <div class="modal fade" id="equipmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View Our Equipment?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Go" below if you are want to view  equipment or "Cancel" if you not ready.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../../BusinessServiceLayer/UserC/sViewOrderController.php?id=<?php echo"$_SESSION[id]";?>&controllerFunction=list">Go!</a>
          </div>
        </div>
      </div>
    </div>

<!-- view status Modal-->
    <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Order status?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Go" below if you want to view your or "Cancel" if you not ready.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            
            <?php
              echo"<a class='btn btn-primary' href='sManageTracking.php?id=$_SESSION[id]'>Go!</a>";

              ?>
          </div>
        </div>
      </div>
    </div>
    <!-- view Profile Modal-->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Manage Profile Information?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Go" below if you want to view your or "Cancel" if you not ready.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            
            <?php
              echo"<a class='btn btn-primary' href='sStatus.php?id=$_SESSION[id]'>Go!</a>";

              ?>
          </div>
        </div>
      </div>
    </div>

<?php
if(isset($_GET["event"])){
  $evt=$_GET['event'];

  if($evt=='suc'){
$message = "Update Successful";
echo "<script type='text/javascript'>alert('$message');</script>";

 

                 }
  else if($evt=='fail'){


$message = "Update fail, please try again";
echo "<script type='text/javascript'>alert('$message');</script>";


  }
}
?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
           <!-- Bootstrap core JavaScript-->
    <script src="../../libs/vendor/jquery/jquery.min.js"></script>
    <script src="../../libs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../libs/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../libs/js/sb-admin.min.js"></script>
             </body>
<script type="text/javascript">
  
   function alertLogin() {
  alert("Please Log out your  account First");
}
</script>