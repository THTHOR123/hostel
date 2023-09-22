<?php
session_start();
$dbuser="root";
$dbpass="";
$host="localhost";
$db="hostel_data";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);
include('includes/checklogin.php');
check_login();
//code for registration

if($_POST['Register'])
{
   $usn     = $_POST['usn'];
   $status    = $_POST['status'];
   $transaction  = $_POST['transaction'];
   $date     = date('Y-m-d',strtotime($_POST['date']));
   

   $query = $mysqli->prepare("insert into fee(usn,status,transaction_id,date) values(?,?,?,?)");
   $query->bind_param("ssss",$usn,$status,$transaction,$date);
   $query->execute();
   $query->close();
   $mysqli->close();
}

// $query = "insert into fee (usn,status,transaction_id,date) values('$usn','$status','$transaction',$date)";
// $query_run = mysqli_query($mysqli,$query);

//   if($query_run)
//   {
// 	$_SESSION['status'] = "Data Updated";
// 	header("location:fee_status.php");
//   }

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
<script>
function getSeater(val) {
$.ajax({
type: "POST",
url: "get_seater.php",
data:'roomid='+val,
success: function(data){
//alert(data);
$('#seater').val(data);
}
});

$.ajax({
type: "POST",
url: "get_seater.php",
data:'rid='+val,
success: function(data){
//alert(data);
$('#fpm').val(data);
}
});
}
</script>

</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">FEE STATUS </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fee Info</div>
									<div class="panel-body">
										<form method="post" action="" class="form-horizontal">
											
										


											



<div class="form-group">
<label class="col-sm-2 control-label">USN : </label>
<div class="col-sm-8">
<input type="text" name="usn" id="regno"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">STATUS: </label>
<div class="col-sm-8">
<input type="text" name="status" id="fname"  class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">TRANSACTION-ID : </label>
<div class="col-sm-8">
<input type="text" name="transaction" id="name"  class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">DATE-OF-PAYMENT: </label>
<div class="col-sm-8">
<input type="date" name="date" id="lname"  class="form-control" required="required">
</div>
</div>

<!-- <div class="form-group">
<label class="col-sm-2 control-label">YEAR: </label>
<div class="col-sm-8">
<select name="gender" class="form-control" required="required">
<option value="">Select YEAR</option>
<option value="male">1</option>
<option value="female">2</option>
<option value="others">3</option>
<option value="others">4</option>
</select>
</div>
</div> -->

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Salary : </label>
<div class="col-sm-8">
<input type="text" name="salary" id="contact"  class="form-control" required="required">
</div>
</div> -->


<!-- <div class="form-group">
<label class="col-sm-2 control-label">Email id : </label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control" required="required">
</div>
</div> -->

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Emergency Contact: </label>
<div class="col-sm-8">
<input type="text" name="econtact" id="econtact"  class="form-control" required="required">
</div>
</div> -->

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Guardian  Name : </label>
<div class="col-sm-8">
<input type="text" name="gname" id="gname"  class="form-control" required="required">
</div>
</div> -->

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Guardian  Relation : </label>
<div class="col-sm-8">
<input type="text" name="grelation" id="grelation"  class="form-control" required="required">
</div>
</div> -->

<!-- <div class="form-group">
<label class="col-sm-2 control-label">Guardian Contact no : </label>
<div class="col-sm-8">
<input type="text" name="gcontact" id="gcontact"  class="form-control" required="required">
</div>
</div>	 -->








<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="Register" Value="Register" class="btn btn-primary">
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
<script type="text/javascript">
	$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                $('#paddress').val( $('#address').val() );
                $('#pcity').val( $('#city').val() );
                $('#pstate').val( $('#state').val() );
                $('#ppincode').val( $('#pincode').val() );
            } 
            
        });
    });
</script>
	<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'roomno='+$("#room").val(),
type: "POST",
success:function(data){
$("#room-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>

</html>