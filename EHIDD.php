<!DOCTYPE html>
<html lang="en">
<?php include('session1.php');?>
<?php include('dbcon.php');?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Employee Page </title>
  <link rel="shortcut icon" href="images/users.JPG" />
  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="js/jquery.min.js"></script>

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
 <?php
							$qu=mysql_query("select * from account where user_id='$session_id'") or die( mysql_error());
							$r=mysql_fetch_array($qu);
							?>
							
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>dmubu</span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
            <?php
						 $Je = mysql_query("SELECT image FROM account WHERE user_id='$session_id' "); 
                         while($row=mysql_fetch_assoc($Je)){
							 if($row['image'] == ""){
								 echo"<img width='50'height='50' src='profile/0.13.jpg'alt='default profile pic'>";
							 }else{
								  echo"<img width='85'height='56'class='img-circle profile_img' src='profile/".$row['image']."'alt='profile pic'>";
							 }
							 
						 }
							?> </div>
             <div class="profile_info">
                            <span>Welcome,</span>
                            <?php
							$query=mysql_query("select * from account where user_id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?><h2><?php echo $row['f_name']." ".$row['l_name'];  ?></h2>
                        </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
	                       <?php
							$query=mysql_query("select * from account where user_id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                            <h3><?php echo $row['user_type'];  ?></h3>
                            <ul class="nav side-menu">
                                <li><a href="employee.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                             
                                </li>
                                <li><a href="promotion.php"><i class="fa fa-edit"></i>  Request Promotion <span class="fa fa-chevron-down"></span></a>
                                   
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Manage Password <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a data-toggle="modal" data-target=".bs-example-modal-sm">Change Password</a>
                                        </li>
                                    
                                    </ul>
                                </li>
                               
                            </ul>
                        </div>
                     

                    </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
           <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                               <?php
							$query=mysql_query("select * from account where user_id='$session_id'") or die( mysql_error());
							$row=mysql_fetch_array($query);
							?>
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                   <?php echo"<img width='80'height='50' src='profile/".$row['image']."'alt='profile pic'>";?><?php echo $row['f_name']." ".$row['l_name'];  ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a data-toggle="modal" data-target=".bs-example-modal-lg">Profile</a>
									
                                    </li>
                                    <li>
                                    </li>
                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                           
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-red">
											<?php
											$request="activate";
									$zed = mysql_query("SELECT * FROM finance WHERE user_id='$session_id' && status='$request'"); 
										  $X=0;
										  while($z = mysql_fetch_array($zed)){
											$status=$z['status'];
											if($status=="activate"){
											$X++;
											}
											else{
											$X=0;
											}}?>
											<?php echo $X ?></span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                   Account Request Notification
                                            
                                    		<?php
											$request="activate";
									$zedsa = mysql_query("SELECT * FROM finance WHERE user_id='$session_id' && status='$request'"); 
									while($zsa = mysql_fetch_array($zedsa)){
											   $dep=$zsa['department'];
											
											?>
                                        
                                    </li>
                                    <li>
                                        <div class="text-center">
                                          <span class="time"> Request Date:&nbsp; <?php echo $zsa['order_date']; ?></span>
                                        </div><?php } ?>
                                    </li>
                                </ul>
								
				
  <!-- end of  threed notification -->

                        </ul>
						
                    </nav>
					
					<?php include('profile_modal.php');?>
					
        			
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
	  
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                   Promotion Request 
                </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  
                  <span class="input-group-btn">
                            
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
				  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
<?php include('promotion_request_php1.php');?>
<form class="form-horizontal form-label-left" novalidate method="post">
                    <span class="section">Promotion Request Form</span>

                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rank">Rank Of Promotion  <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="rank" readonly="readonly" class="form-control col-md-7 col-xs-12" onkeypress="return alpha(event,letters)" data-validate-length-range="1000000"  name="rank" type="text"></textarea> 
                      </div>
                    </div> 
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qualification">Qualification <span class="required">*</span>
                      </label>
					  
                      <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="qualification" readonly="readonly"  name="qualification" onkeypress="return alpha(event,letters)" class="form-control col-md-7 col-xs-12">
                       </div>
                    </div>
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="experience">Experience<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="experience" readonly="readonly" onkeypress="return alpha(event,letters)" class="form-control col-md-7 col-xs-12" name="experience"  type="text">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group" style="margin-left:43%;">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="reset" class="btn btn-primary">Cancel</button>
                        <button id="send" name="promo_request" type="button" class="btn btn-success">Request</button>
                      </div>
                    </div>
                  </form>
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
</script>
                  
				  
				  <?php include('changepassword_modal.php');?>
				 
				 

				  
                </div>
              </div>
            </div>
          </div>
		  
		  <?php include('send_account_modal.php');?>
        </div>
 
        <!-- footer content -->
       
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- form validation -->
 

<?php include('validation.php');?>
 <!-- PNotify -->
  <script type="text/javascript" src="js/notify/pnotify.core.js"></script>
  <script type="text/javascript" src="js/notify/pnotify.buttons.js"></script>
  <script type="text/javascript" src="js/notify/pnotify.nonblock.js"></script>
  <script type="text/javascript">
    
  


</body>

</html>
