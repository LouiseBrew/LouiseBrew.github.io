<?php
	include 'db.php';
	$id = $_GET['id'];
	$sqlDelete = "DELETE FROM tbl_offices WHERE id='$id'";
	mysqli_query($con,$sqlDelete);

if (mysqli_query($con,$sqlDelete)){
        
            echo '<script type="text/javascript">';
            echo 'alert("Successfully Deleted");'; 
      echo 'window.location.href = "kiosk-OFFICES.php";';
      echo '</script>';
        }else{
            echo "<script>alert('Failed to Delete');</script>";
        }

	header("location:kiosk-OFFICES.php");
	mysqli_close($con);
?>