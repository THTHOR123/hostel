<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


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
	<title>Manage Rooms</title>
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
						<h2 class="page-title">Manage Rooms</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Room Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>SR.NO</th>
											<th>USN</th>
										
											<th>FIRST-NAME</th>
											<th>LAST-NAME</th>
											<th>ROOM-NO</th>

											
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>SR.NO</th>
										<th>USN</th>
										
										<th>FIRST-NAME</th>
										<th>LAST-NAME</th>
										<th>ROOM-NO</th>
										</tr>
									</tfoot>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select s.usn,first_name,last_name,room_id from student s,room r where s.usn = r.usn";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute();//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->usn;?></td>
<td><?php echo $row->first_name;?></td>
<td><?php echo $row->last_name;?></td>
<td><?php echo $row->room_id;?></td>
<!-- <td>
	<a href='update_room.php?id=<?php echo $row->usn;?>'><input type="submit" value="update" class="update"></a>
	<a href='delete_student.php?id=<?php echo $row->usn;?>'><input type="submit" value="delete" class="delete" onclick="return check_delete()"></a> -->
<!-- </td> --> 
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
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
	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script> -->

</body>

</html>
