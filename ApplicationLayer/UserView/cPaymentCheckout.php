PE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

  <php>
    <?php
include "../../BusinessServiceLayer/UserC/BookingController.php"; // Display Events in cart via the controller -Darrell
$title = "Total amount that need to pay!";
$events = "Event Package(s)";
$totalpayment = 0;
?>
<div id="payment-box">
<?php
		// Start for Cart list for Events -Darrell
        echo "<h4>$events</h4>";
        echo "<table width=100%>
        <tr>
        	<th>Event/Equipment</th>
        	<th>Price</th>
          <th>Delete </th>
        </tr>";
        $hiddenTotal = cartList(); // total price for events -Darrell
        echo "</table>";
        echo "<br><br>";
        // End for Cart list for Events -Darrell
        $totalpayment += $hiddenTotal; // Test for adding total event price -Darrell
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


