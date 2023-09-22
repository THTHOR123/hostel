<?php
session_start();
// include('includes/config.php');
$dbuser="root";
$dbpass="";
$host="localhost";
$db="hostel_data";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);
include('includes/checklogin.php');
check_login();
//code for registration
if($_POST['submit'])
{
	$usn     = $_POST['usn'];
	$fname   = $_POST['fname'];
	$lname	 = $_POST['lname'];
	$year    = $_POST['year'];
	$contact = $_POST['contact'];
	$email   = $_POST['email'];
	$gcontact = $_POST['gcontact'];
	$address = $_POST['address'];
$query= $mysqli->prepare("insert into student(usn,first_name,last_name,year,email,phone_no,address,parent_phone_no) values(?,?,?,?,?,?,?,?)");
// $stmt = $mysqli->prepare($query);

$query->bind_param("sssissss",$usn,$fname,$lname,$year,$email,$contact,$address,$gcontact);
$query->execute();
$query->close();
echo"<script>alert('Student Succssfully register');</script>";
$mysqli->close();


}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Student Hostel Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>


</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Student Info</div>
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">
											
										




<div class="form-group">
<label class="col-sm-2 control-label">USN: </label>
<div class="col-sm-8">
<input type="text" name="usn" id="regno"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">First Name : </label>
<div class="col-sm-8">
<input type="text" name="fname" id="fname"  class="form-control" required="required" >
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Last Name : </label>
<div class="col-sm-8">
<input type="text" name="lname" id="lname"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">YEAR: </label>
<div class="col-sm-8">
<select name="year" class="form-control" required="required">
<option value="">Select YEAR</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Email id : </label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control" required="required">
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Guardian Contact no : </label>
<div class="col-sm-8">
<input type="text" name="gcontact" id="gcontact"  class="form-control" required="required">
</div>
</div>	








<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8">
<input type="text" name="address" id="address"  class="form-control" required="required">
</div>
</div>	





<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>


</html>