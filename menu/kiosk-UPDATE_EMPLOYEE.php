<?php
include 'db.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Employee</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<style>
.header--banner {
    background-image: url(cb.jpg);
    background-size:100% 100%;
    background-repeat: no-repeat;

}
.header--banner {

height: 45.5rem;

}

.jumbotron{
    padding: 0.5em 0.6em;
}

.header--banner {
    background-image: url(magic.jpg);
    background-size:100% 100%;
    background-repeat: no-repeat;

}
.header--banner {

height: 45.5rem;

}

.jumbotron{
    padding: 0.5em 0.6em;
     position: relative;
    text-align: center;
    color: black;
}
.green{
    text-decoration: none;
    font-family: Modern;
    font-size: 18px;
    border-radius: 5px;
    padding: 5px 8px;
    background-color:  #27ae60;
    color: #ffffff;
  }
  a.green:hover{
    text-decoration: none;
    background-color:  #145a32;
    color: #ffffff;
    transition: 0.7s;
  }

  .bs-example2{
  border: 3px solid black;
  background: #f5f5f5;
  text-align: center;
  padding:20px;
  margin:5px;
  height:200px;
  }






</style>

<body>
    <header class="header--banner">

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
             <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="kiosk-HOMEPAGE.php">
                        HOME
                    </a>
                </li>
                <li>
                    <a href="kiosk-OFFICES.php">Offices</a>
                </li>
                <li>
                    <a href="kiosk-EMPLOYEES.php">Employees</a>
                </li>
               
                <li>
                    <a href="kiosk-EDIT_ADMIN.php"> Change Username & Password</a>
                </li>
                <li>
                    <a href="kiosk-REPORTS.php">Reports</a>
                </li>
                <li>
                    <a href="kiosk-login.php">Log Out</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        
        <div id="page-content-wrapper">
            <div class="jumbotron">
            <div class="container-fluid">
                 <img src="urdBanner.jpg" id="urdBanner" alt="Banner" style="width:100%; height:250px;"> 
                <center><h1 style="position:relative;">Update Employee</h1></center>
                <p></p>
                 <a href="#menu-toggle" id="menu-toggle"><img src="menu.jpg" class="rounded-circle" style="width:30px; height:30px;"></a>
           <a href="kiosk-EMPLOYEES.php" class="btn btn-success">Back</a>

        <div class="bs-example">
   <form method="POST" onsubmit="return confirm('Do you really want to submit the form?');" enctype="multipart/form-data">
    <?php
      $sqlRetrieve = "SELECT * FROM tbl_employee WHERE id = '$id'";
      $query = mysqli_query($con,$sqlRetrieve);
      while($row = mysqli_fetch_array($query)){
        ?>

        <div class="row form-group">
        <div class="col-md-2"><label for="text" class="col-form-label"><b>FirstName</b></label></div>

        <div class="col-md-2"><input type="text" class="form-control" name="emp_fname" value="<?=$row['emp_fname']?>"></div>
      

        <div class="col-md-2"><label for="text" class="col-form-label"><b>LastName</b></label></div>

          <div class="col-md-2"><input type="text" class="form-control" name="emp_lname" value="<?=$row['emp_lname']?>"></div>
        </div>
       
        <div class="row form-group">
        <div class="col-md-2"><label for="text" class="col-form-label"><b>Position</b></label></div>

         <div class="col-md-2"> <input type="text" class="form-control" name="emp_position" value="<?=$row['emp_position']?>"></div>

       </div>

        <div class="row form-group">
        
        <div class="col-md-2"><label for="text" class="col-form-label"><b>Employee Office</b></label></div>


         <div class="col-md-2"><input type="text" class="form-control" name="emp_office" value="<?=$row['emp_office']?>"></div>
       </div>
        

      <div class="row form-group">
        <div class="col-md-2"><label for="text" class="col-form-label"><b>Employee Image</b></label>
      </div>


        <div class="col-md-8"><img src="../Daily_Uploaded_Documents/<?php echo $row['emp_image']; ?>" style="width:600px; height:400px; border:1px solid black;" class="imgreport" onerror="this.style.display='none'"></div>
        </div>

        <script>               
$(document).ready(function () {
        var small={width: "700px",height: "400px"};
        var large={width: "1000px",height: "1000px", };

        var count=1; 
        $(".imgreport").css(small).on('click',function () { 
            $(this).animate((count==1)?large:small);
            count = 1-count;
        });
    });
</script>
<br>
<br>
        <label>New image</label><input type="file" name="file" class="">
        <br>
        
                <input type="submit" class="btn btn-info" name="btnUpdate" value="Update Record">
                </form>
      <?php
    }

        if (isset($_POST['btnUpdate'])) {
          $target = "../Daily_Uploaded_Documents/".basename($_FILES['file']['name']);
                $emp_fname = $_POST['emp_fname'];
                $emp_lname = $_POST['emp_lname'];
                 $emp_office = $_POST['emp_office'];
                $emp_position = $_POST['emp_position'];
                $file = $_FILES['file']['name'];
                

               $sqlUpdate = "UPDATE tbl_employee SET emp_fname = '$emp_fname', emp_lname = '$emp_lname', emp_position = '$emp_position', emp_office = '$emp_office', emp_image = '$file' WHERE id='$id'";

               $sqlUpdate2 = "UPDATE tbl_employee SET emp_fname = '$emp_fname', emp_lname = '$emp_lname', emp_position = '$emp_position', emp_office = '$emp_office' WHERE id='$id'";


 If(!empty($file)){

               if (mysqli_query($con,$sqlUpdate)){
        move_uploaded_file($_FILES['file']['tmp_name'], $target); 
          echo '<script type="text/javascript">';
            echo 'alert("Successfully Updated");'; 
      echo 'window.location.href = "kiosk-EMPLOYEES.php";';
      echo '</script>';
        }else{
            echo "<script>alert('Failed to update');</script>";
        }

}else{

if (mysqli_query($con,$sqlUpdate2)){
       
           echo '<script type="text/javascript">';
            echo 'alert("Successfully Updated");'; 
      echo 'window.location.href = "kiosk-EMPLOYEES.php";';
      echo '</script>';
        }else{
            echo "<script>alert('Failed to update');</script>";
        }

}
                
                
        }
        mysqli_close($con);
    ?>
    
    
  </div>


 
       
        <!-- /#page-content-wrapper -->

   </div>
</div>
</div>
    </header>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
