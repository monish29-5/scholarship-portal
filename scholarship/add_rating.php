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
$rid=$_GET['rid'];
$q=mysql_query("select * from question where qid='$qid'")or die(mysql_error());
while($r=mysql_fetch_array($q))
{
$question=$r['question'];
echo "Question  :  $question";
}
?>
<div class="col-md-12">
<?php
$q=mysql_query("select * from reply where qid='$qid' and rid='$rid'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<h2>Reply</h2>";
echo '<table align="center" cellpadding="10" cellspacing="0" border="1" width="100%">
<tr><td>Reply</td><td>Rating</td></tr>';
while($r=mysql_fetch_array($q))
{
$reply=$r['reply'];
$rid=$r['rid'];
echo '<tr><td width="80%"><input type="hidden" name="rid" value="'.$rid.'" />'.$reply.'</td><td width="20%"><input type="radio" name="rating" value="0">&nbsp;Poor<br /><input type="radio" name="rating" value="1">&nbsp;Good<br /><input type="radio" name="rating" value="2">&nbsp;Excellent</td></tr>';
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
if(isset($_POST['submit']))
{

$rating=$_POST['rating'];
$rid=$_POST['rid'];
$qid=$_GET['qid'];
$stid=$_SESSION['stid'];
$q1=mysql_query("select * from rating where rid='$rid'")or die(mysql_error());
$n1=mysql_num_rows($q1);
if($n1>0)
{
while($r1=mysql_fetch_array($q1))
{
$old_rating=$r1['rating'];

$rating=(round($rating+$old_rating,2)/2);
mysql_query("update rating set rating='$rating' where rid='$rid'");
}
}
else
{
mysql_query("insert into rating(rid,qid,stid,rating)values('$rid','$qid','$stid','$rating')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Rating added successfully');</script>";
echo "<meta http-equiv='refresh' content='0;url=add_rating.php?qid=$qid&rid=$rid'>";
}
}
include"footer.php";
?>		