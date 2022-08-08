<!DOCTYPE html>
<?php include('dbcon.php');?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <title>login</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
   <link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript" src="indexcsandjs/js/jquery.min.js"></script>
    <script type="text/javascript" src="indexcsandjs/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="indexcsandjs/js/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="indexcsandjs/js/all-in-one.js"></script>
    <script type="text/javascript" src="indexcsandjs/js/setup.js"></script>
   
   
   
   <link href="commanasset/asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="commanasset/assets/css/bootstrap.css" rel="stylesheet" />
		<link href="commanasset/assets/css/style.css" rel="stylesheet" />
    <link href="login/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="login/assets/font-awesome.css" rel="stylesheet" />
     <link href="login/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="login/css/style.css" rel="stylesheet">
    <link href="login/css/style-responsive.css" rel="stylesheet" />
<script type="text/javascript">
$(window).load(function(){
	$('#demo-side-bar').removeAttr('style');
});
</script>
<style type="text/css">
.demobar{display:none;}
#demo-side-bar{top:53px!important;left:10%!important;display:block!important;}
</style>
</head>
<div id="body">
<body>
<div id="wrapper">
	 <header class="header_bg clearfix">
	<BR><BR>
		
			<div class="logo">
				<img width="1225"height="160"src="images/Un.png" alt="" /></a>
			</div>
			<nav class="main-menu">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                     <li><a href="about.php"><i class="fa fa-picture-o"></i>&nbsp;About</a></li>
                     <li><a href="postedvacancy.php"><i class="fa fa-book"></i>&nbsp;Vacancy</a></li>
                     <li><a data-toggle="modal" data-target=".bs-example-modal"><i class="fa fa-pencil"></i>&nbsp;Registration</a></li>
                     
                     <li><a href="contactus.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li>
                    <li><a href="login.php"><i class="fa fa-sign-in"></i>&nbsp;Login</a></li>

                </ul>
            </nav>
		
	</header>
<!-- /Header -->
   <section class="contaner clearfix">
        <div class="portfolio_1_3" style="margin-left:10%;" >
            <ul id="list" style="background: url('img/backgrounds/bg.jpg') no-repeat center; width:63.5%; margin-right:-2.3%; margin-left:0%; margin-bottom:-24%; margin-top:0%;"><br><br><br><br>
            
            <?php
             session_start();
                                include('dbcon.php');							
                                if (isset($_POST['signin'])){
									 $user_id = $_POST['user_id'];
									$query = "SELECT * FROM account WHERE user_id='$user_id'";
									$result1 = mysql_query($query)or die(mysql_error());
									$row=mysql_fetch_array($result1);
									$ropes=$row['state'];
									
                               if($ropes==1){
                                $t=0;
                                date_default_timezone_set('America/Chicago');
                                $date  = date("Y-m-d");
                                $user_id = $_POST['user_id'];
                                $passwords = $_POST['passwords'];
                                
                                $passwor=($passwords);
                                $query = "SELECT * FROM account WHERE user_id='$user_id'AND passwords='$passwords'";
                                $result = mysql_query($query)or die(mysql_error());
                                $num_row = mysql_num_rows($result);
                                $row=mysql_fetch_array($result);
                                $row_id=$row['user_id'];
                                $rop=$row['passwords'];
                                $rops=$row['user_id'];
                                 $user_type =$row["user_type"];
                                    $row=mysql_fetch_array($result);
                                    if($num_row > 0 ) {
                                    if($user_type=='HR Officer'){
                                    header('location:hrofficer/hrofficer.php');
                                    $_SESSION['id']=$row_id;
                                    }
                                    else if($user_type=="Dept.head"){
                                    header('location: department/department.php');
                                    $_SESSION['id']=$row_id;
                                    }
									else if($user_type=='applicant'){
                                    header('location:applicant/applicant.php');
                                    $_SESSION['id']=$row_id;
                                    }
                                    else if($user_type=='Employee'){
                                    header('location:employee/employee.php');
                                    $_SESSION['id']=$row_id;
                                    }
                                    
                                   $zed=mysql_query("select * from account where user_type='Employee' && user_id='$row_id'"); 
                                   while($line=mysql_fetch_array($zed)){
                                       $year = $line['year'];
                                       if($date<$year+2)
{
$t=1;
break;  
}
                                   }
if($t==1){
 header('location:employee/EHIDD.php');
}
$m=0;
$querynew=mysql_query("select * from promotion where user_id='$row_id' && status='Request'") or die( mysql_error());
                            while($rownew=mysql_fetch_array($querynew)){
                                $statuss = $rownew['status'];
                                $go=$rownew["Request"];
                                if($statuss == $go){
                                    $m=1;
                                    break;
                                }
                            }
if($m==1){
    header('location:employee/EHID1.php');
                
								}}  }
                                    else{ 
                    
            echo '<div class="alert alert-dismissable alert-danger" >';
            echo 'Incorrect combnation of password and user ID';
            echo '</div>';  
                                }
                                    }
                                ?>
            <form class="login-form"  method="post" >        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="user_id" size="20"placeholder="User ID" title="please enter User id" autofocus required="required">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="passwords" size="20"maxlength="6" class="form-control"required="required"  placeholder="Password" >
            </div>
			
           

            <button class="btn btn-info btn-lg btn-block" name="signin" type="submit">Login</button>
        </div>
      </form><br><br><br><br><br><br></ul>
                    <span class="title">
                    </span>
            <div class="recent_works">
                
            </div>
        
    </section>
    <!-- /Content -->
        
    <br><br><br>    <br><br><br>    <br><br><br><br><br>
       
        
    


<center><a href="https://www.facebook.com">  <img src="images/icon_facebook.png" width="34" height="35"></a>
    <a href="https://www.gmail.com"><img src="images/emil.jpg" width="31" height="36"></a>
                                  <a href="https://www.youtube.com"><img src="images/icon_youtube.png" width="31" height="36"></a>
                                  <a href="https://www.twitter.com"><img src="images/icon_twitter.png" width="33" height="36"></a>
                    </center>  
</div>
	<div class="footer">
	<p>Copyright 2018 &copy; All rights reserved. Design by CS 4th year student</p>.
</div>
  
  
  
</body>
</div>
</html>