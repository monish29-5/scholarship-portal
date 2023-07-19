<?php
error_reporting(0);
session_start();
include"header.php";
include "config.php";
?>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-6">
				<h1>Correct Answer</h1>				
<?php
$qid=$_GET['qid'];
$q=mysql_query("select * from question where qid='$qid'")or die(mysql_error());
while($r=mysql_fetch_array($q))
{
$question=$r['question'];
echo "Question  :  $question";
}
?>
<br /><br />				
				


						</div>
						<div class="col-md-12">
<?php
$q=mysql_query("select * from reply where qid='$qid' and correct='1'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<h2>Reply</h2>";
echo "<hr>";
while($r=mysql_fetch_array($q))
{
echo $reply=$r['reply'];
echo "<hr>";
}
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