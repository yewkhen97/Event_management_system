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

<style>
  

  .input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn1 {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.msg {
  margin: 30px auto;
  padding: 10px;
  border-radius: 5px;
  color: #3c763d;
  background: #dff0d8;
  border: 1px solid #3c763d;
  width: 50%;
  text-align: center;
}

  
body {
  font-size: 19px;
}
table{
  width: 50%;
  margin: 30px auto;
  border-collapse: collapse;
  text-align: left;
}
tr {
  border-bottom: 1px solid #cbcbcb;
}

th, td{
  border: none;
  height: 30px;
  padding: 2px;
}
tr:hover { 
  background: #F5F5F5;
}


.form1 {
  width: 45%;
  margin: 50px auto;
  text-align: left;
  padding: 20px;
  border: 1px solid #bbbbbb;
  border-radius: 5px;
}



  </style>
  

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="supplierMenu.php?id=S_1">Home</a>
            </li>
            <li class="breadcrumb-item active">Equipment Update</li>
          </ol>

          <!-- Page Content -->
          <h1>Update Equipment</h1>
          <hr>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()"></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<head>
  <title>Edit Equipment</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="../../libs/sUpdateEquiment.js" async></script>
</head>
<body>

  <table>
    <thead>
      <tr>
        <th>Image</th>
        <th>Equipment</th>
        <th>Supplier</th>
        <th>Detail</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    </thead>
    </table>

  <form class="form1"action="../../BusinessServiceLayer/UserC/sEquipmentController.php?id=<?php echo"$_SESSION[id]";?>&event=supplieradd" method="POST">
    <div class="input-group">
      <label>Image</label>
      <input type="file" name="EQimage">
    </div>
    <div class="input-group">
      <label>Equipment</label>
      <input type="text" name="EQname">
    </div>
    <div class="input-group">
      <label>Supplier</label>
      <input type="text" name="CompanyName">
    </div>
    <div class="input-group">
      <label>Details</label>
      <input type="text" name="EQdetail">
    </div>
    <div class="input-group">
      <label>Quantity</label>
      <input type="text" name="EQquantity">
    </div>
    <div class="input-group">
      <label>Price</label>
      <input type="text" name="EQprice">
    </div>
    <div class="input-group">
      <button type="submit" name="save" class="btn1">Save</button>
    </div>
  </form>
 <?php
         include 'supplierFooter.php';
         ?>
</html>