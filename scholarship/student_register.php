<?php
session_start();
include"header.php";
include "config.php";
?>
<div class="wrapper">

<div class="container">
				<div class="row">
				<div class="col-md-6">
				<h1>Student Registration</h1>
				
				<form class="login" role="form" method="post" action="">
				
				<div class="form-group">
								<label>Firstname</label>
								<input type="text" class="form-control" placeholder="Firstname" name="fname">
							</div>
							
							<div class="form-group">
								<label>Lastname</label>
								<input type="text" class="form-control" placeholder="Lastname" name="lname">
							</div>
							
							
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" placeholder="Email" name="email">
							</div>
							
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" placeholder="Phone" name="phone">
							</div>
							
							<div class="form-group">
								<label>Gender</label>
								<select name="gender" class="form-control">
								<option value="">Select</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								</select>
							</div>
							
							<div class="form-group">
								<label>When do you want to join</label>
								<input type="text" class="form-control" placeholder="" name="jyear" value="<?php date('Y'); ?>">
							</div>
							
							<div class="form-group">
								<label>Where do you want to study</label>
								<select name="study" class="form-control">
								<option value="">Select</option>
								<option value="India">India</option>
								<option value="Foreign">Foreign</option>
								</select>
							</div>

							<div class="form-group">
								<label>Course Type</label>
								<select name="ctype" class="form-control">
								<option value="">Select</option>
								<option value="UG">UG</option>
								<option value="PG">PG</option>
								</select>
							</div>
							
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
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$jyear=$_POST['jyear'];
$study=$_POST['study'];
$ctype=$_POST['ctype'];




$q=mysql_query("select * from  student where stname='$uname' and stpass='$upass'")or die(mysql_error());

$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('Student account already exists');</script>";
}
else
{
mysql_query("insert into student(stfname,stlname,stemail,stname,stpass,phone,gender,jyear,study,ctype)values('$fname','$lname','$email','$uname','$upass','$phone','$gender','$jyear','$study','$ctype')");
echo "<script type='text/javascript'>alert('Student account registered successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=student_login.php">';
}

}
?>
<?php
include"footer.php";
?>
