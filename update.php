<!DOCTYPE html>
<html lang="en">
<?php include('../session.php');?>
<?php include('../dbcon.php');?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Update account</title>
<link rel="shortcut icon" href="images/USERS.jpg" />
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">

  <link href="js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="dialog.css">

</head>
<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
<?php
              $qu=mysql_query("select * from account where user_id='$session_id'") or die( mysql_error());
              $r=mysql_fetch_array($qu);
              ?>

          <div class="navbar nav_title" style="border: 0;">
            <a  class="site_title"><i class="fa fa-paw"></i> <span>Dmubu</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
<?php
             $Je = mysql_query("SELECT image FROM account WHERE user_id='$session_id' "); 
                         while($row=mysql_fetch_assoc($Je)){
               if($row['image'] == ""){
                 echo"<img width='50'height='50' src='./profile/0.13.jpg'alt='default profile pic'>";
               }else{
                  echo"<img width='85'height='56'class='img-circle profile_img' src='./profile/".$row['image']."'alt='profile pic'>";
               }
               
             }
              ?>

              </div>
             <div class="profile_info">
                            <span>Welcome,</span>
<?php
              $query=mysql_query("select * from account where user_id='$session_id'") or die( mysql_error());
              $row=mysql_fetch_array($query);
              ?><h2><?php echo $row['f_name']." ".$row['l_name'];  ?></h2>

                            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
<?php
              $query=mysql_query("select * from account where user_id='$session_id'") or die( mysql_error());
              $row=mysql_fetch_array($query);
              ?>
                            <h3><?php echo $row['user_type'];  ?></h3>

               <ul class="nav side-menu">
                                <li><a href="hrofficer.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    
                                </li>
                                <li><a><i class="fa fa-edit"></i> Officer Tasks <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="approvepro.php">Approve Promotion</a>
                                        </li>
                                        <li><a href="vacancy.php">Vacancy Announce</a>
                                        </li>
                    <li><a data-toggle="modal" data-target="#myModalreg_position">Register Position</a>
                                        </li><li><a href="app_employ_request.php">Approve Employee Request</a>
                                        </li>
                                         <li><a href="screening.php">Check The Evaluation</a>
                                        </li>
                                        <li><a href="placeapplicant.php">Place Employee</a>
                                        </li> <li><a href="send_payment_order.php">Send Payment Order</a>
                                        </li>
                                        <li><a href="profile.php">Approve Promotion Report</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Manage Account<span class="fa fa-chevron-down"></span></a>
                                   <ul class="nav child_menu" style="display: none">
                                        <li>
                  
                    <a data-toggle="modal" data-target="#myModalcracc">Create Account</a>
                                        </li>
                                        <li><a data-toggle="modal" data-target="#myModalupdate">Update Account</a>
                                        </li>
                                        <li><a data-toggle="modal" data-target="#myModaldelacc">Delete Account</a>
                                        </li>
                                        <li><a data-toggle="modal" data-target="#myModalaacc">Activate Account</a>
                                        </li>
                                        <li><a data-toggle="modal" data-target="#myModaldeaacc">Deactivate Account</a>
                                        </li>
                    </ul>
                                </li>
                <li><a><i class="fa fa-desktop"></i> Manage Home Page<span class="fa fa-chevron-down"></span></a>
                                   <ul class="nav child_menu" style="display: none">
                                        <li>
                    <a href="manage_home.php">Change About Us</a>
                                        </li>
                                        <li><a href="slide.php">Change Slide Show</a>
                                        </li>
                                       
                    </ul>
                                </li>
                                <li><a data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-table"></i> Change Password <span class="fa fa-chevron-down"></span></a>
                                    
                                
                            </ul>
               
            </div>
            

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
       
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
<?php
              $query=mysql_query("select * from account where user_id='$session_id'") or die( mysql_error());
              $row=mysql_fetch_array($query);
              ?>

                              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                   <?php echo"<img width='80'height='50' src='./profile/".$row['image']."'alt='profile pic'>";?><?php echo $row['f_name']." ".$row['l_name'];  ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a data-toggle="modal" data-target=".bs-example-modal-lg">Profile</a>
                  
                                    </li>
                                    
                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                </ul>
              </li>

              
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
           
            </div>

            <div class="title_right">
             
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">

         <br><br>  <br><br>
<?php include('../changepassword_modal.php');?>
     <?php include('../register_position.php');?>
     
  <?php include('../create_accu_modal.php');?>
         <div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Update Account<small></small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="#"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
<th class="column-title">User Id </th>
<th class="column-title">Full Name </th>
<th class="column-title">User Type</th>  
<th class="column-title">E-mail</th>  
<th class="column-title no-link last"><span class="nobr">Action</span>
</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
<?php
                      include('../dbcon.php');
                                  $q = mysql_query("SELECT * FROM account where state='1' "); 
                  $array = array();
                  while($r = mysql_fetch_array($q)){
                  $array[] = $r; 
                 
                $user_id=$r['user_id'];
               $ful=$r['f_name']." ".$r['l_name'];
               $type=$r['user_type'];
               $e_mail=$r['e_mail'];
                 
                  
                 ?> 
                
                                    <td><?php echo $user_id;?></td>
                                                <td class=" "><?php echo $ful  ?></td>
                                                <td class=" "> <?php echo $type;?> </td>
                                                <td class=" "><?php echo $e_mail;?></td>
                                  <td> 

  <button  class="btn btn-danger" data-toggle="modal" data-target="#myModalupdate" href="update.php?Update=<?php echo $r['user_id'];?>">Update</button>

       </td>   
                                </tr> 

                
                
                <?php } ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
    
                </div>
              </div>
        
        
        
         <!-- --><div class="modal inmodal" id="myModaldelete" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" style="width:59%;">
                    <div class="modal-content animated flipInY">  
                
                  </div>
                                </div>
                            </div>
        
      
              <footer>
                <div class="copyright-info">
                  <p class="pull-right">dmubu Human Resource 2017 &copy; All Right is protected &nbsp; &nbsp;
                        
                    </p>
                </div>
                <div class="clearfix"></div>
              </footer>
              <!-- /footer content -->
  
            </div>
            <?php include('../profile_modal.php');?>
            <!-- /page content -->
          </div>

          <?php include('../activate_acc_modal.php');?>
        </div>
<?php include('../deactivate_acc_modal.php');?>
        <div id="custom_notifications" class="custom-notifications dsp_none">
          <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
          </ul>
          <div class="clearfix"></div>
          <div id="notif-group" class="tabbed_notifications"></div>
        </div>
<script src="dialog.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- bootstrap progress js -->
        <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="js/icheck/icheck.min.js"></script>

        <script src="js/custom.js"></script>


        <!-- Datatables -->
        <!-- <script src="js/datatables/js/jquery.dataTables.js"></script>
  <script src="js/datatables/tools/js/dataTables.tableTools.js"></script> -->

        <!-- Datatables-->
        <script src="js/datatables/jquery.dataTables.min.js"></script>
        <script src="js/datatables/dataTables.bootstrap.js"></script>
        <script src="js/datatables/dataTables.buttons.min.js"></script>
        <script src="js/datatables/buttons.bootstrap.min.js"></script>
        <script src="js/datatables/jszip.min.js"></script>
        <script src="js/datatables/pdfmake.min.js"></script>
        <script src="js/datatables/vfs_fonts.js"></script>
        <script src="js/datatables/buttons.html5.min.js"></script>
        <script src="js/datatables/buttons.print.min.js"></script>
        <script src="js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="js/datatables/dataTables.keyTable.min.js"></script>
        <script src="js/datatables/dataTables.responsive.min.js"></script>
        <script src="js/datatables/responsive.bootstrap.min.js"></script>
        <script src="js/datatables/dataTables.scroller.min.js"></script>


        <!-- pace -->
        <script src="js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
    
   
</body>

</html>

