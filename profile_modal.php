
    <?php
	$error = 0;
	if(isset($_POST['change_profile'])){
		$image = $_FILES['image']['tmp_name'];
										$image = $_FILES['image']['tmp_name'];
										$image_name = $_FILES['image']['name'];
										$image_size = getimagesize($_FILES['image']['tmp_name']);
										$image_type = $_FILES['image']['type'];
										$image_error = $_FILES['image']['error'];
										if($image_size==FALSE && $error ==0 ){
											echo '<div class="alert alert-dismissable alert-danger error" >';
												echo"<script>alert('That is not an image!!!!!!!')</script>";
												
											echo '</div>';
										
											$error = 1;
										}
											else if($image_error > 0 && $error == 0){
											echo '<div class="alert alert-dismissable alert-danger">';
											echo"<script>alert('There is error in uploading an image!!!!!!!')</script>";
												
											echo '</div>';
											$error = 1;
										}
										else if($error == 0){
											include("dbcon.php");
											mysql_query("update account set image='"."$image_name"."'where user_id='$session_id'")or die(mysql_error() );
										
											move_uploaded_file($image,"profile/".$image_name);
											echo '<div class="alert alert-dismissable alert-success">';
												echo '<strong>'.'<center>'."upload your profile successfully!!!".'</center>'.'<strong>';
											echo '</div>';
									}								
	}
	?>    
	<!--external css-->
	
   
	<!--external css-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="error/valcss.css" rel="stylesheet" />
		<link href="asset/css/bootstrap.css" rel="stylesheet">
    <link href="asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/css/style-responsive.css" rel="stylesheet">
	<form method="post" enctype="multipart/form-data">
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg" style="width:45%;">
                    <div class="modal-content" >

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                       <center><h2 class="form-login-heading" style="color:white;"><i class="fa fa-sign-in"></i>sign in now</h2></center>
                      </div>
                      <div class="modal-body">
		                        
		                   <input type="file" name="image" required>
									
									
		                      </div>
		                      <div class="modal-footer">
		                
						<button id="send" type="submit" name="change_profile"class="btn btn-success" >Change profile</button>	
						
						</div>
 
				   <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-right:85%;">Close</button>
				  
	                   </div>
                      

                    </div>
                  </div>
                </div></form>
				
	
