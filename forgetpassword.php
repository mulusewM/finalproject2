
   

                      
     <link href="forapplymodal/bootstrap.min.css" rel="stylesheet">
	<script src="forapplymodal/bootstrap.min.js"></script>
                 
   
	<!--external css-->
	<link href="commanasset/assets/css/bootstrap.css" rel="stylesheet" />
		<link href="commanasset/assets/css/style.css" rel="stylesheet" />
		<link href="error/valcss.css" rel="stylesheet" />
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg" style="width:45%;">
                      <div class="modal-body">
                          	
	  	<?php
								include('dbcon.php');
								if (isset($_POST['forgetpassword'])){
								$e_mail = $_POST['e_mail'];
								$e_mail=base64_encode($e_mail);
									$e=base64_decode($e_mail);
								$subject="dmubu Human Resource";	
								$query = "SELECT * FROM Account WHERE e_mail='$e'";
								$result = mysql_query($query)or die(mysql_error());
								$num_row = mysql_num_rows($result);
									$row=mysql_fetch_array($result);
									$f_name =$row["f_name"];
									$l_name =$row["l_name"];
									$pass =$row["passwords"];
									$de=md5($pass);
									if( $num_row > 0 ) {
									
										$message = "Dear $f_name $l_name  your recovery password is $de. You can login now ...!";

											 // Send mail by PHP Mail Function
											mail($e, $subject, $message, "From: "."kiothrms@kiot.com");
											echo '<div class="alert alert-dismissable alert-success"><strong>';
											echo "E-mail Notification is sent and Dear ".$f_name." ".$l_name."  your information is now  updated!<br>";
											echo '</strong></div>';
								echo "<script>windows: location='login.php'</script>";
									}
									else{ 
							echo"<script>alert('these email does not found in our data base')</script>";
                           echo "<script>windows: location='login.php'</script>";
								
								}
								}
								?>
		      <form class="login-form"onsubmit="return validateForm()" method="post"> 
                        <button type="button" style="padding-right:0%;" class="close" data-dismiss="modal"><span aria-hidden="true">X</span>
                        </button>			  
        <div class="login-wrap">
		
            <p style="color:white;"><i class="icon_lock_alt"></i> Enter your E-mail to Recovery your password</p>
           
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_email"></i></span>
                <input type="email" name="e_mail" required class="form-control" placeholder="Email">
            </div>
            <label class="checkbox"><br><br>
            <button class="btn btn-info btn-lg btn-block" name="forgetpassword" type="submit">submit</button>
        </div>
      </form>
