<!DOCTYPE html>

<html lang="en">
<?php
include("dbcon.php");

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <title>Contact Us </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
    <link rel="shortcut icon" href="images/favicon.ico" />


<link rel="stylesheet" href="style.css" type="text/css" />

<link href="commanasset/asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
   
   <link rel="stylesheet" href="indexcsandjs/css/prettyPhoto.css" type="text/css" />
<link rel="stylesheet" href="indexcsandjs/css/flexslider.css" type="text/css" />

   

   <style type="text/css">
.demobar{display:none;}
#demo-side-bar{top:53px!important;left:90%!important;display:block!important;}
</style>
 </head>
 <div id="body">
<body>
    
<div id="wrapper">

    <header class="header_bg "><BR><BR>
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

  

    <!-- /Slider -->
    <!-- Content -->
   
        <!-- START PAGE INFO -->
            <header class="container page_info " style="margin-left:0%; margin-top:0%;">
                
                    <h1 class="regular brown bottom">Contact Us Today</h1>
                
                
            </header>
            

      <!-- START COL 1/3 -->    
      <div class="col_1_3"  style="margin-left:10%;">

<?php
                    $st="phone";
                    $ab=mysql_query("select * from about where p_status='$st'")or die( mysql_error());
                    while($ax=mysql_fetch_array($ab)){
                        $array[]=$ax;
                        $id=$ax['id'];
                        $phone=$ax['phone'];
                    }
                    ?>
        <ul class="contact-address" style="width:40%;">
                <li class="address"><span><i class="fa fa-phone"></i> &nbsp;Phone Number &nbsp;<?php echo $phone;?></span></li>
            </ul>
        
        
        </div>
        <!-- END COL 1/3 -->    
        <!-- START COL 2/3 LAST --> <br>
        <div class="col_2_3 " style="margin-left:20%;margin-top:-3%;">

<?php include("validation/header.php");?>


            <form name="contact" action="#" name="formID" id="formID" method="post" >
    <div style="width:420px;">

<?php
    if(isset($_POST['send'])){
               
                                include('dbcon.php');
                                if (isset($_POST['send'])){
                                $full_name = $_POST['full_name'];
                                $e_mail = $_POST['e_mail'];
                                $text = $_POST['msg'];  
                                $status ="Request";
                                function generateRandomString($l=4){
                                return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,$l);
                                }
                                $feedback_id=generateRandomString();
                                $query = "insert into feedback (feedback_id,full_name,e_mail,content,status) values('$feedback_id','$full_name','$e_mail','$text','$status')";
                                $result = mysql_query($query)or die(mysql_error());
                                if( $result==1){
                                echo '<div class="alert alert-dismissable alert-success">';
                                echo '<strong>'."Your message has been successfully sent.".'</strong>';
                                echo '</div>';
                                }
                                else{
                                echo '<div class="alert alert-dismissable alert-success">';
                                echo '<strong>'."Error in sending message.".'</strong>';
                                echo '</div>';}
                                }}
                                ?>









        </div>
                                
        <label for="name">Your Name</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="height:35px;" type="text"  placeholder=" please enter your name" name="full_name" id="inputText" class="validate[required,custom[onlyLetterSp]] text-input">
        <br><br>
        <label for="email">Your E-mail</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="height:35px;" type="email"  placeholder=" enter your e-mail example...@example.com" name="e_mail" id="inputText2" class="validate[required,custom[email]] text-input">
        <br>    <br>
        <label for="msg">Enter a Message</label>
        <textarea  name="msg" placeholder="type your message here....." id="inputTextarea" class="validate[required] text-input"></textarea>
        <br><br>
        <center><button name="send" id="send">Send Message</button></center>
    </form>
            
        </div>
        <!-- END COL 2/3 LAST -->  
        <div class="clear padding20"></div>
    <!-- footer --><br><br>
   <br><br><br>
        <center><a href="https://www.facebook.com">  <img src="images/icon_facebook.png" width="34" height="35"></a>
            <a href="https://www.gmail.com"><img src="images/emil.jpg" width="31" height="36"></a>
                                  <a href="https://www.youtube.com"><img src="images/icon_youtube.png" width="31" height="36"></a>
                                  <a href="https://www.twitter.com"><img src="images/icon_twitter.png" width="33" height="36"></a>
                    </center>  
   
   
</div>
    <div class="footer">
    <p>Copyright 2018 &copy; All rights reserved. Design by CS 4th year student</p>.
</div>
<script src="js/validator/validator.js"></script>
                            <script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
      .on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    
    
    /* FOR DEMO ONLY */
    $('#vfields').change(function() {
      $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function() {
      validator.defaults.alerts = (this.checked) ? false : true;
      if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
  </script>
</body>
</div>
</html> 
        
      