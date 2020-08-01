<?php
if (session_status() == PHP_SESSION_ACTIVE) {
}
else{
session_start();
}
$t1=0;
$t2=0;
$t3=0;
$t4=0;
$t5=0;
$t6=0;
$a1=0;
$a2=0;
$a3=0;
$a4=0;
$a5=0;
$a6=0;
$b1=0;
$b2=0;
include '../../BusinessServiceLayer/UserM/sAnalyticReportModel.php';
	$result = geteventsales($_SESSION['id']);


	if ($result-> num_rows > 0){

					
		while ($row = $result -> fetch_assoc()){
                $b1=$row['COUNT(B_bookingID)'];
         if($row['MONTHNAME(Order_Date)']=='January')
			  $t1=	$row['SUM(eventPrice)'];
			
			 if($row['MONTHNAME(Order_Date)']=='February')
			  $t2=	$row['SUM(eventPrice)'];
			
				 if($row['MONTHNAME(Order_Date)']=='March')
			  $t3=	$row['SUM(eventPrice)'];
			
				 if($row['MONTHNAME(Order_Date)']=='April')
			  $t4=	$row['SUM(eventPrice)'];
			
				 if($row['MONTHNAME(Order_Date)']=='May')
			  $t5=	$row['SUM(eventPrice)'];
			
				 if($row['MONTHNAME(Order_Date)']=='June')
			  $t6=	$row['SUM(eventPrice)'];
			
     
}

}
$result2=getequipmentsales($_SESSION['id']);

		 if ($result2-> num_rows > 0){

					
		while ($row2 = $result2 -> fetch_assoc()){
    $b2=$row2['COUNT(B_bookingID)'];
         if($row2['MONTHNAME(Order_Date)']=='January')
			  $a1=	$row2['SUM(eventPrice)'];
			
			 if($row2['MONTHNAME(Order_Date)']=='February')
			  $a2=	$row2['SUM(eventPrice)'];
			
				 if($row2['MONTHNAME(Order_Date)']=='March')
			  $a3=	$row2['SUM(eventPrice)'];
			
				 if($row2['MONTHNAME(Order_Date)']=='April')
			  $a4=	$row2['SUM(eventPrice)'];
			
				 if($row2['MONTHNAME(Order_Date)']=='May')
			  $a5=	$row2['SUM(eventPrice)'];
			
				 if($row2['MONTHNAME(Order_Date)']=='June')
			  $a6=	$row2['SUM(eventPrice)'];
			

}

}
?>