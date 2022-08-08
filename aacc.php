 <form method="post">
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalacc" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                         <center> <h4 class="modal-title">Activate Account</h4></center>
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
                                  $q = mysql_query("SELECT * FROM account where state = '0' "); 
								  $array = array();
								  while($r = mysql_fetch_array($q)){
								$user_id = $r['user_id'];
								$state = $r['state'];
								
								 ?>
								<td class="a-center ">
                                                    <input type="checkbox" class="tableflat">
                                                </td>
                                    <td class=" "><?php echo $user_id;?></td>
                                                <td class=" "><?php echo $r['f_name']." ".$r['l_name'];  ?></td>
                                                <td class=" "> <?php echo $r['user_type'];?> </td>
                                                <td class=" "><?php echo $r['e_mail'];?></td>
                                <td class="last ">  <?php echo "<a rel='facebox' href='aacc_secc_php.php?ID=".$r['user_id']."' class='btn btn-danger'>Activate</a>";?></td>
								  
								 </tr>		
								 <?php } ?>	
								 <?php
								 
									 $zas = mysql_query("SELECT * FROM account where state = '1' "); 
										  $X=0;
										  while($z = mysql_fetch_array($zas)){
											$state=$z['state'];
											if($state==1){
											$X++;
											}
											else{
											$X=0;
											}}
								  $saz = mysql_query("SELECT * FROM account where state = '0' "); 
										  $y=0;
										  while($mf = mysql_fetch_array($saz)){
											$state=$mf['state'];
											if($state==0){
											$y++;
											}
											else{
											$y=0;
											}}
								 echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'." $X account is active &nbsp;&nbsp; and &nbsp;&nbsp; $y account is Deactivated".'</strong>';
								echo '</div>';
								?>
                            </tbody>
											
                                    </table>
		                      </div>
		                      
		                  </div>
		              </div>
		          </div></form>
				 
<script type="text/javascript">
				function confirmation_r(deleteaccount) {
						alert(deleteaccount);
						var answer = confirm("Are you shure to delete the account?")
						if (answer){							
							window.location = "del_account.php?id="+ID;
						}
					}
			</script>