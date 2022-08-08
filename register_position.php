

							<?php
              mysql_connect("localhost", "root", "") or die (mysql_error());
              include("dbcon.php");
if(isset($_POST['save'])){
	              
									$pos_name = $_POST['pos_name'];
								$salary = $_POST['salary'];
								$level = $_POST['level'];
								$responsible = $_POST['responsible'];
								$pos_status="free";
               
                  $request_stat="Request";
								if($salary < 650 || $salary > 10000){
								echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'."Salary must be between 650 and 10000.".'</strong>';
									echo '</div>';	
								}
								else{
								$query="insert into position (pos_name,salary,level,responsible,pos_status,user_id,request_stat) 
  values('$pos_name','$salary','$level','$responsible','$pos_status','$session_id','$request_stat')";		
								$result = mysql_query($query)or die(mysql_error());
								if( $result==1){
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'." Position successfully saved .".'</strong>';
								echo '</div>';
								
								}
								else{
								echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'."Error in sending message.".'</strong>';
									echo '</div>';}
									}
}


?>	
    <link href="newmodalwil/animate.css" rel="stylesheet"><!--sele-->
	
                            <div class="modal inmodal" id="myModalreg_position" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" style="width:59%;">
								<form class="form-horizontal form-label-left"  method="post" onsubmit="return validateForm()">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Register Postion</h4>
                                            
                                        </div>
                                        <div class="modal-body">
									 <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pos_name">Position Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="pos_name" class="form-control col-md-7 col-xs-12"name="pos_name"title="please enterposition name"placeholder="position name" onkeypress="return alpha(event,letters)" required="required" type="name">
                      </div>
                    </div> 
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="l_name">Salary<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="salary" class="form-control col-md-7 col-xs-12"name="salary"placeholder="salary" onkeypress="return alpha(event,numbers+signs)"  required="required"type="numbers">
                      </div>
                    </div>
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"   for="level">Position Level <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="level"  class="form-control col-md-7 col-xs-12"name="level" placeholder="position level"type="name" onkeypress="return alpha(event,letters)" required="required">
                      </div>
                    </div>	
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="responsible">Responsibility <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="responsible" class="form-control col-md-7 col-xs-12" placeholder="responsibility"name="responsible" onkeypress="return alpha(event,letters)" type="name" required="required">
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
   </script>

                                        </div><br>
                                       
                                           
                                            <button type="reset" class="btn btn-primary">Clear</button>
                                           
										   <button type="submit" name="save" class="btn btn-primary">Save</button>
                                         <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
									</form>
                                    </div>
                                </div>
                            </div>
                             
     
 