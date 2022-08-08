
      
   <?php
   include('dbcon.php');
        if (isset($_POST['change'])){   
            $run = mysql_query("SELECT * FROM account WHERE user_id = '$session_id'");
            $row = mysql_fetch_array($run); 
            $old=$_POST['currentpassword'];
            $odd=base64_encode($old);
            $password=$_POST['newpassword'];
            $password2=$_POST['confirmPassword'];
            $pass_encrpt=md5($password);
            $ps=$row['passwords'];
            if($password==$password2){
            mysql_query("UPDATE account set passwords = '$password' WHERE user_id = '$session_id'");
              echo '<div class="alert alert-dismissable alert-success">';
                echo '<strong>'.'<center>'."You have changed your password successfully!!!".'</center>'.'<strong>';
                //echo"<script>alert('You have changed your password successfully!!!')</script>";
              echo '</div>';
            
            } else{
              
             echo '<div class="alert alert-dismissable alert-danger">';
                
                echo'<strong>'."Password not matching!!!!".'</strong>';
              echo '</div>'; 
            } 
         }
       
    ?>
	<!--external css-->
	
                 <!-- Small modal -->
              
<form class="form-horizontal form-label-left" onsubmit="return validateForm()" method="post">
                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-sm" style="width:60%;">
                    <div class="modal-content" >

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel2">Change Password</h4>
                      </div>
                      <div class="modal-body">
                  <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="currentpassword">Old Password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="currentpassword" class="form-control col-md-7 col-xs-12"placeholder="currentpassword"name="currentpassword" required="enter old password" title="enter old password"type="password">
                      </div>
                    </div> 
					 <div class="item form-group">
                      <label for="newpass" class="control-label col-md-3">New Password</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="newpassword" type="password"placeholder="newpassword" name="newpassword" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="conpass" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat New Password</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="confirmPassword" type="password" placeholder="confirmPassword"name="confirmPassword" data-validate-linked="newpassword" class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group" >
                      <div class="col-md-6 col-md-offset-3">
                        <button type="reset" class="btn btn-primary"style="margin-left:40%;">Cancel</button>
                        <button id="change" type="submit" class="btn btn-success" name="change" style="margin-left:68%;margin-top:-17.5%;">Change</button>
                      </div>
                    </div>
                  </form>
                  <script src="js/validator/validator.js"></script>
<script type="text/javascript">
<!--


// -->


                          
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
  </script></div>

                    </div>
                  </div>
                </div>
                <!-- /modals -->
	