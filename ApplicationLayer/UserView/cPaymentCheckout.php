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
   include 'customerHeader.php';
?>

        <html>

<head>
<style>
body {
    font-family: Arial;
    line-height: 30px;
    color: #333;
}

#payment-box {
    padding: 150px;
   margin-left:500px;
    border: #E4E4E4 1px solid;
    display: inline-block;
    text-align: center;
    border-radius: 3px;
}

#pay_now {
    padding: 10px 30px;
    background: #09f;
    border: #038fec 1px solid;
    border-radius: 3px;
    color: #FFF;
    width: 100%;
    cursor: pointer;
}

.txt-title {
    margin: 25px 0px 0px 0px;
    color: #4e4e4e;
}

.txt-price {
    margin-bottom: 20px;
    color: #08926c;
    font-size: 1.1em;
}
</style>
</head>
<body>
  <php>
    <?php
include "../../BusinessServiceLayer/UserC/BookingController.php"; // Display Events in cart via the controller
$title = "Total amount that need to pay!";
$events = "Event Package(s)";
$totalpayment = 0;
?>
<div id="payment-box">
<?php
		// Start for Cart list for Events
        echo "<h2> Cart </h2>";
        echo "<h4>$events</h4>";
        echo "<table width=100%>
        <tr>
        	<th>Event/Equipment</th>
        	<th>Price</th>
          <th>Delete </th>
        </tr>";
        $hiddenTotal = cartList(); // total price for events
        echo "</table>";
        echo "<br><br>";
        // End for Cart list for Events 
        $totalpayment += $hiddenTotal; // Test for adding total event price 
        $_SESSION['totalpayment'] = $totalpayment;
        echo"<h4>$title</h4>";
        echo"<div>MYR $totalpayment</div>";
        storingBookID();
        ?>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr"
            method="post" target="_top">
            <input type='hidden' name='business'
                value='sb-exbyo2416675@business.example.com'> <input type='hidden'
                name='item_name' value='EVENT'> <input type='hidden'
                name='item_number' value='EVENT#N1'> 
                <?php
                echo"<input type='hidden'
                name='amount' value='$totalpayment'>" ?>
                <input type='hidden'
                name='no_shipping' value='1'> <input type='hidden'
                name='currency_code' value='MYR'> <input type='hidden'
                name='notify_url'
                value='http://localhost/EMS/BusinessServiceLayer/UserM/cPaymentRecord.php'>
            <input type='hidden' name='cancel_return'
                value='http://localhost/EMS/ApplicationLayer/UserView/cPaymentCancel.php'>
            <input type='hidden' name='return'
                value='http://localhost/EMS/ApplicationLayer/UserView/cPaymentSuccess.php'>
            <input type="hidden" name="cmd" value="_xclick"> <input
                type="submit" name="pay_now" id="pay_now"
                Value="Pay Now">
        </form>
    </div>
</body>
</html>

        </div>
        <!-- /.container-fluid -->

   

   
<?php
         include 'customerFooter.php';
         ?>
</html>