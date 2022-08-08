 <?php include('cracc_php.php');?>
  
    <link href="newmodalwil/animate.css" rel="stylesheet"><!--sele-->
  
                            <div class="modal inmodal" id="myModalcracc" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" style="width:59%;">
                <form class="form-horizontal form-label-left"  method="post" onsubmit="return validateForm()">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Create Account</h4>
                                            
                                        </div>
                                        <div class="modal-body">
                   <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">First Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="f_name" class="form-control col-md-7 col-xs-12"name="f_name" onkeypress="return alpha(event,letters)" required="required" type="name">
                      </div>
                    </div> 
          <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="l_name">Last Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="l_name" class="form-control col-md-7 col-xs-12"name="l_name" onkeypress="return alpha(event,letters)" required="required" type="name">
                      </div>
                    </div>
          <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="l_name">Department Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="position_title" class="form-control col-md-7 col-xs-12" name="department" required="required">
               <option  value="">..select..</option>
             <?php 
    $new=mysql_query("select * from department where status='imported'");
    if(mysql_num_rows($new)>0){
    while($Jesu=mysql_fetch_assoc($new)){
      $pos=$Jesu['department'];
    
   
    ?>

<option  value="<?php echo $pos?>"><?php echo $Jesu['department'];?></option>

  <?php } ?><?php }  
    
     
?>
          
</select> </div>
                    </div>
          
          <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="e_mail" class="form-control col-md-7 col-xs-12"name="e_mail"required="required" type="email">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">SALARY <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="salary" class="form-control col-md-7 col-xs-12"name="salary"required="required" onkeypress="return alpha(event,numbers)"type="numbers">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">sex <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                     <select class="form-control col-md-7 col-xs-12" name="sex"id="sex" required="required" type="text">

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
      </div>
                    </div>
          <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="user_type">User Type <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control col-md-7 col-xs-12" id="user_type"name="user_type" required="required">
             <option  value="">..select..</option>
    <?php
$types = array('Dept.head','Employee','HR Officer','applicant');
foreach ($types as $user_type) {
      $selected = ($rows['user_type'] === $user_type) ? ' selected="selected"' : '';
?>
<?php
}
?>
        <option value="HR Officer"<?php echo $selected;?>>HR Officer</option>
        <option value="Employee"<?php echo $selected;?>>Employee</option>
     <option value="Dept.head"<?php echo $selected; ?>>Dept Head</option>
     <option value="applicant"<?php echo $selected; ?>>applicant</option>
      </select>
                      </div>
                    </div> 
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
                                        </div><br>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                            <button type="submit" name="createaccount" class="btn btn-primary">Create</button>
                                        </div></form>
                                    </div>
                                </div>
                            </div>
           
    <script src="newmodalwil/jquery-2.1.1.js"></script><!--sele-->
<!--sele-->
        