<!DOCTYPE html>

<html lang="en">

<?php
include("dbcon.php");

?>

<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>DMU Burie campus</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<link rel="shortcut icon" href="images/favicon.ico" /> 
<link href="login/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
     <!-- font icon -->
    <
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="indexcsandjs/css/prettyPhoto.css" type="text/css" />
<link rel="stylesheet" href="indexcsandjs/css/flexslider.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link href="commanasset/asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
   
   
    <link rel="shortcut icon" href="images/USERS.jpg" />

<link href="commanasset/assets/css/bootstrap.css" rel="stylesheet" />
		<link href="commanasset/assets/css/style.css" rel="stylesheet" />
<link href="forapplymodal/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript"src="forapplymodal/bootstrap.min.js"></script>
 
    <link rel="shortcut icon" href="images/USERS.jpg" />



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
					 <li><a href="registration.php"><i class="fa fa-pencil"></i>&nbsp;Registration</a></li>
					
					 <li><a href="contactus.php"><i class="fa fa-phone"></i>&nbsp;Contact</a></li>
					<li><a href="login.php"><i class="fa fa-sign-in"></i>&nbsp;Login</a></li>

				</ul>
			</nav>
	</header>
	<!-- /Header -->
    <!-- START CONTENT -->
			
		<!-- /Page Title -->
		
       
		
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" data-scrollreveal="enter top and move 90px, wait 0.5s">
				
                    <h1>About Us</h1>
                     <h4>
                      DMU burie campas  Technology Human Resource Management
                    </h4>
					<div class="row main-low-margin text-center" style="margin-left:2%;">
<?php
					$stat="emp";
					$abou=mysql_query("select * from about where status='$stat'");
					while($ab=mysql_fetch_array($abou)){
						$array[]=$ab;
						$id=$ab['id'];
					?>
					
                <div class="col-md-3 col-sm-3" data-scrollreveal="enter left and move 100px, wait 0.7s"><?php  echo"<img width='95'height='85'class='img-circle img' src='profile/".$ab['image']."'alt='profile pic'>";?>
                    <h4><?php echo $ab['name1'];?></h4>
                    <div class="p1">
					<h4>
                       <?php echo $ab['about'];?><br>
                        <?php echo $ab['e_mail'];?>
                    </h4>
					</div>
					</div>
		<?php } ?>
            </div>
             <h1>About Developer</h1>
                    <h4>
                       DMU burie campas  computer science 4th year GC the developer of Human Resource Management Information System 
                    </h4>
                </div>
            </div>
		
            <!-- ./ Main Heading-->
            <div class="row main-low-margin text-center" style="margin-left:2%;">
<?php
					$stat="post";
					$abou=mysql_query("select * from about where status='$stat'");
					while($ab=mysql_fetch_array($abou)){
						$array[]=$ab;
						$id=$ab['id'];
					?>
					
                <div class="col-md-3 col-sm-3" data-scrollreveal="enter left and move 100px, wait 0.7s"><?php  echo"<img width='95'height='85'class='img-circle img' src='profile/".$ab['image']."'alt='profile pic'>";?>
                    <h4><?php echo $ab['name1'];?></h4>
                    <div class="p1">
					<h4>
                       <?php echo $ab['about'];?><br>
                        <?php echo $ab['e_mail'];?>
                    </h4>
					</div>
					</div>
		<?php } ?>
            </div>
			
              <!-- ./ Row Content-->
      
			<center><a href="https://www.facebook.com">  <img src="images/icon_facebook.png" width="34" height="35"></a>
				<a href="https://www.gmail.com"><img src="images/emil.jpg" width="31" height="36"></a>
                                  <a href="https://www.youtube.com"><img src="images/icon_youtube.png" width="31" height="36"></a>
                                  <a href="https://www.twitter.com"><img src="images/icon_twitter.png" width="33" height="36"></a>
                    </center>  
   
    <!-- END CONTENT -->
    <br><br><br>
</div>
	<div class="footer">
	<p>Copyright 2018&copy; All rights reserved. Design by CS 4th year student</p>.
</div>

</body>
</div>
</html>