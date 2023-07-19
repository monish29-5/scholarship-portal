<?php
session_start();
include"header.php";
include "config.php";
?>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-12">
				<h1>Read Subject</h1>
<?php
$q=mysql_query("select * from subject")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo '<table align="center" cellpadding="10" cellspacing="0" border="1">';
while($r=mysql_fetch_array($q))
{
$stitle=$r['stitle'];
$subject=$r['subject'];
echo "<tr style='vertical-align:text-top;'><td>$stitle</td><td>$subject</td></tr>";
}
echo '</table>';
}

?>
				
				</div>
				</div>
				</div>
</div>
<?php
include"footer.php";
?>		