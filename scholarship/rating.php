<?php
error_reporting(0);
session_start();
include"header.php";
include "config.php";
?>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-12">
				<h1>Rate Answer</h1>
				<form class="login" role="form" method="post" action="">
				
<?php
$qid=$_GET['qid'];
$q=mysql_query("select * from question where qid='$qid'")or die(mysql_error());
while($r=mysql_fetch_array($q))
{
$question=$r['question'];
echo "Question  :  $question";
}
?>
<div class="col-md-12">
<?php
$q=mysql_query("select * from reply where qid='$qid'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<h2>Reply</h2>";
echo '<table align="center" cellpadding="10" cellspacing="0" border="1" width="100%">
<tr><td>Reply</td><td>Action</td></tr>';
while($r=mysql_fetch_array($q))
{
$reply=$r['reply'];
$rid=$r['rid'];
echo '<tr><td width="80%">'.$reply.'</td><td width="20%"><a href="add_rating.php?rid='.$rid.'&qid='.$qid.'">Rate</a></td></tr>';
}
echo "</table>";
}
?><br />
							<button type="submit" class="btn btn-two" name="submit">Submit</button><p><br/></p>
						</form>
						</div>
						</div>
						
						
				
				</div>
				</div>
				</div>
</div>
<?php
include"footer.php";
?>		