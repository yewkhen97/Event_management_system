<?php
session_start();
include '../../libs/connection.php';
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
   include 'supplierHeader.php';
?>
<style type="text/css">
  tr[data-href]{
    cursor: pointer;
  }
</style>
<body>
   <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="supplierMenu.php?id=S_1">Home</a>
            </li>
            <li class="breadcrumb-item active">Update Equipment</li>
          </ol>

          <!-- Page Content -->
          <h1>Equipment</h1>
          <hr>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()"></a>
</header>
      <section class="container content-section">
        <h2 class="section-header">EQUIPMENT UPDATE</h2>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Equipment ID</th>
                  <th scope="col">Equipment Name</th>
                  <th scope="col">Equipment Category</th>
                  <th scope="col">Quantity Available</th>
                  <th scope="col">Equipment Price</th>
                  <th scope="col">Equipment Detail</th>
                  <th scope="col">Equipment Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              
                  <?php 
                      $sup=$_SESSION["id"];
                      $query="SELECT * FROM equipment WHERE S_supplierID='$sup'";
                      $result = mysqli_query($conn,$query);
                          while($row = $result->fetch_assoc()){
                              $id = $row["EQ_equipmentID"];
                              $name = $row["EQ_equipmentName"];
                              $category = $row["EQ_category"];
                              $quantity = $row["EQ_quantityAvailable"];
                              $price = $row["EQ_price"];
                              $detail = $row["EQ_detail"];
                              $status = $row["EQ_status"];
                    ?>
                       <tr>
                         <td><?php echo"$row[EQ_equipmentID]" ?></td>
                         <td><?php echo"$row[EQ_equipmentName]" ?></td>
                         <td><?php echo"$row[EQ_category]" ?></td>
                         <td><?php echo"$row[EQ_quantityAvailable]" ?></td>
                         <td><?php echo"$row[EQ_price]" ?></td>
                         <td><?php echo"$row[EQ_detail]" ?></td>
                         <td><?php echo"$row[EQ_status]" ?></td>
                          <form action="sEditEquipment.php?id=<?php echo $row["EQ_equipmentID"];?>" method="POST">
                        <td><input type='hidden' name='EQid' value=<?php echo $row["EQ_equipmentID"]; ?>>
                            <input type='hidden' name='EQname' value=<?php echo $row["EQ_equipmentName"]; ?>>
                            <input type='hidden' name='EQcategory' value=<?php echo $row["EQ_category"]; ?>>
                            <input type='hidden' name='EQqty' value=<?php echo $row["EQ_quantityAvailable"]; ?>>
                            <input type='hidden' name='EQprice' value=<?php echo $row["EQ_price"]; ?>>
                            <input type='hidden' name='EQdetail' value=<?php echo $row["EQ_detail"]; ?>>
                            <input type='submit' value='Edit'>
                          </form>
                        </td>
                        <td>
                          <form action="../../BusinessServiceLayer/UserC/sEquipmentController.php?id=<?php echo"$_SESSION[id]";?>&event=supplierdelete" method="POST">
                            <input type='hidden' name='EQid' value=<?php echo $row["EQ_equipmentID"]; ?>>
                           
                            <input type='submit' value='Delete'>
                          </form>
                        </td>
                       </tr>
                   <?php  
                  }
                  ?>
                
              </tbody>
            </table>
            
        </section>
        <script>
          $(document).ready(function (){
            $(document.body).on("click", "tr[data-href]",function(){
                window.location.href=this.dataset.href; 
            });
          }); 

        </script>
</body>
<?php
         include 'supplierFooter.php';
?>
</html>