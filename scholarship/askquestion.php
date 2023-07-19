<?php
session_start();
include"header.php";
include "config.php";
?>
<div class="wrapper">
<div class="container">
				<div class="row">
<div class="col-md-12">
                <br />
				<?php
				$v=mysql_query("select * from question");
				while($k=mysql_fetch_array($v))
				{
				$subject=$k['subject'];
				echo "<a href='askquestion.php?subject=$subject' class='btn btn-two'>$subject</a> &nbsp;";
				}
				?>
				</div>				
                <div class="col-md-6">
				<h1>Ask Question</h1>
				<form class="login" role="form" method="post" action="">
				
				<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" placeholder="Subject" name="subject">
                                <label>Ask Question</label>
                                <input type="text" class="form-control" placeholder="Ask Question" name="question">
							</div>

							<button type="submit" class="btn btn-two" name="submit">Submit</button><p><br/></p>
						</form>
						</div>
						<div class="col-md-12">
<?php
if($_GET['subject']!='')
{
$subject=$_GET['subject'];
$q=mysql_query("select * from question where subject='$subject'")or die(mysql_error());
}
else
{
$q=mysql_query("select * from question")or die(mysql_error());
}
$n=mysql_num_rows($q);
if($n>0)
{
echo '<table align="left" cellpadding="10" cellspacing="0" border="1">';
echo "<tr style='vertical-align:text-top;'><td>Question</td><td>Action</td></tr>";
while($r=mysql_fetch_array($q))
{
$qid=$r['qid'];
$question=$r['question'];
echo "<tr style='vertical-align:text-top;'><td>$question</td><td>&nbsp;&nbsp;<a href='reply.php?qid=$qid'><button class='btn btn-two'>Reply</button></a>&nbsp;&nbsp;<a href='rating.php?qid=$qid'><button class='btn btn-two'>Rating</button></a>&nbsp;&nbsp;<a href='correct.php?qid=$qid'><button class='btn btn-two'>Answer</button></a>&nbsp;&nbsp;<a href='results.php?qid=$qid'><button class='btn btn-two'>Results</button></a></td></tr>";
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
if(isset($_POST['submit']))
{
$subject=$_POST['subject'];
$question=mysql_real_escape_string($_POST['question']);
$stid=$_SESSION['stid'];
mysql_query("insert into question(subject,question,stid)values('$subject','$question','$stid')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Question added successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=askquestion.php">';
}
include"footer.php";
?>		