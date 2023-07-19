<?php
session_start();
include"header.php";
include "config.php";
?>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-12">
				<h1>Staff Dashboard</h1>
				
				<div class="col-md-12">
<?php
$q=mysql_query("select * from question")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo '<table align="left" cellpadding="10" cellspacing="0" border="1">';
echo "<tr style='vertical-align:text-top;'><td>Question</td><td>Action</td></tr>";
while($r=mysql_fetch_array($q))
{
$qid=$r['qid'];
$question=$r['question'];
echo "<tr style='vertical-align:text-top;'><td>$question</td><td>&nbsp;&nbsp;<a href='answer.php?qid=$qid'><button class='btn btn-two'>Answer</button></a></td></tr>";
}
echo '</table>';
}
?>
</div>
				
				</div>
				</div>
				</div>
</div>
<?php
include"footer.php";
?>		