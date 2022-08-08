<?php
include("dbcon.php");

?>
<html>	
	
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>DMUBC</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<link rel="shortcut icon" href="images/users.JPG" />
     <link rel="stylesheet" href="style.css" type="text/css" />
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
	
<!-- /Header -->
<section class="conainer clearfix">
		<!-- Page Title -->
		&nbsp;&nbsp; &nbsp; &nbsp; <a href="applicant.php"style="color:red;">Back  </a>			
					<h1 class="regular black ">Posted Vacancy and other Announcement</h1>
				
			<br>
			
		<div class="portfolio_1_3" style="margin-left:10%;">
			<ul id="list">
				<!-- START PORTFOLIO COLUMN #1 -->

								<?php	
include('dbcon.php');
date_default_timezone_set('America/Chicago');
$reg_date  = date("Y-m-d");
$current_date=date('Y-m-d');
$h=0;
	$query=mysql_query("select * from vacancy WHERE deadline > NOW() order by vacancy_id DESC ")or die(mysql_error());{
		if(mysql_num_rows($query)>0){
		while($row=mysql_fetch_array($query))
			{	
$status = $row['status'];
$strdate=$row['reg_dates'];
$vac=$row['vacancy_id'];
$enddate=$row['deadline'];
$tit=$row['title'];
$con=$row['content'];
$current_date=date('Y-m-d');?>
                               
				
				<li id="id-2 id-2" class="container">
				
				<?php
if(strtotime($enddate)>strtotime($current_date)){
	  echo'<strong>Vacancy ID:&nbsp;&nbsp;&nbsp;<strong>';echo $vac; echo '<strong><br/><strong>';
	      echo'<strong>Title:&nbsp;&nbsp;&nbsp;<strong>';echo $tit;echo '<strong><br/><strong>';
	      echo'<strong>Content: &nbsp;&nbsp;&nbsp;<strong>';echo $con;echo '<strong><br/><strong>';
	      echo'<strong>Registration Start Date:&nbsp;&nbsp;&nbsp;<strong>';echo $strdate;echo '<strong><br/><strong>';
	      echo'<strong>Registration End Date:&nbsp;&nbsp;&nbsp;<strong>';echo $enddate;echo '<strong><br/><strong>';
	   			
}
		}}
			else{
				echo '<div class="alert alert-dismissable alert-danger">';
										echo '<strong>'."No New Vacancy Posted Yet".'</strong>';
										echo '</div>';
			}
	
	   
	   
	   ?><?php } ?>
					
				</li>

				</ul>
			<div class="recent_works">
				
			</div>
			
		</div>
		
	</section>
	<!-- /Content -->
			
			<br><br><br>	<br><br><br>	<br><br><br><br><br>
	
	<!-- footer -->
	
	 <center><a href="https://www.facebook.com">  <img src="images/icon_facebook.png" width="34" height="35"></a>
	 	<a href="https://www.gmail.com"><img src="images/emil.jpg" width="31" height="36"></a>
                                  <a href="https://www.youtube.com"><img src="images/icon_youtube.png" width="31" height="36"></a>
                                  <a href="https://www.twitter.com"><img src="images/icon_twitter.png" width="33" height="36"></a>
                    </center>  
	<!-- /footer -->
  	</div>
	<div class="footer">
	<p>Copyright 2018&copy; All rights reserved. Design by CS 4th year student</p>.
</div>	
</body>
</div>
</html>