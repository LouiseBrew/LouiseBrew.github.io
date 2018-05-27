<?php
include 'db.php';
$office_name = $_GET['office_name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reports Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<style>

.jumbotron{
    padding: 0.5em 0.6em;
     position: relative;
    text-align: center;
    color: black;
    background-color:#2056ac;
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
 


.bs-example  div[class^="col"] {
  
  background: #f5f5f5;
  text-align: center;
  padding:20px;
  margin:5px;
  }

  .bs-example2 div[class^="col"] {
  border: 1px solid black;
  background: #f5f5f5;
  text-align: center;
  margin:10px;
width:350px;
  height:300px;
 
  }

  #imgtab {
position:relative;

  }



</style>

<body>
  
            <div class="jumbotron">
            <div class="container-fluid">
                 <img src="urdBanner.jpg" id="urdBanner" alt="Banner" style="width:100%; height:250px;"> 
                 <a href="OFFICES.php" class="btn btn-success">Previous Page</a>
                 <center><h1 style="position:relative;"><u>Employees</u></h1></center>

</div>

  <?php
  
  //Change the password to match your configuration
 $conn = mysqli_connect('localhost','root','','information_kiosk') or die ("Can't connect to the database");

    if (!$conn) {
        echo "Can't connect";
    }
  
  
  $sql = "SELECT * FROM tbl_employee WHERE emp_office LIKE '%".$office_name."%'";
     $query = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($query);
                if ($rows > 0) {
        while($row =mysqli_fetch_array($query)) {
                            ?> 

                             


                          <div class="container"> 
                    <div class="bs-example2"> 
                    <div class="row form-group">  
                        <div class="col-md-3" style="background:none; border:none;"></div>
                          <div class="col-md-5" style="padding-top:10px;">
                            <h4><b><?php echo $row["emp_lname"];?>,<?php echo $row["emp_fname"];?></b></h4>

                          <b><?php echo $row["emp_position"];?></b>
                             <br>
                          <?php echo $row["emp_office"];?>
                              
                            <br>
                            <img src="../Daily_Uploaded_Documents/<?php echo $row['emp_image']; ?>" style="width:300px; height:170px;" class="imgreport" onerror="this.style.display='none'">
                            </div>
                         <div class="col-md-3" style="background:none; border:none;"></div>

                        
                         
                 
                         
                      
                  
                 
                 <?php
                                    
                    }
                } else {
                    echo "0 results";
                }

            mysqli_close($conn);
  // Close connection 

    ?>

 </div>
 </div>

                
</div>



</body>

</html>
