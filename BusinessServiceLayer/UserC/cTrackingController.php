<?php
if (session_status() == PHP_SESSION_ACTIVE) {
}
else{
session_start();
}

					//supplier manage order
	function manageOrder(){
			include '../../BusinessServiceLayer/UserM/cTrackingModel.php';
			$result = getEventOrder($_SESSION['id']);

             if(!is_null($result)){
				if ($result-> num_rows > 0){
					while ($row = $result-> fetch_assoc()){
 
 							echo"<tr><td>".$row["B_bookingID"]."</td>";
                                                     $result2 = checknamepackage($row["EP_packageID"]);
                              							if ($result2-> num_rows > 0){
															while ($row2 = $result2-> fetch_assoc()){
 

							                         echo"<td>".$row2["EP_packageName"]."</td>";
													
													    echo"<td>---</td>";
                                                     echo"<td>".$row["V_venueID"]."</td>";
                                                     echo"<td>".$row["eventPrice"]."</td>";
                                                      echo"<td>".$row["Order_Date"]."</td>";
                                                       echo"<td>".$row["C_customerID"]."</td>";
                                                          $redbtn=0;
                                                         $result3 = getStatus($row["B_bookingID"]);
                                                         if ($result3-> num_rows > 0){
															while ($row3 = $result3-> fetch_assoc()){
															$str_arr = explode (",",$row3["TO_process"] );
															$str_arr2 = explode (",",$row3["TO_Date"] );
														   echo"<td>";
														   $i=1;
														
														   foreach($str_arr as $value){
 																	//	echo"Status $i:&nbsp".$str_arr[$i-1]."&nbsp&nbspDate:&nbsp".$str_arr2[$i-1]."<br>";
														   	 echo"<table ><tr><td>".$str_arr2[$i-1]."</td><td>".$str_arr[$i-1]."</td></tr></table>";
														   	 						if($str_arr[$i-1]=="Done"){
 																			$redbtn=1;

 																		}
 																		$i++;
 																		}
                                
 																		echo"</td>";
															}
														}
														else{

															echo"<td>none</td>";
														}



                                                            
                                                       echo" <td><form action='../../BusinessServiceLayer/UserM/cTrackingModel.php?id=".$_SESSION['id']."&event=stsadd' method='POST'>
                                                      												<select class='form-control' name='status' id='status' required> 
													                                            
													 											<option value=''>Select One</option>
																								  <option value='Order Create'>Order Create</option>
																								  <option value='In Progress'>In Progress</option>
																								  <option value='Almost Done'>Almost Done</option>
																								  <option value='Done'>Done</option></select></td>";


														echo"<td>  <input type='date' class='form-control' id='ETA' name='ETA' required></td>";
                                                             if ($redbtn==1){
                                                          	  echo"<td> <button type='submit' name='B_bookingID' value=". $row['B_bookingID'] . " class='btn btn-danger' disabled>Status Done</button></td></form></tr>";
                                                          	  $redbtn=0;
                                                          }
                                                          else{
                                                       echo"<td> <button type='submit' name='B_bookingID' value=". $row['B_bookingID'] . " class='btn btn-info'>Add Status</button></td></form></tr>";
                                                   }
															}
														}
                       

				         






															}
											}
										}
				$result = getEquipmentOrder($_SESSION['id']);
				if(!is_null($result)){
					if ($result-> num_rows > 0){
						while ($row = $result-> fetch_assoc()){
 
 							echo"<tr><td>".$row["B_bookingID"]."</td>";
							echo"<td>---</td>";

                                                  $result3 = checknameequipment($row["EOd_orderID"]);
                              							if ($result3-> num_rows > 0){
															while ($row3 = $result3-> fetch_assoc()){
 

							                     echo"<td>".$row3["EQ_equipmentName"]."</td>";
 
                                                 echo"<td>---</td>";
                                                 echo"<td>".$row["eventPrice"]."</td>";
 												  echo"<td>".$row["Order_Date"]."</td>";
                                                    echo"<td>".$row["C_customerID"]."</td>";




                                                    			  $result3 = getStatus($row["B_bookingID"]);
                                                         if ($result3-> num_rows > 0){
															while ($row3 = $result3-> fetch_assoc()){

																	$str_arr = explode (",",$row3["TO_process"] );
															$str_arr2 = explode (",",$row3["TO_Date"] );
														   echo"<td>";
														   $i=1;
														   $redbtn=0;
														   foreach($str_arr as $value){
 																	//	echo"Status $i:&nbsp".$str_arr[$i-1]."&nbsp&nbspDate:&nbsp".$str_arr2[$i-1]."<br>";
														   	 	 echo"<table ><tr><td>".$str_arr2[$i-1]."</td><td>".$str_arr[$i-1]."</td></tr></table>";
 																	

 																				if($str_arr[$i-1]=="Done"){
 																			$redbtn=1;

 																		}
 																		$i++;
 																		}
 																		echo"</td>";

 																		
															}
														}
														else{

													echo"<td>none</td>";

                                                      
														}

													 echo" <td><form action='../../BusinessServiceLayer/UserM/cTrackingModel.php?id=".$_SESSION['id']."&event=stsadd' method='POST'>
													 											<select class='form-control' name='status' id='status' required> 
													                                            
													 											<option value=''>Select One</option>
																								  <option value='Order Create'>Order Create</option>
																								  <option value='In Progress'>In Progress</option>
																								  <option value='Almost Done'>Almost Done</option>
																								  <option value='Done'>Done</option></select></td>";
														echo"<td>  <input type='date' class='form-control' id='ETA' name='ETA' required></td>";
                                                          if ($redbtn==1){
                                                          	  echo"<td> <button type='submit' name='B_bookingID' value=". $row['B_bookingID'] . " class='btn btn-danger' disabled>Status Done</button></td></form></tr>";
                                                          	  $redbtn=0;
                                                          }
                                                          else{
                                                       echo"<td> <button type='submit' name='B_bookingID' value=". $row['B_bookingID'] . " class='btn btn-info'>Add Status</button></td></form></tr>";
                                                   }
															}
														}



															}
											}
										



						 }
				}

function trackingOrder(){



include '../../BusinessServiceLayer/UserM/cTrackingModel.php';
$result = getPurchasedOrder($_SESSION['id']);


 if(!is_null($result)){


 								if ($result-> num_rows > 0){
					while ($row = $result-> fetch_assoc()){
 
								echo"<tr><td>".$row["B_bookingID"]."</td>";
                                           if(is_null($row["EP_packageID"]))
											echo"<td>---</td>";

                                       $result2 = checknamepackage($row["EP_packageID"]);
                              							if ($result2-> num_rows > 0){
															while ($row2 = $result2-> fetch_assoc()){
																   echo"<td>".$row2["EP_packageName"]."</td>";
 																				}
 																			}
 											if(is_null($row["EOd_orderID"]))
													echo"<td>---</td>";
                                                  $result3 = checknameequipment($row["EOd_orderID"]);
                              							if ($result3-> num_rows > 0){
															while ($row3 = $result3-> fetch_assoc()){
 

							                     echo"<td>".$row3["EQ_equipmentName"]."</td>";

							                 }
							             }

							             if(is_null($row["V_venueID"]))
													echo"<td>---</td>";
										else
							              echo"<td>".$row["V_venueID"]."</td>";

							              echo"<td>".$row["eventPrice"]."</td>";
							              echo"<td>".$row["Order_Date"]."</td>";

							              	 $result5 = getprogress($row["B_bookingID"]);
							              	  if ($result5-> num_rows == 0){

							              	  	echo"<td>Waiting Response</td>";

							              	  	echo"<td>Waiting Response</td>";
							              	  }
							              
							              	 $statustype=0;
							              	 if ($result5-> num_rows > 0){
															while ($row5 = $result5-> fetch_assoc()){
																	$str_arr = explode (",",$row5["TO_process"] );
																	
																   $i=0;
																  
																   echo"<td>";
																		   foreach($str_arr as $value){
 																	//	echo"Status $i:&nbsp".$str_arr[$i-1]."&nbsp&nbspDate:&nbsp".$str_arr2[$i-1]."<br>";
														   					 echo"<table ><tr>".$str_arr[$i]." </tr></table>";
														   	 						

														   	 						
 																			    if($str_arr[$i]=="Order Create"){$statustype=1;}
 																			    if($str_arr[$i]=="In Progress"){$statustype=2;}
 																			    if($str_arr[$i]=="Almost Done"){$statustype=3;}
 																			    if($str_arr[$i]=="Done"){$statustype=4;}

 																		
 																		$i++;
 																		}
 																		echo"</td>";


 																			$str_arr2 = explode (",",$row5["TO_Date"] );
																   $i=0;

 																			 echo"<td>";
																		   foreach($str_arr2 as $value){
 																	//	echo"Status $i:&nbsp".$str_arr[$i-1]."&nbsp&nbspDate:&nbsp".$str_arr2[$i-1]."<br>";
														   					 echo"<table ><tr>".$str_arr2[$i]." </tr></table>";
														   	 						

														   	 						
 																			    

 																		
 																		$i++;
 																		}
 																		echo"</td>";


 																				}

 																			}
 																			if( $statustype==0){
 																		echo"<td> <button type='submit'  class='btn btn-block'>Waiting Response</button></td></form></tr>";}
 																		else if( $statustype==1){
 																		echo"<td> <button type='submit'  class='btn btn-success btn-block'>Order Create</button></td></form></tr>";}

 																		
 																		else if( $statustype==2){
 																		echo"<td> <button type='submit'  class='btn btn-primary btn-block'>In Progress</button></td></form></tr>";}

 																		
 																		else if( $statustype==3){
 																		echo"<td> <button type='submit'  class='btn btn-warning btn-block'>Almost Done</button></td></form></tr>";}

 																		
 																		else if( $statustype==4){
 																		echo"<td> <button type='submit'  class='btn btn-danger btn-block'>Done </button></td></form></tr>";}

 																		}


						}
				}

 }
















?>

