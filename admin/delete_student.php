<?php
session_start();
 include('includes/config.php');

 $id = $_GET['id'];

 $query = "delete from student where usn = '$id' ";
 $data = mysqli_query($mysqli,$query);

 if($data)
 {
     echo"<script>alert('DATA DELETED');</script>";

     
     ?>
     
     <meta http-equiv = "refresh" content = "0; url =http://localhost/hostel%20mgmt%20PHP/hostel/admin/manage-student.php" />

     <?php
 }
 else
 {
     echo"<script>alert('FAILED TO DELETE');</script>";
 }

?>