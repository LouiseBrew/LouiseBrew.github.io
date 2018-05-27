<?php
	include 'db.php';
	$id = $_GET['id'];
	$sqlDelete = "DELETE FROM tbl_employee WHERE id='$id'";


if (mysqli_query($con,$sqlDelete)){
        echo '<script type="text/javascript">';
            echo 'alert("Successfully Deleted");'; 
      echo 'window.location.href = "kiosk-EMPLOYEES.php";';
      echo '</script>';
        }else{
            echo "<script>alert('Failed to Delete');</script>";
        }


	
	mysqli_close($con);
?>