					<?php

								include('../dbcon.php');
							$id = $_GET["ID"];
							$querys = mysql_query("SELECT * FROM register WHERE applicant_id='$id' "); 
								  $rows = mysql_fetch_assoc($querys);
								$status = "evaluated";
 ?>
	<?php
if(isset($_POST['update'])){
								include('../dbcon.php');
								if (isset($_POST['update'])){
									
						  $user_id=$_POST['applicant_id'];						 
						  $f_names=$_POST['first_name'];			
						 $mark=$_POST['mark'];	
if($mark>100 || $mark<50){
echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'."correct the total mark between 50 and 100 %".'</strong>';
								echo '</div>';	
}else{
	$query = "insert into evaluated (applicant_id,f_name,mark,status) values('$user_id','$f_names','$mark','$status')";
								$result = mysql_query($query)or die(mysql_error());
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'." The action has been successfull.".'</strong>';
								echo '</div>';				
               mysql_query("update register set status = '$status' where applicant_id = '$id'");
							 }
								else{
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'."Error in sending message.".'</strong>';
								echo '</div>';}
}						 
					
								}
								}     ?>		