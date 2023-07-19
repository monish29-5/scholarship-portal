<?php
error_reporting(0);
include("config.php");
include("header.php");
?>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-12">
				<h1>View Students</h1>
          
          <table align="left" cellpadding="10" cellspacing="0" border='1' width='100%'>
          <tr><td>Name</td><td>Email</td><td>Phone</td><td>Gender</td><td>When do you want to join</td><td>Where do you want to study</td><td>Course Type</td></tr>
          <?php
		  $n=mysql_query("select * from student");
		  while($m=mysql_fetch_array($n))
		  {
$cname=$m['stfname'].','.$m['stlname'];
$uname=$m['uname'];
$email=$m['stemail'];
$stphone=$m['phone'];
$gender=$m['gender'];
$jyear=$m['jyear'];
$study=$m['study'];
$ctype=$m['ctype'];

echo "<tr><td>$cname</td><td>$email</td><td>$stphone</td><td>$gender</td><td>$jyear</td><td>$study</td><td>$ctype</td></tr>";
		  }
		  ?>
          </table>
        </div>
						</div>
						</div>
</div>						
<?php
include("footer.php");
?>
