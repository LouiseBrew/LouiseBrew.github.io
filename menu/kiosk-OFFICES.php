<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Office Page</title>

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
                <center><h1 style="position:relative;">Offices</h1></center>
                <p></p>
                 <a href="#menu-toggle" id="menu-toggle"><img src="menu.jpg" class="rounded-circle" style="width:30px; height:30px;"></a>
           
        
   

     
<br>
<br>
<div class="row form-group"> 
                      
                     <div class="col-md-4"> <button data-toggle="collapse" data-target="#ADD" class="btn btn-success" >Insert new Office</button></div>

                     <div class="col-md-4"> <button data-toggle="collapse" data-target="#UPDATE" class="btn btn-primary" >Update existing office</button></div>

                     <div class="col-md-4"> <button data-toggle="collapse" data-target="#DELETE" class="btn btn-danger" >Delete offices</button></div>     
                     
                       
                </div>
            </div>

            <div class="bs-example">

<div id="ADD" class="collapse">
        
<form action="kiosk-OFFICES.php" method="post" enctype="multipart/form-data">
        <div class="row form-group">
            <div class="col-md-2"><label for="textBox" class="col-form-label"><b>Office name</b></label></div>

            <div class="col-md-2"><input type="text" placeholder="Office_name" name="office_name" class="form-control" value=""></div>

            <div class="col-md-2"><label for="textBox" class="col-form-label"><b>Office Section</b></label></div>

            <div class="col-md-2"><input type="text" placeholder="Office Section" name="office_section" class="form-control" value=""></div>

            <div class="col-md-2"><label for="textBox" class="col-form-label"><b>Attach Image</b></label></div>

            <div class="col-md-2"><input type="file" name="file" class=""></div>
        </div>
        <div class="row form-group">
          <div class="col-md-2"><label for="textBox" class="col-form-label"><b>Office Activites</b></label></div>

          <div class="col-md-5"><input type="text" placeholder="Seperate activities by a comma(,)" name="office_activities" class="form-control" value=""></div>

        </div>

        <div class="row form-group">
          <div class="col-md-2"> <input type="submit" name="submit" value="Submit" class="btn btn-success"></div>
        </div>
</form>

<?php 
      if (isset($_POST['submit'])) {
        $target = "../Daily_Uploaded_Documents/".basename($_FILES['file']['name']);
        $office_name = $_POST['office_name'];
        $office_section = $_POST['office_section'];
        $office_activities = $_POST['office_activities'];
        
        
        $file = $_FILES['file']['name'];
        $conn = mysqli_connect('localhost','root','','information_kiosk');
        $sql = "INSERT INTO tbl_offices (office_name, office_section,office_activities, office_image) VALUES ('$office_name', '$office_section','$office_activities', '$file')";
       

        if (mysqli_query($conn,$sql)){
        move_uploaded_file($_FILES['file']['tmp_name'], $target); 
        echo '<script type="text/javascript">';
            echo 'alert("Successfully Inserted");'; 
      echo 'window.location.href = "kiosk-OFFICES.php";';
      echo '</script>';
        }else{
            echo "<script>alert('Failed to insert new Office');</script>";
        }

      }
       ?>
</div>


<div class="bs-example">

    <div id="UPDATE" class="collapse">
    <?php
  
  //Change the password to match your configuration
 $conn = mysqli_connect('localhost','root','','information_kiosk') or die ("Can't connect to the database");

    if (!$conn) {
        echo "Can't connect";
    }
  
  
  $sql = "SELECT * FROM tbl_offices";
     $query = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($query);
    ?>
    <?php
    ?>
<div class="container">
           <div class="bs-example">  
                <div class="row"> 
                      
                     <div class="col-md-3">Name</div>
                     <div class="col-md-3">Office Section</div>

                     <div class="col-md-3">Map</div>
                      <div class="col-md-3">Action</div>   
                     
                       
                </div>  
              </div>
            </div>
          <?php
                if ($rows > 0) {
        while($row =mysqli_fetch_array($query)) {
                            ?> 

                              <div class="container">
                  <div class="bs-example2"> 
                     <div class="row">  

                          <div class="col-md-3"><h2><?php echo $row["office_name"];?></h2></div>
                          <div class="col-md-3"><h3><?php echo $row["office_section"];?></h3></div>  
                          <div class="col-md-3"><img src="../Daily_Uploaded_Documents/<?php echo $row['office_image']; ?>" style="width:200px; height:150px;" class="imgreport" onerror="this.style.display='none'"></div>

                          <div class="col-md-3"><a href="kiosk-UPDATE_OFFICE.php?id=<?=$row['id']?>" class="btn btn-info">Update</a></div>
                          
                         
                         
                     </div> 
                   </div>
                 </div>

                 <?php
                                    
                    }
                } else {
                    echo "0 results";
                }
                
                echo "</table>";
                
                
                            
                
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

            mysqli_close($conn);

  // Close connection
           

    ?>
</div>
</div>

<div class="bs-example">
<div id="DELETE" class="collapse">
    <?php
  
  //Change the password to match your configuration
 $conn = mysqli_connect('localhost','root','','information_kiosk') or die ("Can't connect to the database");

    if (!$conn) {
        echo "Can't connect";
    }
  
  
  $sql = "SELECT * FROM tbl_offices";
     $query = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($query);
    ?>
    <?php
    ?>
<div class="container">
           <div class="bs-example">  
                <div class="row"> 
                      
                     <div class="col-md-3">Name</div>
                     <div class="col-md-3">Office Section</div>

                     <div class="col-md-3">Map</div>
                      <div class="col-md-3">Action</div>   
                     
                       
                </div>  
              </div>
            </div>
          <?php
                if ($rows > 0) {
        while($row =mysqli_fetch_array($query)) {
                            ?> 

                              <div class="container">
                  <div class="bs-example2"> 
                     <div class="row">  

                          <div class="col-md-3"><?php echo $row["office_name"];?></div>
                          <div class="col-md-3"><?php echo $row["office_section"];?></div>  
                          <div class="col-md-3"><img src="../Daily_Uploaded_Documents/<?php echo $row['office_image']; ?>" style="width:200px; height:150px;" class="imgreport" onerror="this.style.display='none'"></div>

                          <div class="col-md-3"><a href="kiosk-DEL_OFFICES.php?id=<?=$row['id']?>" class="btn btn-danger">Delete Office</a></div>
                          
                         
                         
                     </div> 
                   </div>
                 </div>

                 <?php
                                    
                    }
                } else {
                    echo "0 results";
                }
                
                echo "</table>";
                
                
                            
                
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

            mysqli_close($conn);

  // Close connection
           

    ?>
</div>
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
