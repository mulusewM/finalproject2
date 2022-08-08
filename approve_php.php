		
<?php         
				include('dbcon.php');
							
                                  $querys = mysql_query("SELECT * FROM promotion WHERE user_id='$id' "); 
								  $rows = mysql_fetch_assoc($querys);
								  $department=$rows['department'];
								  $full_name=$rows['full_name'];
								  $subject="dmubu Human Resource ";
								  $quer = mysql_query("SELECT e_mail FROM account WHERE user_id='$id' "); 
								  $row = mysql_fetch_assoc($quer);
								  $e_mail=$row['e_mail'];
								
								
								 ?>	
<?php

if(isset($_POST['approve_promo'])){
	              $dt = date("y-m-d");
									
									mysql_query("update promotion set status = 'Approved' where user_id = '$id'");
									mysql_query("update promotion set approval_date = '$dt' where user_id = '$id'");
									echo"<script>alert('The Recommended promotion by  Department of $department is Approved and email notification is sent to $full_name')</script>";	
									$message = "Dear $full_name your promotion request which is recomended by the department of $department is Approved by kiot Human Resource.!!!!!";
									mail($e_mail, $subject, $message, "From: "."hulunayehumolla12@gmail.com");
									echo "<script>windows: location='approvepro.php'</script>";
							}
							if(isset($_POST['reject_promo'])){
									mysql_query("update promotion set status ='Reject' where user_id='$id' ") or die(mysql_error());
									echo"<script>alert('The Promotion is Rejected and email notification is sent')</script>";	
									$message = "Dear $full_name your promotion is not accepted .!!!!!";
									mail($e_mail, $subject, $message, "From: "."hulunayehumolla12@gmail.com");
									echo "<script>windows: location='approvepro.php'</script>";
							}


?>	