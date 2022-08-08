<?php 
include('dbcon.php');

?>
<?php $id = $_GET["ID"];?>
<?php         
							
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
								include('dbcon.php');	
									mysql_query("update promotion set status = 'Approved' where user_id = '$id'");
									mysql_query("update promotion set approval_date = '$dt' where user_id = '$id'");
									echo"<script>alert('The Recommended promotion by  Department of $department is Approved and email notification is sent to $full_name')</script>";	
									$message = "Dear $full_name your promotion request which is recomended by the department of $department is Approved by dmubu  Human Resource.!!!!!";
									mail($e_mail, $subject, $message, "From: "."hulunayehumolla.com");
									echo "<script>windows: location='approvepro.php'</script>";
							}
							if(isset($_POST['reject_promo'])){
									mysql_query("update promotion set status ='Reject' where user_id='$id' ") or die(mysql_error());
									echo"<script>alert('The Promotion is Rejected and email notification is sent')</script>";	
									$message = "Dear $full_name your promotion is not accepted .!!!!!";
									mail($e_mail, $subject, $message, "From: "."hulunayehumolla.com");
									echo "<script>windows: location='approvepro.php'</script>";
							}


?>	
									 
    <link href="newmodalwil/animate.css" rel="stylesheet">
	<!--sele
	
                            <div class="modal inmodal" id="myModalapprove_pro" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" style="width:59%;">
								
                                    <div class="modal-content animated flipInY">-->
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Approve Employee Promotion</h4>
                                            
                                        </div>
										
                                        <div class="modal-body">
										<form class="form-horizontal form-label-left" novalidate enctype="multipart/form-data" method="POST" onclick="">
									 <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">User Id <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="user_id" class="form-control col-md-7 col-xs-12" readonly value="<?php echo $rows['user_id'];?>"name="user_id" onkeypress="return alpha(event,letters)" type="text">
                      </div>
                    </div> 
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="l_name">Full Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="full_name" readonly value="<?php echo $rows['full_name'];?>" class="form-control col-md-7 col-xs-12"name="full_name" onkeypress="return alpha(event,letters)" type="text">
                      </div>
                    </div>
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">year <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="year" readonly value="<?php echo $rows['year'];?>"  class="form-control col-md-7 col-xs-12"name="year" type="text">
                      </div>
                    </div>	
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">Experience <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="experience" readonly value="<?php echo $rows['experience'];?>" class="form-control col-md-7 col-xs-12"name="experience" type="text">
                      </div>
                    </div>
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">Rank <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="rank" readonly value="<?php echo $rows['rank'];?>" class="form-control col-md-7 col-xs-12"name="rank" type="text">
                      </div>
                    </div>
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">Qualifiction <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="qualification" readonly value="<?php echo $rows['qualification'];?>" class="form-control col-md-7 col-xs-12"name="qualification"type="text">
                      </div>
                    </div>
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">Department <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="department" readonly value="<?php echo $rows['department'];?>" class="form-control col-md-7 col-xs-12"name="department" type="department">
                      </div>
                    </div>
					 <ul class="nav navbar-nav navbar-right" style="margin-top:-40%;margin-right:2%;">
                            <li class="">
                               <?php
							$query=mysql_query("select * from account where user_id='$id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                               
                                   <?php echo"<img width='120'height='120' src='profile/".$row['image']."'alt='profile pic'>";?><br>
                               &nbsp;&nbsp;&nbsp; Profile
                             
                            </li></ul>
					 
<script type="text/javascript">
<!--
var letters=' ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
var numbers='1234567890'
var signs=',.:;@-\''
var mathsigns='+-=()*/'
var custom='<>#$%&?¿'

function alpha(e,allow) {
     var k;
     k=document.all?parseInt(e.keyCode): parseInt(e.which);
     return (allow.indexOf(String.fromCharCode(k))!=-1);
	 alert('letter only');
}

// -->
</script>    <div class="modal-footer">
                                           <input type="submit" name="approve_promo" class="btn btn-primary" value="Approve"/>
                                           <input type="submit" name="reject_promo" class="btn btn-primary" value="Reject"/>
                                        <a href="approvepro.php">
										<button type="button" class="btn btn-white" >Close</button></a>
										</div></form>
                                        </div>
                                      
					
    <script src="newmodalwil/jquery-2.1.1.js"></script><!--sele-->
<!--sele-->
				
	
