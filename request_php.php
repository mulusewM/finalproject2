<?php

	if(isset($_POST['request'])){
								include('dbcon.php');
								if (isset($_POST['request'])){
				function generateRandomString($l=5){
									return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,$l);
								}
								
								$request_id=generateRandomString();
								$qualification = $_POST['qualification'];
								$quantity = $_POST['quantity'];
								$term_of_employement = $_POST['term_of_employement'];
								$positio = $_POST['position_title'];
								
								$request_date = date("y-m-d");
							    $m=0;
								
								$popm =  mysql_query("SELECT * FROM account where user_id='$session_id'");
								while($aam = mysql_fetch_array($popm)){
									$popnm = $aam['department'];
								   $rmai = $aam['e_mail'];
								
								}
								$s=0;
								$re="free";
								$monday= mysql_query("SELECT salary from position WHERE pos_name='$positio'");
								 while($abe= mysql_fetch_array($monday)){
									 $sa=$abe['salary'];
									
								 }
									$status = "Request";
								$query = "insert into employeerequest (request_id,qualification,quantity,term_of_employement,department,request_date,user_id,position_title,salary,e_mail,status) values('$request_id','$qualification','$quantity','$term_of_employement','$popnm','$request_date','$session_id','$positio','$sa','$rmai','$status')";
								
								$result = mysql_query($query)or die(mysql_error());
								if( $result==1){
									
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'." your new employee request has been sent successfully".'</strong>';
								echo '</div>';
								}
								else{
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Error in sending message.".'</strong>';
								echo '</div>';}
	}}
	
								
								?>
				              