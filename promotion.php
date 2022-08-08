<!DOCTYPE html>
<html lang="en">
<?php include('session.php');?>
<?php include('dbcon.php');?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Employee Page </title>
<link rel="shortcut icon" href="images/USERS.jpg" />
  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="js/jquery.min.js"></script>

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
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $r['user_type'];  ?></span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
<?php
             $Je = mysql_query("SELECT image FROM account WHERE user_id='$session_id' "); 
                         while($row=mysql_fetch_assoc($Je)){
               if($row['image'] == ""){
                 echo"<img width='50'height='50' src='profile/0.13.jpg'alt='default profile pic'>";
               }else{
                  echo"<img width='85'height='56'class='img-circle profile_img' src='profile/".$row['image']."'alt='profile pic'>";
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
                                <li><a href="employee.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                             
                                </li>
                                <li><a href="promotion.php"><i class="fa fa-edit"></i>  Request Promotion <span class="fa fa-chevron-down"></span></a>
                                   
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Manage Password <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a data-toggle="modal" data-target=".bs-example-modal-sm">Change Password</a>
                                        </li>
                                    
                                    </ul>
                                </li>
                                <li><a data-toggle="modal" data-target="#send_account_modal"><i class="fa fa-table"></i> Finance Form <span class="fa fa-chevron-down"></span></a>
                                
                                </li>   
                            </ul>
                        </div>
                     

                    </div>
          <!-- /sidebar menu -->
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
                                   <?php echo"<img width='80'height='50' src='profile/".$row['image']."'alt='profile pic'>";?><?php echo $row['f_name']." ".$row['l_name'];  ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-user pull-right"></i>Profile</a>
                  
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">
                                      <?php
                      $request="Request";
                  $zed = mysql_query("SELECT * FROM employeerequest WHERE status='$request'"); 
                      $X=0;
                      while($z = mysql_fetch_array($zed)){
                      $status=$z['status'];
                      if($status=="Request"){
                      $X++;
                      }
                      else{
                      $X=0;
                      }}?>
                      <?php echo $X ?>


                                      </span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                   
                                    
                                        
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a href="viewemployeerequest.php">
                                               <i class="fa fa-question"> <strong>view Request</strong>
                                               <br/> Number of Request &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $X ?> </span></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                
        
  <!-- end of  threed notification -->

                        </ul>
            
                    </nav>
          <?php include('profile_modal.php');?>
          
              
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
    
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                   Promotion Request 
                </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  
                  <span class="input-group-btn">
                            
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
          
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">


<?php include('promoreqform.php');?>
          
          <?php include('changepassword_modal.php');?>
          <?php include('send_account_modal.php');?>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
          <p class="pull-right">dmubu Human Resource 2018 &copy; All Right is protected &nbsp; &nbsp;
                        
                    </p>
          </div>
          <div class="clearfix"></div>
      
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script src="js/custom.js"></script>
  <!-- form validation -->
 

<?php include('validation.php');?>
 <!-- PNotify -->
  <script type="text/javascript" src="js/notify/pnotify.core.js"></script>
  <script type="text/javascript" src="js/notify/pnotify.buttons.js"></script>
  <script type="text/javascript" src="js/notify/pnotify.nonblock.js"></script>
  <script type="text/javascript">
    var permanotice, tooltip, _alert;
    $(function() {
      new PNotify({
        title: "User ID&nbsp;<?php echo $r['user_id'];  ?>",
        type: "dark",
        text: "Welcome. To <?php echo $r['user_type'];  ?> page.",
        nonblock: {
          nonblock: true
        },
        before_close: function(PNotify) {
          // You can access the notice's options with this. It is read only.
          //PNotify.options.text;

          // You can change the notice's options after the timer like this:
          PNotify.update({
            title: PNotify.options.title + " - Enjoy your Stay",
            before_close: null
          });
          PNotify.queueRemove();
          return false;
        }
      });

    });
  </script>
  


</body>

</html>
