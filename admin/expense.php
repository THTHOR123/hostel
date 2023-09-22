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

    $type = $_POST['type'];
    $date = date('Y-m-d',strtotime($_POST['date']));
    $cost = $_POST['cost'];
	
$query= $mysqli->prepare("insert into expense(type,date,cost) values(?,?,?)");

$query->bind_param("ssi",$type,$date,$cost);
$query->execute();
$query->close();
echo"<script>alert('Expense Updated');</script>";
$mysqli->close();

// $query = "insert into fee(type,date,cost) values('$type',$date,$cost) ";
// $query1 = mysqli_query($mysqli,$query);

// if($query1>0)
// {
//     echo"<script>alert('Expense Updated');</script>";
// }


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
					
						<h2 class="page-title">EXPENSES </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Expense Info</div>
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">
											
										




                                        <div class="form-group">

<label class="col-sm-2 control-label">TYPE: </label>
<div class="col-sm-8">
<select name="type" class="form-control" required="required">
<option value="">Select</option>
<option value="EMPLOYEE SALARY">EMPLOYEE SALARY</option>
<option value="MAINTANANCE">MAINTANANCE</option>
<option value="ELECTRICITY BILL">ELECTRICITY BILL</option>
<option value="WATER BILL">WATER BILL</option>
<option value="FOOD">FOOD </option>

</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">DATE : </label>
<div class="col-sm-8">
<input type="date" name="date" id="date"  class="form-control" required="required" >
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">COST : </label>
<div class="col-sm-8">
<input type="text" name="cost" id="cost"  class="form-control" required="required">
</div>
</div>





<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="submit" class="btn btn-primary">
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