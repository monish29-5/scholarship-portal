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
				<h1>Results</h1>				
<?php
$qid=$_GET['qid'];
$q=mysql_query("select * from question where qid='$qid'")or die(mysql_error());
while($r=mysql_fetch_array($q))
{
$question=$r['question'];
echo "Question  :  $question";
}
?>
						</div>
						<div class="col-md-12">
<?php
$q=mysql_query("select * from reply where qid='$qid'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<h2>Answers</h2>";
echo "<hr>";echo '<table align="center" cellpadding="10" cellspacing="0" border="1" width="100%">
<tr><td>Answer</td><td>Result</td></tr>';

while($r=mysql_fetch_array($q))
{
$reply=$r['reply'];
$correct=$r['correct'];
if($correct=='1')
{
$ans="Right";
}
else
{
$ans="Wrong";
}
echo '<tr><td width="80%">'.$reply.'</td><td width="20%">'.$ans.'</td></tr>';
}echo "</table>";
}
?>
<br />
</div>
						
				
				</div>
				</div>
				</div>
</div>
<?php
include"footer.php";
?>		