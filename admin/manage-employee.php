<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

// if(isset($_GET['del']))
// {
// 	$id=intval($_GET['del']);
// 	$adn="delete from employee where id=?";
// 		$stmt= $mysqli->prepare($adn);
// 		$stmt->bind_param('i',$id);
//         $stmt->execute();
//         $stmt->close();	   
//         echo "<script>alert('Data Deleted');</script>" ;
// }
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
	<title>Manage Employees</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">EMPLOYEE DETAILS</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Employee Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>SR_NO</th>
											<th>ID</th>
											<th>NAME</th>
											<th>PHONE_NO</th>
											<th>ADDRESS </th>
											<th>JOB </th>
											<th>SALARY </th>
											
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>SR_NO</th>
										<th>ID</th>
											<th>NAME</th>
											<th>PHONE_NO</th>
											<th>ADDRESS </th>
											<th>JOB </th>
											<th>SALARY </th>
										</tr>
									</tfoot>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from employee";
$stmt= $mysqli->prepare($ret) ;
$cnt=1;
$stmt->execute() ;
$res=$stmt->get_result();

while($row=$res->fetch_object())
	  {
	  	?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row->id;?></td>
<td><?php echo $row->name;?></td>
<td><?php echo $row->phone_no;?></td>
<td><?php echo $row->address;?></td>
<td><?php echo $row->job;?></td>
<td><?php echo $row->salary;?></td>
<td>
<a href='update_data.php?id=<?php echo $row->id;?>'><input type="submit" value="update" class="update"></a>
	<a href='delete_data.php?id=<?php echo $row->id;?>'><input type="submit" value="delete" class="delete" onclick="return check_delete()"></a></td>
										</tr>
									
<?php	  
$cnt=$cnt+1;}	
										?>
									</tbody>
								</table>
								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

	<script>
		function check_delete() {
			return confirm('Are you sure you want to delete?');
		}
	</script>

</body>

</html>
