<!DOCTYPE html>
<html lang="en">
<?php
include("dbcon.php");

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <title>Registration page</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index,follow" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
    <!--external css-->
     <link rel="shortcut icon" href="images/users.jpg" />
    <link href="error/valcss.css" rel="stylesheet" />
        <link rel="stylesheet" href="register/css/style.css">
</head>
<div id="body">
<body>
  
    <?php include("validation/header.php");?>
    <?php include("applay_php.php");?>
<div id="wrapper">
    
    <header><BR><BR>
    <div class="logo">
               
            </div>
            <nav>
                
            </nav>
            </header>
<!-- /Header -->
     <section class="container clearfix">
            <div class="container">
    <section class="register">
<?php include("validation/header.php");?>
 
         <form method="POST" action="applay_php.php" name="formID" id="formID" enctype="multipart/form-data" onsubmit="return validateForm();">
         <a href="applicant.php">Back </a>
         <div class="reg_section personal_info">
      <center><h1>Fill The Information Below For Registration</h1></center></br>
      <input type="text" name="first_name" onkeypress="return alpha(event,letters)" onkeypress="return alpha(event,letters)" value=""id="first_name" maxlength="30" class="validate[required,custom[onlyLetterSp]] text-input"  value=""id="first_name" maxlength="30" placeholder="First Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="meddile_name" onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp]] text-input" onkeypress="return alpha(event,letters)"  id="meddile_name" class="meddile_name"value="" placeholder="Middle Name"> 
        <input type="text" name="last_name" class="validate[required,custom[onlyLetterSp]] text-input" value="" onkeypress="return alpha(event,letters)"  placeholder="Last Name"id="last_name"class="last_name">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <input type="text" name="age" class="validate[required,custom[number]] text-input" value="" onkeypress="return alpha(event,numbers)"  placeholder="Age"id="age" class="age">
 </div>
      <select class="validate[required,custom[onlyLetterSp]] text-input" name="sex"id="sex" style="width:41.5%;">

<?php
$sexs = array('male','female');
foreach ($sexs as $sex) {
      $selected = ($rows['sex'] === $sex) ? ' selected="selected"' : '';
?>
<?php
}
?>
        <option value="">Sex...</option>
        <option value="male"<?php echo $selected;?>>Male</option>
        <option value="female"<?php echo $selected; ?>>Female</option>
     </select>
    &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="e_mail" value="" class="validate[required,custom[email]] text-input" placeholder="Enter your Email"id="e_mail"class="e_mail">
      
     
      <input type="text" name="address" value="" onkeypress="return alpha(event,letters)" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Enter your Address"id="address"class="address">
      
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="experience" value="" onkeypress="return alpha(event,letters+numbers)" class="validate[required,custom[onlyLetterSp]] text-input" placeholder="Enter your Experience"id="experience"class="experience">
      
       
      <select id="position_title" onkeypress="return alpha(event,letters)"class="validate[required,custom[onlyLetterSp]] text-input"  name="department" required="required">
               <option  value="">..department..</option>
             <?php 
    $new=mysql_query("select * from department where status='imported'");
    if(mysql_num_rows($new)>0){
    while($Jesu=mysql_fetch_assoc($new)){
      $pos=$Jesu['department'];
    
   
    ?>

<option  value="<?php echo $pos?>"><?php echo $Jesu['department'];?></option>

  <?php } ?><?php }  
    
     
?>
          
</select>

<br>Upload Your Tempo
 <input type="file" class="validate[required] text-input" name="tempo" id="profile"/>
   <select class="validate[required,custom[onlyLetterSp]] text-input" name="region"id="region"class="region"style="margin-left:58.5%;margin-top:-99%;width:41%;">
    <option value="">Region...</option>
<option value="Addis Ababa">Addis Ababa</option>
<option value="Dire Dawa ">Dire Dawa </option>
<option value="Afar">Afar</option>
<option value="Amhara">Amhara </option>
<option value="Benishangul-Gumuz">Benishangul-Gumuz</option>
<option value="Gambella">Gambella</option>
<option value="Harari">Harari</option>
<option value="Oromiya">Oromiya</option>
<option value="Somali">Somali</option>
<option value="Southern Nations">Southern Nations</option>
<option value="Tigray">Tigray</option>
</select>
<input type="text" style="margin-top:-90%;" onkeypress="return alpha(event,numbers)" class="validate[required,custom[phone]] text-input"name="phone" value="" placeholder="Enter your Phone number"id="phone" class="phone">

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" class="validate[required] text-input" name="passwords" value="" placeholder="Enter your Password"id="password"class="password">

<input type="password" name="confirm" value=""class="validate[required] text-input" placeholder="Confirm your Password"id="confirm"class="confirm"><br>

  Upload Your CV
   <input type="file" class="validate[required] text-input" name="file_cv" id="file_cv" style="broder:solid 2px;"/>
 <br>
     upload your profile
 <input type="file" class="validate[required] text-input" name="profile" id="image"/>
     
      <p class="submit"><input type="submit" onclick="jQuery('#formID').submit();" name="commit"id="commit" value="Register">
      </p>
      </form>
    </section>
    </div>
    <!-- END SIDEBAR SIDE -->
        
        <div class="clear padding40"></div>
    </section>
    <!-- END CONTENT -->
    <!-- footer -->
   <footer class="footer_bg_bottom clearfix">
        
        <script>
        $.backstretch("commanasset/asset/img/login-bg.jpg", {speed: 500});
    </script>
    </footer>
    <!-- /footer -->
    
    <!--wrapper end-->
    <!--Dynamically creates analytics markup-->
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
<center><a href="https://www.facebook.com">  <img src="images/icon_facebook.png" width="34" height="35"></a>
    <a href="https://www.gmail.com"><img src="images/emil.jpg" width="31" height="36"></a>
                                  <a href="https://www.youtube.com"><img src="images/icon_youtube.png" width="31" height="36"></a>
                                  <a href="https://www.twitter.com"><img src="images/icon_twitter.png" width="33" height="36"></a>
                    </center>  
<br><br><br>

</div>
    <div class="footer">
    <p>Copyright 2018 &copy; All rights reserved. Design by CS 4th year student</p>.
</div>

</body>
</div>
</html>