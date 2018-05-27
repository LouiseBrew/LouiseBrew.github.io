<?php  
 $connect = mysqli_connect("localhost", "root", "", "police_website");  
 $query = "SELECT * FROM submit_report ORDER BY id ";  
 $result = mysqli_query($connect, $query);  
 ?>  
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Activities</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

  

</head>

<style>
.header--banner {
    background-image: url(slide2.jpg);
    background-size:100% 100%;
    background-repeat: no-repeat;

}
.header--banner {

height: 45.5rem;

}

.jumbotron{
    padding: 0.5em 0.6em;
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
                    <a href="kiosk-ACTIVITIES.php">Activites</a>
                </li>
                <li>
                    <a href="kiosk-EDIT_ADMIN.php"> Change Username & Password</a>
                </li>
                <li>
                    <a href="kiosk-login.php">Log Out</a>
                </li>
                
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="jumbotron">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <img src="urdBanner.jpg" id="urdBanner" alt="Banner" style="width:100%; height:250px;"> 
                <center><h1 style="position:relative;">Activites</h1>
                
                 <a href="#menu-toggle" id="menu-toggle"><img src="menu.jpg" class="rounded-circle" style="width:30px; height:30px;"></a></center>

                 <br /><br />  

       








      
            
            </div>
        </div>
    </div>
        <!-- /#page-content-wrapper -->

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