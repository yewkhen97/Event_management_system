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
    <style>
 
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
.button1 {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.button1:hover {
  opacity:1;
}

.signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 500px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
  </style>

  
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="customerMenu.php?id=<?php echo"$_SESSION[id]";?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Customer Dasboard</li>
          </ol>

          <!-- Page Content -->
          <h1>Select Your Event Package</h1>
          <hr>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()"></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-right:200px">

  <form class="modal-content" action="../../BusinessServiceLayer/UserC/cMessageController.php?id=<?php echo"$_SESSION[id]";?>&event=cusmsg" method="POST">
    <div class="container">
      <h1><b>Message Supplier</b></h1>
      <br><label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter your email" name="email" required>

      <label for="msg"><b>Message</b></label><br>
      <textarea placeholder="Type message.." name="msg" required></textarea>

      <div class="clearfix">
        <button type="submit" class="button1" >Send</button>
      </div>
    </div>
  </form>
</div>

<script>
  function sendMessage() {
    alert("Your message has been sent. ");
  }
</script>
<br>

     <?php
         include 'customerFooter.php';
         ?>



</html>