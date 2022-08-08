<?php
if(isset($_POST['createaccount'])){
								include('dbcon.php');
								if (isset($_POST['createaccount'])){
                                $f_name = $_POST['f_name'];
								$l_name = $_POST['l_name'];
								$e_mail = $_POST['e_mail'];
								/*$e_mail=base64_encode($e_mail);
									$e=base64_decode($e_mail);*/
								$department = $_POST['department'];
								$yes=0;
								$user_type = $_POST['user_type'];
								$salary = $_POST['salary'];
								$sex = $_POST['sex'];
					           $subject="dmubu Human Resource";
					           $req="Placed";
								function generateRandomString1($pass=5){
									return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,$pass);
								}	
								$passwords=generateRandomString1();
								/*$encode_pass=md5($passwords);
								$decode=md5($encode_pass);*/
								function generateRandomString($id=4){
									return substr(str_shuffle("0123456789"), 0,$id);
								}
								$user_id=generateRandomString();
								$state='1';
								$year=date("y");
								$app=date("y-m-d");
								$my=mysql_query("select * from account")or die (mysql_error());
												while($as=mysql_fetch_array($my)){
									$good=$as['e_mail'];
									$go=$as['f_name']."".$as['l_name'];
               if($e_mail == $good){
				   
				   $yes = 1;
				   break;
							
						}
				
		     }	
			 if($yes == 1){
				  echo '<div class="alert alert-dismissable alert-danger">';
									echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'." The email you insert is the email of other user please enter your owen email".'</strong>';
								echo '</div>';
							echo '</div>';
			 }
			 else{
				 $z=0;
				$turu=mysql_query("select * from department where status='imported'"); 
				 while($ad=mysql_fetch_array($turu)){
					 $array[]=$ad;
					 $dep=$ad['department'];
					 if($department==$dep){
					  $z=1;
                      break;					  
					 }
				 }
				 if($z==1){
					
								$query = "insert into account (user_id,f_name,l_name,passwords,department,user_type,year,approval_date,e_mail,state,sex,salary,status) values('$user_id','$f_name','$l_name','$passwords','$department','$user_type','$year','$app','$e_mail','$state','$sex','$salary','$req')";
								$result = mysql_query($query)or die(mysql_error());
								
								if( $result==1){
								$message = "Dear $f_name $l_name your account is know created and your User Id is $user_id and your password is $passwords take these information or user id and password to sing in to our system";
								
								
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'." Account is created for $f_name  $l_name  successfully thank you".'</strong>';
								echo '</div>';
									
							
								}
								else{
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Error in sending message.".'</strong>';
								echo '</div>';}
			 }else{
				echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'."Insert Correct Department.".'</strong>';
								echo '</div>'; 
			 }
								
	}
	    
}}   ?>