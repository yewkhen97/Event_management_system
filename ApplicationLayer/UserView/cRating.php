<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>EMS Customer Rating</title>

    <!-- Bootstrap core CSS-->
    <link href="../../libs/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../libs/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../libs/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../libs/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="cRating.php">Event Management System</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
     
      
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
         
      </form>

<div>
</div>       <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
      
         
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approvedModal">Cart</a>
    
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="customerMenu.php?id=C_1">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <!-- Sidebar for supplier-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shuttle-van"></i>
            <span>Supplier</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item active" href="#" onclick="alertLogin()" >Login</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()" >Register</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Equipment Pages:</h6>
               <!--Equipment Page -->
            <a class="dropdown-item" href="#" onclick="alertLogin()">Equipment List</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Add Equipment</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Update Equipment</a>
            <a class="dropdown-item " href="#" onclick="alertLogin()">Delete Equipment</a>
               <div class="dropdown-divider"></div>
               <!--Other Relates Page -->
              <h6 class="dropdown-header">Other Pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Status</a>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Rating</a>
          </div>
        </li>
          <!-- Sidebar for Customer-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shopping-bag"></i>
            <span>Customer</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Log Out</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Event and Equipment:</h6>
               <!--Equipment Page -->
            <a class="dropdown-item" href="cViewEventPackage.php" >Event Package</a>
            <a class="dropdown-item" href="#" >Equipment Rental</a>
               <!--Payment Page -->
               <div class="dropdown-divider"></div>
              <h6 class="dropdown-header" >Payment pages:</h6>
              <a class="dropdown-item" href="#" >Pay</a>

               <!--Other Relates Page for customer -->
               <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Other pages:</h6>
              <a class="dropdown-item" href="cRating.php" >Rating</a>
              <a class="dropdown-item" href="cMessageSupplier.php" >Question & Answer</a>
          </div>
        </li>

           <!-- Sidebar for Event Organizer-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-calendar-alt"></i>
            <span>Event Organizer</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item active" href="#" onclick="alertLogin()">Login</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Register</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Event and Equipment:</h6>
               <!--Equipment Page -->
            <a class="dropdown-item" href="#" onclick="alertLogin()">Event Package</a>
            <a class="dropdown-item" href="#" onclick="alertLogin()">Equipment Rental</a>
               <!--Payment Page -->
               <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Payment pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Pay</a>

               <!--Other Relates Page for event organizer -->
               <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Other pages:</h6>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Rating</a>
              <a class="dropdown-item" href="#" onclick="alertLogin()">Question & Answer</a>
          </div>
        </li>


           <!-- Sidebar for administator-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-user-cog"></i>
            <span>Admin</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Logout Screens:</h6>
            <a class="dropdown-item active" href="#" onclick="alertLogin()">Log in</a>

               <!--Approve membership Page -->
           <div class="dropdown-divider"></div>
              <h6 class="dropdown-header">Approve pages:</h6>
           
              <a class="dropdown-item" href="#" onclick="alertLogin()">Approve Member</a>
          </div>
        </li>

      </ul>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="customerMenu.php?id=C_1">Home</a>
            </li>
            <li class="breadcrumb-item active">Rating Product</li>
          </ol>

          <!-- Page Content -->
          <h1>Select and rating your purchased</h1>
          <hr>

   <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             List of purchased</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>

                     
                    <tr>
                      <th>Order ID</th>
                      <th>Customer ID</th>
                      <th>Equipment ID</th>
                      <th>Quantity</th>
                      <th>Total Price</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Order ID</th>
                      <th>Customer ID</th>
                      <th>Equipment ID</th>
                      <th>Quantity</th>
                      <th>Total Price</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    

                     <?php
                 include '../../BusinessServiceLayer/UserC/cRatingController.php';
              
              if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
      
$id1 = $row["EQ_equipmentID"];

echo "<tr><td>".$row["EOd_orderID"]. "</td><td> " . $row["C_customerID"]. "</td> <td>" .$row["EQ_equipmentID"]."</td><td>".$row["EOd_quantity"]. "</td><td>".$row["EOd_totalPrice"]."</td><td><a href='#' data-toggle='modal' data-target='#ratingModal'>Rate</a></td></tr>";



    }

} 

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
              <span>Copyright © SDW GROUP 4 EVENT MANAGEMENT SYSTEM 2018/2019</span>
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

    <!-- Rating Modal-->
    <?php
            if(isset($_GET["id"])){
$id1=$_GET['id'];
}
             

              
     echo"<form  action='../../BusinessServiceLayer/UserC/cRatingController.php?id1=$id1' method='post'>";
?>
    <div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rate Your Purchased</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select the Star from 0 until 5 for your purchased product.
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<div class="form-group" id="rating-ability-wrapper">
      <label class="control-label" for="rating">
      
      <span class="field-label-info"></span>
      <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
      </label>
      <h2 class="bold rating-header" style="">
      <span class="selected-rating">0</span><small> / 5</small>
      </h2>
      <button type="button" class="btnrating btn btn-default btn-lg" value ="1" name="s1" data-attr="1" id="rating-star-1">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-lg"name="s1"  data-attr="2" id="rating-star-2">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-lg" name="s1" data-attr="3" id="rating-star-3">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-lg" name="s1" data-attr="4" id="rating-star-4">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
      <button type="button" class="btnrating btn btn-default btn-lg"name="s1"  data-attr="5" id="rating-star-5">
          <i class="fa fa-star" aria-hidden="true"></i>
      </button>
</div>
<label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment" name="cuscm"></textarea>
  

          </div>
          <div class="modal-footer">
            
            <a class="btn btn-secondary" href="#" data-dismiss="modal">Cancel</a>
            <button type="submit" class="btn btn-primary" type="button" >Confirm</button>

          </div>
        </div>
      </div>
    </div>
</form>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
     <?php

if(isset($_GET["event"])){
  $evt=$_GET['event'];

  if($evt=='suc'){
$message = "Approved Successful";
echo "<script type='text/javascript'>alert('$message');</script>";

 

                 }
  else if($evt=='rgspfail'){


$message = "Action fail, please try again";
echo "<script type='text/javascript'>alert('$message');</script>";


  }
 else if($evt=='sucp'){


$message = "pending account Successful";
echo "<script type='text/javascript'>alert('$message');</script>";


  }

}
     ?>
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
function ratingsp(){
var selected_value = $(this).attr("data-attr");
var tt=1;
window.location.href = "index.php?";
}
  jQuery(document).ready(function($){
      
  $(".btnrating").on('click',(function(e) {
  
  var previous_value = $("#selected_rating").val();
  
  var selected_value = $(this).attr("data-attr");
  $("#selected_rating").val(selected_value);
  
  $(".selected-rating").empty();
  $(".selected-rating").html(selected_value);
  
  for (i = 1; i <= selected_value; ++i) {
  $("#rating-star-"+i).toggleClass('btn-warning');
  $("#rating-star-"+i).toggleClass('btn-default');
  }
  
  for (ix = 1; ix <= previous_value; ++ix) {
  $("#rating-star-"+ix).toggleClass('btn-warning');
  $("#rating-star-"+ix).toggleClass('btn-default');
  }
  
  }));
  
    
});
</script>
</html>