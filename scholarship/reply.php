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
				<h1>Reply Question</h1>
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
<br /><br />				
				<div class="form-group">
								<label>Reply Question</label>
								<input type="text" class="form-control" placeholder="Reply Question" name="reply">
							</div>

							<button type="submit" class="btn btn-two" name="submit">Submit</button><p><br/></p>
						</form>
						</div>
						<div class="col-md-12">
<?php
$q=mysql_query("select * from reply where qid='$qid'")or die(mysql_error());
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
if(isset($_POST['submit']))
{

$reply=mysql_real_escape_string($_POST['reply']);
$qid=$_GET['qid'];
$stid=$_SESSION['stid'];
mysql_query("insert into reply(reply,qid,stid)values('$reply','$qid','$stid')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Reply added successfully');</script>";
echo "<meta http-equiv='refresh' content='0;url=reply.php?qid=$qid'>";
}
include"footer.php";
?>		