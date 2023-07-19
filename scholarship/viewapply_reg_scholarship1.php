<?php
session_start();
include"header.php";
include "config.php";
?>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-12">
				<h1>View Approved Scholarship</h1>

          <div class="clr"></div>
          <table align="left" cellpadding="10" cellspacing="0" border="1">
          <tr><td>Name</td><td>Scholarship Title</td><td>Scholarship type</td><td>Eligibility</td><td>Region</td><td>Awards</td><td>Deadline</td><td>About the Program</td><td>Applied Date</td><td>Status</td></tr>
          <?php
		  $stname=$_SESSION['stname'];
		  $n=mysql_query("select * from reg_scholarship where stname='$stname'");
		  while($m=mysql_fetch_array($n))
		  {
		  $sid=$m['sid'];
		  $reid=$m['reid'];
		  
		  $stname=$m['stname'];
		  $edate=$m['edate'];
		  $status=$m['status'];
		  if($status=='1')
		  {
			  $status='Approved';
		  }
		  if($status=='0')
		  {
			  $status='Pending';
		  }
		  
	   $g=mysql_query("select * from scholarship where sid='$sid'");
		  $r=mysql_fetch_array($g);
$stitle=$r['stitle'];
$seligibility=$r['seligibility'];
$region=$r['region'];
$awards=$r['awards'];
$deadline=$r['deadline'];
$aprogram=$r['aprogram'];
$stype=$r['stype'];


echo "<tr><td>$stname</td><td>$stitle</td><td>$seligibility</td><td>$region</td><td>$awards</td>
<td>$deadline</td><td>$aprogram</td><td>$stype</td><td>$edate</td><td>$status</td></tr>";
		  }
		  ?>
          </table>
        </div>
      
      </div>
      
      <div class="clr"></div>
    </div>
  </div>
<?php
if(($_GET['reid']!='')&&($_GET['action']=='approve'))
{
$reid=$_GET['reid'];
mysql_query("update reg_scholarship set status='1' where reid='$reid'");
echo '<meta http-equiv="refresh" content="0;url=viewapply_reg_scholarship.php">';
echo "<script type='text/javascript'>alert('Scholarship approved successfull');</script>";
}
include("footer.php");
?>
