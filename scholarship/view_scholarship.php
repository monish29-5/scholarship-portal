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
<?php
echo '<table align="center" cellpadding="10" cellspacing="0" border="1">';
echo "<tr style='vertical-align:text-top;'><td>Scholarship Title</td><td>Eligibility</td><td>Region</td><td>Awards</td><td>Deadline</td><td>About the Program</td><td>Scholarship type</td>
<td>Degree</td>
<td>College Name</td>
<td>Link</td>

</tr>";

$q=mysql_query("select * from scholarship")or die(mysql_error());
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
$degree=$r['degree'];
$cname=$r['cname'];
$link=$r['link'];



echo "<tr style='vertical-align:text-top;'><td>$stitle</td><td>$seligibility</td><td>$region</td><td>$awards</td>
<td>$deadline</td><td>$aprogram</td><td>$stype</td><td>$degree</td><td>$cname</td><td><a href='$link' target='_blank'>View</a></td></tr>";
}

}
echo '</table>';
?>
				
				</div>
				</div>
				</div>
</div>
<?php
include"footer.php";
?>		