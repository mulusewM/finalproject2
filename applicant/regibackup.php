
   
	<!--external css-->
                <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg" style="width:45%;">
                    <div class="modal-content" >

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                       </div>
                      <div class="modal-body">
<form class="form-horizontal form-label-left" method="post">
      <center>Enter Vacancy ID Here for Vacanct Place</center><br>
	 <input type="text" style="width:50%;"placeholder="Enter Vacancy ID here for Search" name="vacancy_id" id="vacancy_id" required="required"> 
 <input type="submit" name="search" class="btn-search" value="Search" style="margin-top:-190%;"></p>
	 <?php
	 $n=0;
	 $y=0;
	if (isset($_POST['search'])){
	 $sqlzed=mysql_query("select * from vacancy");
	  $vac=$_POST['vacancy_id'];
	while($rowsv=mysql_fetch_array($sqlzed)){
		$xyz=$rowsv['vacancy_id'];
		$dat=date('y-m-d');
$strdate=$rowsv['reg_dates'];
$enddate=$rowsv['deadline'];

if($vac == $xyz){
if(strtotime($strdate)<=strtotime($dat) && strtotime($enddate)>=strtotime($dat)){
	$n=1;
	break;
}
	}
	}
	if($n==1){		
			 header('Location: registration.php?ID='.$xyz); 
		} 
		else{	
echo '<div class="alert alert-dismissable alert-danger">';
echo '<strong>'.'<center>'."The Time for registeration will not start for these vacancy ID or No such vacancy ID on post".'</center>'.'<strong>';
echo '</div>';
		
		}
	}		 
	 ?>
	 </form> 	
 </div>
 </div>
 </div>
 </div>
				
