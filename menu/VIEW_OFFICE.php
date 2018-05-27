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

    <title>Reports Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<style>
body {

	text-align: center;
  
    background-color:#2056ac;
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








</style>

<body>
  
           
            <div class="container-fluid">
                 <img src="urdBanner.jpg" id="urdBanner" alt="Banner" style="width:100%; height:250px;"> 
                 <a href="OFFICES.php" class="btn btn-success" style="margin-right:1500px;">Previous Page</a>

                  <form method="POST" action="view_employee.php">
     <?php
            $sqlRetrieve = "SELECT * FROM tbl_offices WHERE id = '$id'";
            $query = mysqli_query($con,$sqlRetrieve);
            while($row = mysqli_fetch_array($query)){
                ?>
               
               
                <a href="employee_office.php?office_name=<?=$row['office_name']?>" class="btn btn-info" style="margin-left:1190px;">View employee</a>
                <?php
            }
                ?>
 </form>
 <form method="POST">
        <?php
            $sqlRetrieve = "SELECT * FROM tbl_offices WHERE id = '$id'";
            $query = mysqli_query($con,$sqlRetrieve);
            while($row = mysqli_fetch_array($query)){
                ?>
                <div class="jumbotron">
                <center><h1 style="position:relative;"><?=$row['office_name']?></h1></center>
                <h3><?=$row['office_section']?></h3>

<h4><u>Activites</u></h4>
<h5><?=$row['office_activities']?></h5>
<br>
                <img src="../Daily_Uploaded_Documents/<?php echo $row['office_image']; ?>" style="width:700px; height:400px;" class="imgreport" onerror="this.style.display='none'">
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
        
    <?php
        }
        ?>

     </form>
</div>



</body>

</html>
