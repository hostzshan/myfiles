<!DOCTYPE html>
<?php
$db = mysqli_connect("localhost","root","","bbank");
$name="";
// $age="";
// $address="";
// $email;
// $mobile;
// $bloodGrp;
// $gender;
if ($_SERVER['REQUEST_METHOD']=='POST'){
extract($_POST);
$resultsum=mysqli_query($db,"SELECT * FROM applicant where name='$name'");
}
else
$resultsum=mysqli_query($db,"SELECT * FROM applicant");
?>
<html>
    <head>
        <title>TechAspect Blood Bank</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>TechAspect Blood Bank Application</h1>
		<div class="panel panel-info">
		<div class="panel-heading">Donor Details</div>
		<form action="data.php" method="post" class="">
		<div class="row">
		<div class="form-group col-md-1 col-md-offset-1"><label for="name" class="col-md-3">Name</label><input type="text" id="name" name="name" placeholder="max 30 characters" class="form-control col-md-3" /></div>
		<div class="form-group col-md-1"><label for="age">Age</label><input type="number" id="age" name="age" placeholder="max 2 characters" class="form-control" /></div>
		<div class="form-group col-md-1"><label for="address">Address</label><input type="text" id="address" name="address"  placeholder="max 200 characters" class="form-control" /></div>
		<div class="form-group col-md-1"><label for="email">Email ID</label><input type="email" id="email" name="email" placeholder="max 30 characters" class="form-control" /></div>
		<div class="form-group col-md-1"><label for="mobile">Mobile</label><input type="text" id="mobile" name="mobile" placeholder="max 13 characters" class="form-control" /></div>
		<div class="form-group col-md-1"><label for="bloodGrp">Blood Group</label><input type="text" id="bloodGrp" name="bloodGrp"  placeholder="max 3 characters" class="form-control" /></div>
		<div class="form-group col-md-1"><label for="gender">Gender</label><input type="text" id="gender" name="gender"  placeholder="max 10 characters" class="form-control" /></div>
		</div>
		<div class="row">
		<button type="submit" class="btn btn-danger col-md-2 col-md-offset-5">Submit</button>
		</div>
		</form>
        <table class="table">
	
<?php	while($row = $resultsum->fetch_assoc())
	{
		?>
		
		<tr>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['age'];?></td>
		<td><?php echo $row['address'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['mobile'];?></td>
		<td><?php echo $row['bloodGrp'];?></td>
		<td><?php echo $row['gender'];?></td>
		
		</tr>
				<?php
	}
	?>
		</table>
		<br>
		</div>
    </body>
</html>
