<?php
session_start();
include"header.php";
include "config.php";
?>
<div class="wrapper">
<div class="container">
				<div class="row">
				<div class="col-md-6">
				<h1>Add Scholarship</h1>
				<form class="login" role="form" method="post" action="">
				
				<div class="form-group">
								<label>Scholarship  Title</label>
								<input type="text" class="form-control" placeholder="" name="stitle">
							</div>
				
				<div class="form-group">
								<label>Scholarship type</label>
								<select name='stype' class="form-control" required>
								<option value=''>Select</option>
								<option value='Live'>Live Scholarship</option>
								<option value='Upcoming'>Upcoming Scholarship</option>
								<option value='Open'>Always Open</option>
								</select>
					</div>

				
				<div class="form-group">
								<label>Eligibility</label>
								<input type="text" class="form-control" placeholder="" name="seligibility">
							</div>
							
				<div class="form-group">
								<label>Region</label>
								<input type="text" class="form-control" placeholder="" name="region">
							</div>	

														
				<div class="form-group">
								<label>Awards</label>
								<input type="text" class="form-control" placeholder="" name="awards">
							</div>	
							
				<div class="form-group">
								<label>Deadline</label>
								<input type="text" class="form-control" placeholder="" name="deadline">
							</div>	
														

							<div class="form-group">
								<label>About the Program</label>
								<textarea class="form-control" name="aprogram" placeholder="" style="height:100px;"></textarea>
							</div>
							
				<div class="form-group">
								<label>Degree</label>
								<select name='degree' class="form-control" required>
								<option value=''>Select</option>
								<option value='Ug'>Ug</option>
								<option value='Pg'>Pg</option>
								</select>
					</div>

						<div class="form-group">
								<label>College Name</label>
								<textarea class="form-control" name="cname" placeholder="" style="height:100px;"></textarea>
							</div>	
							
							<div class="form-group">
								<label>Link</label>
								<textarea class="form-control" name="link" placeholder="" style="height:100px;"></textarea>
							</div>	
							
							

							
							<button type="submit" class="btn btn-two" name="submit">Submit</button><p><br/></p>
						</form>
						</div>
				
				</div>
				</div>
				</div>
</div>
<?php
if(isset($_POST['submit']))
{

$stitle=mysql_real_escape_string($_POST['stitle']);
$seligibility=mysql_real_escape_string($_POST['seligibility']);
$region=$_POST['region'];
$awards=$_POST['awards'];
$deadline=$_POST['deadline'];
$aprogram=mysql_real_escape_string($_POST['aprogram']);
$stype=$_POST['stype'];
$degree=$_POST['degree'];
$cname=$_POST['cname'];
$link=$_POST['link'];




mysql_query("insert into scholarship(stitle,seligibility,region,awards,deadline,aprogram,stype,degree,cname,link)values('$stitle','$seligibility','$region','$awards','$deadline','$aprogram','$stype','$degree','$cname','$link')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Scholarship added successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=admindashboard.php">';
}

include"footer.php";
?>		