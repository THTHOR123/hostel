<?php
session_start();
 include('includes/config.php');

 $id = $_GET['id'];

 $query = "delete from employee where id = '$id' ";
 $data = mysqli_query($mysqli,$query);

 if($data)
 {
     echo"<script>alert('DATA DELETED');</script>";

     
     ?>
     <meta http-equiv = "refresh" content = "0; url =http://localhost/hostel%20mgmt%20PHP/hostel/admin/manage-employee.php" />


     <?php
 }
 else
 {
     echo"<script>alert('FAILED TO DELETE');</script>";
 }

?>