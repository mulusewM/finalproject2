
									 
    <link href="newmodalwil/animate.css" rel="stylesheet">
	<!--sele-->
	
	<?php
	
	if(isset($_POST['feedback'])){
								include('dbcon.php');
								if(isset($_POST['feedback'])){
									$request="Request";
									$querys = mysql_query("SELECT * FROM feedback where status='$request'"); 
								  $rows = mysql_fetch_assoc($querys);
									$ctrl = $rows['feedback_id'];
								   $content = $_POST['content'];
								  $e_mail = $rows['e_mail'];
								  $full_name = $rows['full_name'];
          		                  $subject="dmubu Human Resource";
							   $SQL = "update feedback set content  = '$content' where feedback_id = '$ctrl'";
                               $SQL = "update feedback set status  = 'Ansewered' where feedback_id = '$ctrl'";
                               $result = mysql_query($SQL)or die(mysql_error());
								if( $result==1){
								$message = "Dear $full_name these is your ansewer ==> $content ...!";
								
								echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'." The the feedback successfully send to $full_name".'</strong>';
								echo '</div>';
								
								}
								else{
								echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'."Error in sending message.".'</strong>';
								echo '</div>';
								
								}
	}
	}
	?>
                            <div class="modal inmodal" id="answer_feedback_modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" style="width:59%;">
								
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Ansewer Feedback</h4>
                                            
                                        </div>
										
                                        <div class="modal-body">
										<form class="form-horizontal form-label-left" novalidate enctype="multipart/form-data" method="POST">
									 
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="f_name">Write Feedback Here<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="content"class="form-control col-md-7 col-xs-12"name="content" type="department" required="required"></textarea>
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
</script>    <div class="modal-footer">
                                           <input type="submit" name="feedback" class="btn btn-primary" value="Reply"/>
										<button type="button" data-dismiss="modal" class="btn btn-white" >Close</button>
										</div></form>
                                        </div>
                                      
					
    <script src="newmodalwil/jquery-2.1.1.js"></script><!--sele-->
<!--sele-->
				
	
