<?php 
  require_once '../../BusinessServiceLayer/UserC/cPaymentController.php';

  // if form is submitted
  if (isset($_POST['save'])) {
    //create controller
    $value = new paymentController();

    //call method add
    $value->operator();
  }

  if (isset($_POST['delete'])) {
    //create controller
    $delete = new paymentController();

    //call method add
    $delete->destroy();
  }

?>

<!DOCTYPE html>
<html>
<head>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <title></title>
</head>
<body>
<?php 

  $payment = new paymentController();
  $shows = $payment->getValue();
    //$result = print_r ($shows,true);
    //echo $result;


 ?>

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong><?php foreach ($shows as $show) {
                          echo $show['B_bookingID']."<br>";}?></strong>
                        Date: <?php echo date("Y/m/d") ?>
                        <br>
                        Start Time: <?php echo date("h:i:sa") ?>
                        <br>
                        <abbr title="Phone">P:</abbr> (213) 484-6829
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Order</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Venue</th>
                            <th></th>
                            <th class="text-center"></th>
                            <th class="text-center">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                            <td class="col-md-9"><?php echo $show['V_venueName'];?></h4></td>
                            <td class="col-md-1" style="text-align: center"></td>
                            <td class="col-md-1 text-center"><?php echo $show['V_venuePrice'];?></td>
                            <td class="col-md-1 text-center"><?php echo $show['V_venuePrice'];?></td>
                        </tr>                   
                        <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Equipment</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em><?php echo $show['EOd_quantity'];?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"><?php echo $show['EOd_quantity'];?></td>
                            <td class="col-md-1 text-center"><?php echo $show['EOd_totalPrice']/$show['EOd_quantity'];?></td>
                            <td class="col-md-1 text-center"><?php echo $show['EOd_totalPrice'];?></td>
                        </tr>
                        <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Package</th>
                            <th></th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td class="col-md-9"><em><?php echo $show['EP_packageName'];?></em></h4></td>
                          <td class="col-md-1 text-center"></td>
                            <td class="col-md-1 text-center"><?php echo $show['EP_category'];?></td>
                            <td class="col-md-1 text-center"><?php echo $show['EP_packagePrice'];?></td>
                        </tr>                  
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>
                              <?php foreach ($shows as $show) {
                            echo $show['eventPrice']."<br>";}?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block" value="save" >
                   Check Out  <span class="glyphicon glyphicon-chevron-right"></span>
                <button type="button" class="btn btn-fail btn-lg btn-block" value="delete" >
                  Cancel  <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>
        </div>
    </div>

<

</body>
</html>



