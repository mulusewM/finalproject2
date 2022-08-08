<?php
include('dbcon.php');?>
	<?php

$xero=mysql_query("select * from vacancy ");
while($xe=mysql_fetch_array($xero)){
	$array[]=$xe;
	$vac=$xe['vacancy_id'];
	
}
	$error = 0;
	if(isset($_POST['commit'])){
								include('dbcon.php');
								if (isset($_POST['commit'])){
								
								$first_name = $_POST['first_name'];
								$meddile_name = $_POST['meddile_name'];
								$last_name = $_POST['last_name'];
								$sex = $_POST['sex'];
								$age = $_POST['age'];
								$address = $_POST['address'];
								$department = $_POST['department'];
								$re_status="Registered";
								$month=date('F Y');
								$experience = $_POST['experience'];
								$reg_date = date("y-m-d");
							     $m=0;
								 $h=0;
								$nationality = "Ethiopia";
								$region = $_POST['region'];
								$phone = $_POST['phone'];
								$password = $_POST['passwords'];
								$confirm = $_POST['confirm'];
								$ecrpt_pass=base64_encode($password);
								$e_mail = $_POST['e_mail'];
								/*$e_mail=base64_encode($e_mail);
								$e=base64_decode($e_mail);*/
								$now = mysql_query("SELECT e_mail from register");
								
								$status = "Registered";
                                $subject="dmubu Human Resource";
								function generateRandomString1($l=5){
									return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,$l);
								}
								$applicant_id=generateRandomString1();
								
								/*$file_cv = addslashes(file_get_contents($_FILES['file_cv']['tmp_name']));*/
		/*$file_cv = addslashes(file_get_contents($_FILES['file_cv']['tmp_name']));*/
		$Juses = addslashes($_FILES['file_cv']['name']);
		/*$image_size = getimagesize($_FILES['file_cv']['tmp_name']);*/
		$type = explode('.', $Juses);
		$type = end($type);
		if($type != 'doc'  && $type != 'docx' && $type != 'pptx' && $type != 'csv'  ){
			$message = "Invalid File Format Not Supported !";
			echo '<div class="alert alert-dismissable alert-danger">';
			echo '<button type="button" class="close" data-dismiss="alert">X</button>';
			echo '<strong>'.$message.'</strong>';
			echo '</div>';
			}
								$tempo = $_FILES['tempo']['tmp_name'];
										$tempo = $_FILES['tempo']['tmp_name'];
										$tempo_name = $_FILES['tempo']['name'];
										$image_size = getimagesize($_FILES['tempo']['tmp_name']);
										$image_type = $_FILES['tempo']['type'];
										$image_error = $_FILES['tempo']['error'];
                                        if($image_size==FALSE && $error ==0 ){
											echo '<div class="alert alert-dismissable alert-danger error" >';
												echo '<strong>'.'<center>'."please insert image format for upload Tempo!".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
											else if($image_error > 0 && $error == 0){
											echo '<div class="alert alert-dismissable alert-danger">';
												echo '<strong>'.'<center>'."There is error in uploading an image".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}	$profile = $_FILES['profile']['tmp_name'];
										$profile = $_FILES['profile']['tmp_name'];
										$profile_name = $_FILES['profile']['name'];
										$image_size = getimagesize($_FILES['profile']['tmp_name']);
										$image_type = $_FILES['profile']['type'];
										$image_error = $_FILES['profile']['error'];
                                        if($image_size==FALSE && $error ==0 ){
											echo '<div class="alert alert-dismissable alert-danger error" >';
												echo '<strong>'.'<center>'."please insert image format for upload profile!".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}
											else if($image_error > 0 && $error == 0){
											echo '<div class="alert alert-dismissable alert-danger">';
												echo '<strong>'.'<center>'."There is error in uploading an image".'</center>'.'<strong>';
											echo '</div>';
											$error = 1;
										}	
								
		 					
$my=mysql_query("select * from register")or die (mysql_error());
			while($as=mysql_fetch_array($my)){
			$good=$as['e_mail'];
			$go=$as['first_name'];
			$me=$as['meddile_name'];
               if($e_mail == $good){
				   
				   $m = 1;
				   break;
							
						}
				
		     }	
			 if($m == 1){
				 echo '<div class="alert alert-dismissable alert-danger">';
				echo '<strong>'."Sorry the email you insert is belongs to $go $me user please insert your Owen".'</strong>';
				echo '</div>';
			 }
			 else{
				 
$pon=mysql_query("select * from register")or die (mysql_error());
			while($pons=mysql_fetch_array($pon)){
			$goov=$pons['phone'];
			
               if($phone == $goov){
				   
				   $h = 1;
				   break;
							
						}
				
		     }	
			 if($h == 1){
				 echo '<div class="alert alert-dismissable alert-danger">';
				echo '<strong>'."Sorry the phone number you insert is belongs to user please insert your Owen".'</strong>';
				echo '</div>';
			 }
			 else{
				
				 
								if($password==$confirm && $error == 0)
								{
									$turu1=mysql_query("select position_title from employeerequest where status='approved' and department='$department'"); 
				$ad1=mysql_fetch_array($turu1);
					 $array[]=$ad1;
					 $position=$ad1['position_title'];
	$query = "insert into register (first_name,meddile_name,last_name,sex,age,applicant_id,address,experience,reg_date,nationality,region,phone,password,e_mail,vacancy_id,department,status,file_cv,tempo,profile,re_status,month,position) 
	values('$first_name','$meddile_name','$last_name','$sex','$age','$applicant_id','$address','$experience','$reg_date','$nationality','$region','$phone','$ecrpt_pass','$e_mail','$vac','$department','$status','$Juses','$tempo_name','$profile_name','$re_status','$month','$position')";
											
								$result = mysql_query($query)or die(mysql_error());
							/*move_uploaded_file($tempo,"profile/".$tempo_name);
							move_uploaded_file($profile,"profile/".$profile_name);
											
								
			move_uploaded_file($_FILES["file_cv"]["tmp_name"], "department/files/" . $_FILES["file_cv"]["name"]);*/
			
								if( $result==1){
								$message = "Dear $first_name $meddile_name 
your Registration Id is $applicant_id. 
we ask you to wait until you are selected or screened as employee of dmubu  human resource ...!";
								mail($e_mail, $subject, $message, "From: "."hulunayehumolla12@gmail.com");
								
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Congratulation You are successfully registered .".'</strong>';
								echo '</div>';
								
								echo "<script>windows: location='registration.php'</script>";
								
								}
								else{
								echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'."Error in sending message.".'</strong>';
									echo '</div>';}
									
									
	}
	    else{
					echo '<div class="alert alert-dismissable alert-danger">';
					echo '<strong>'."Password you enter don't match.".'</strong>';
					echo '</div>';
			 }	
			 
			 }					
			 }
}}



?>