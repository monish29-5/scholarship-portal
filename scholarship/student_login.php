<?php
session_start();
include"header.php";
include "config.php";
?>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-3">
				<h1>Student Login</h1>
<form class="login" role="form" method="post" action="">
							<div class="form-group">
								<label>User Name</label>
								<input type="text" class="form-control" placeholder="Username" name="uname">
							</div>
							
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" placeholder="Password" name="upass">
							</div>
							
							<button type="submit" class="btn btn-two" name="submit">Submit</button><p><br/></p>
						</form>
						</div>
						</div>
						</div>
</div>
<?php
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$q=mysql_query("select * from student where stname='$uname' and stpass='$upass'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
$r=mysql_fetch_array($q);
$_SESSION['stid']=$stid=$r['stid'];
$_SESSION['stname']=$uname=$r['stname'];
echo '<meta http-equiv="refresh" content="0;url=studentdashboard.php">';
}
else
{
echo "<script type='text/javascript'>alert('You are not authorised user');</script>";
}

}
?>
<?php
include"footer.php";
?>
