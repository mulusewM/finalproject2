
    <link href="newmodalwil/animate.css" rel="stylesheet"><!--sele-->
	
                            <div class="modal inmodal" id="myModaldelacc" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" style="width:59%;">
								<form class="form-horizontal form-label-left" novalidate method="post">
                                    <div class="modal-content animated flipInY">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <h4 class="modal-title">Delete Account</h4>
                                            
                                        </div>
                                        <div class="modal-body">
									  <table class="" style="width:100%;">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" id="check-all" class="flat">
                                                </th>
                                                <th class="column-title">User Id </th>
                                                <th class="column-title">Full Name </th>
                                                <th class="column-title">User Type</th>  
                                                <th class="column-title">E-mail</th>  
                                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                                </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="even pointer">
								
								<?php
						          include('dbcon.php');
                                  $q = mysql_query("SELECT * FROM account"); 
								  $array = array();
								  while($r = mysql_fetch_array($q)){
								  $array[] = $r; 
						    $user_id=$r['user_id'];
							 $ful=$r['f_name']." ".$r['l_name'];
							 $type=$r['user_type'];
							 $e_mail=$r['e_mail'];
								 
								  
								 ?> 
								<td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td>
                                    <td class=" "><?php echo $user_id;?></td>
                                                <td class=" "><?php echo $ful  ?></td>
                                                <td class=" "> <?php echo $type;?> </td>
                                                <td class=" "><?php echo $e_mail;?></td>
                                  <td class="last "><button  class="btn btn-danger" data-toggle="modal" data-target="#myModaldelete" href="delete_acc__notification.php?Update=<?php echo $r['user_id'];?>">Delete</button>
</td>
								  
								 
								  	
                                </tr>		<?php } ?>	
                            </tbody>

                                    </table><br>
                                        </form>
                                    </div>
                                </div>
                            </div>
						
    <script src="newmodalwil/jquery-2.1.1.js"></script><!--sele-->

	<div class="modal inmodal" id="myModaldelete" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" style="width:59%;">
								    <div class="modal-content animated flipInY">  
								
									</div>
                                </div>
                            </div>