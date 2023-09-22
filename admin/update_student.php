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


$id = $_GET['id'];

    $query = "select * from student where usn = '$id'";
  $data = mysqli_query($mysqli,$query);
  $total = mysqli_num_rows($data);
  $result = mysqli_fetch_assoc($data);


if($_POST['update'])
{
	$usn     = $_POST['usn'];
	$fname   = $_POST['fname'];
	$lname	 = $_POST['lname'];
	$year    = $_POST['year'];
	$contact = $_POST['contact'];
	$email   = $_POST['email'];
	$gcontact = $_POST['gcontact'];
	$address = $_POST['address'];

    
    $query = "update student set usn = '$usn' , first_name = '$fname' , last_name = '$lname' , year = '$year' ,email = '$email' ,phone_no = '$contact' ,address = '$address', parent_phone_no = '$gcontact' where usn = '$id'";
    $data = mysqli_query($mysqli,$query);


    if($data)
     {
        echo"<script>alert('Succssfully Updated');</script>";

        ?>
        <meta http-equiv = "refresh" content = "0; url =http://localhost/hostel%20mgmt%20PHP/hostel/admin/dashboard.php" />


        <?php
     }
     else
     {
        echo"record not updated";
     }




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
					
						<h2 class="page-title">UPDATE STUDENT </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Update Info</div>
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">
											
										




<div class="form-group">
<label class="col-sm-2 control-label">USN: </label>
<div class="col-sm-8">
<input type="text" value="<?php echo $result['usn']  ;?>" name="usn" id="regno"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">First Name : </label>
<div class="col-sm-8">
<input type="text" value="<?php echo $result['first_name']  ;?>" name="fname" id="fname"  class="form-control" required="required" >
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Last Name : </label>
<div class="col-sm-8">
<input type="text" value="<?php echo $result['last_name']  ;?>" name="lname" id="lname"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">YEAR: </label>
<div class="col-sm-8">
<select name="year" class="form-control" required="required">
<option value="">Select YEAR</option>
<option value="1"  
    <?php
        if($result['year'] == '1')
        {
            echo "selected";
        }
    ?>
>1</option>
<option value="2"
<?php
        if($result['year'] == '2')
        {
            echo "selected";
        }
    ?>
>2</option>
<option value="3"
<?php
        if($result['year'] == '3')
        {
            echo "selected";
        }
    ?>
>3</option>
<option value="4"
<?php
        if($result['year'] == '4')
        {
            echo "selected";
        }
    ?>
>4</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" value="<?php echo $result['phone_no']  ;?>" name="contact" id="contact"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Email id : </label>
<div class="col-sm-8">
<input type="email" value="<?php echo $result['email']  ;?>" name="email" id="email"  class="form-control" required="required">
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Guardian Contact no : </label>
<div class="col-sm-8">
<input type="text" value="<?php echo $result['parent_phone_no']  ;?>" name="gcontact" id="gcontact"  class="form-control" required="required">
</div>
</div>	








<div class="form-group">
<label class="col-sm-2 control-label">Address : </label>
<div class="col-sm-8">
<input type="text" value="<?php echo $result['address']  ;?>" name="address" id="address"  class="form-control" required="required">
</div>
</div>	





<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="update" Value="Update" class="btn btn-primary">
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