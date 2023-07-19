<?php
session_start();
include"header.php";
include "config.php";
?>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-12">
				<h1>View Scholarship</h1>

            <form name="" action="" method="post">
Search : 
				<input type="text" name="search_txt" value="" />

				<span class='submit'><input type="submit" name="search" value="Search" /></span>
				</form><br/>
				
<?php

echo '<table align="center" cellpadding="10" cellspacing="0" border="1">';

echo "<tr style='vertical-align:text-top;'><td>Scholarship Title</td><td>Eligibility</td><td>Region</td><td>Awards</td><td>Deadline</td><td>About the Program</td><td>Scholarship type</td>
<td>Degree</td>
<td>College Name</td>
<td>Link</td>
<td>Action</td>
</tr>";

/*echo "<tr style='vertical-align:text-top;'><td>Scholarship Title</td><td>Scholarship type</td><td>Eligibility</td><td>Region</td><td>Awards</td><td>Deadline</td><td>About the Program</td>
<td>Scholarship type</td>
<td>Degree</td>
<td>College Name</td>
<td>Link</td>
<td>Action</td></tr>";*/

if(isset($_POST['search']))
		 {
			 $search_txt=$_POST['search_txt'];

	 
$q=mysql_query("select * from scholarship where 

stitle LIKE '%$search_txt%'

or seligibility LIKE '%$search_txt%'

or region LIKE '%$search_txt%'

or awards LIKE '%$search_txt%'

or deadline LIKE '%$search_txt%'

or aprogram LIKE '%$search_txt%'

or stype LIKE '%$search_txt%'

or degree LIKE '%$search_txt%'

or cname LIKE '%$search_txt%'

")or die(mysql_error());

		 }
		else
		{
$q=mysql_query("select * from scholarship")or die(mysql_error());
		}
		
$n=mysql_num_rows($q);
if($n>0)
{

while($r=mysql_fetch_array($q))
{
$stitle=$r['stitle'];
$seligibility=$r['seligibility'];
$region=$r['region'];
$awards=$r['awards'];
$deadline=$r['deadline'];
$aprogram=$r['aprogram'];
$stype=$r['stype'];
$sid=$r['sid'];
$degree=$r['degree'];
$cname=$r['cname'];
$link=$r['link'];


echo "<tr style='vertical-align:text-top;'><td>$stitle</td><td>$seligibility</td><td>$region</td><td>$awards</td>
<td>$deadline</td><td>$aprogram</td><td>$stype</td><td>$degree</td><td>$cname</td><td><a href='$link' target='_blank'>View</a></td><td><a href='studentdashboard.php?sid=$sid&action=register'>Register</a></td></tr>";
}

}
echo '</table>';
?>
				
				</div>
				</div>
				</div>
</div>
<?php
if(($_GET['sid']!='')&&($_GET['action']=='register'))
{
$sid=$_GET['sid'];
$stname=$_SESSION['stname'];
$edate=date("Y-m-d");
mysql_query("insert into reg_scholarship(sid,stname,edate)values('$sid','$stname','$edate')");
echo '<meta http-equiv="refresh" content="0;url=viewreg_scholarship.php">';
echo "<script type='text/javascript'>alert('Scholarship applied successfull');</script>";
}
include"footer.php";
?>		