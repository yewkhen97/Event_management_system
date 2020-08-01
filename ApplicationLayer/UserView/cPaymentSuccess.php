
<?php
session_start();


include '../../BusinessServiceLayer/UserC/BookingController.php';
changeStatus();


  

?>
<!DOCTYPE html>
<html lang="en">

  <head>

     <?php
   include 'customerHeader.php';
?>
            <html>
<head>
<title>Order Placed</title>
<style>
.response-text {
    display: inline-block;
    max-width: 550px;
    margin-left: 550px;
    font-size: 1.5em;
    text-align: center;
    background: #fff3de;
    padding: 42px;
    border-radius: 3px;
    border: #f5e9d4 1px solid;
    font-family: arial;
    line-height: 34px;
}
</style>
</head>
<body>
      <div class="response-text">
        You have placed your order successfully.<br> Thank you for
        shopping with us!
    </div>
  <table  class="table table-bordered">
                <thead>
                  
                  <th colspan="2" style="text-align: center; font-size: 35px;">Receipt</th>
                  
                </thead>

                <tbody style="font-size: 20px;">
                  <?php
                         //receive data
                               if(isset($_SESSION['totalpayment']))
                         {
?>
                      
                    <?php } $date = date('d-m-y h:i:s');?> 
                                <tr>
                                  <td>Payment Date and Time</td>
                                  <td><?php echo"$date";?></td>
                                  </tr>
                                  <td>Total payment</td>
                                  <td><?php echo"RM $_SESSION[totalpayment]";?></td>
                                  </tr>
                                  <tr>
                                  <td>Payment Status</td>
                                  <td style="color: green; font-weight: bold;"><?php echo"Successful";?></td>
                                  <tr>
                                  <td>Payment Detail</td>
                                  <td><?php 
                                  echo"<table >";
                                      echo"<tr>";
                                      echo" <th>Customer ID:</th>";
                                       echo" <td>";      print_r( $_SESSION['id']);        echo" </td>";
                                        echo"</tr>";

                                if(!isset($_SESSION['EP_packageName'][0]))

                                  $pacName='-';
                                else

                                 $pacName=$_SESSION['EP_packageName'][0];
                                               echo"<tr>";
                                      echo" <th>Package Name:</th>";
                                       echo" <td>";     print_r( $pacName);  
                                           echo" </td>";
                                        echo"</tr>";

                                         if(!isset($_SESSION['EQ_equipmentName'][0]))

                                  $eqName='-';
                                else

                                 $eqName=$_SESSION['EQ_equipmentName'][0];

                                   echo"<tr>";
                                    echo" <th>Equipment Name:</th>";
                                      echo" <td>";      print_r(  $eqName);      echo" </td>";
                                      echo"</tr>";
                                    if(!isset($_SESSION['B_bookingID1'][0]))

                                  $bkID=$_SESSION['B_bookingID2'][0];
                                else

                                 $bkID=$_SESSION['B_bookingID1'][0];
                                               echo"<tr>";
                                      echo" <th>Booking ID:</th>";
                                       echo" <td>";      print_r( $bkID); 
                                            echo" </td>";
                                        echo"</tr>";

                                    

                                 echo"</table >";

                                
                               
                                            


                                  ?></td>
                                  </tr>
                                   <tr>
                                  <td colspan="2" style="font-size: 10px;">The official Paypal Receipt already email to your mail box this receipt is system generated receipt if you want to print you may print this receipt! </td>
                                  </tr>
                                <tr>
                                  

                                  <td></td>
                                 <td>
                                  <button class='btn btn-success btn-sm edit btn-flat' onclick="window.print()" name='PRINT THIS RECEIPT' value='back'><i class='fa fa-edit'></i>PRINT THIS RECEIPT</button>
                                  <br>    <br>
                                  <form method="POST" action="customerMenu.php?id=<?php echo"$_SESSION[id]";?>">
                                  <button class='btn btn-success btn-sm edit btn-flat' type='submit' name='BACK' value='back'><i class='fa fa-edit'></i>BACK</button>
                                </form>
                                </td>
                              </tr>



                </tbody>
              </table>


</body>
</html>
</div>
        <!-- /.container-fluid -->

        <?php
         include 'customerFooter.php';
         ?>
</html>