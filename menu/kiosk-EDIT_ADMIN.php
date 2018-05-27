<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<style>
.header--banner {
    background-image: url(pnp.jpg);
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
    background-color: #2ECC71;
    color: #ffffff;
  }
  a.green:hover{
    text-decoration: none;
    background-color: #145A32;
    color: #ffffff;
    transition: 0.7s;
  }

  .red{
    text-decoration: none;
    font-family: Modern;
    font-size: 18px;
    border-radius: 5px;
    padding: 5px 8px;
    background-color: #E74C3C;
    color: #ffffff;
  }
  a.red:hover{
    text-decoration: none;
    background-color: #641E16;
    color: #ffffff;
    transition: 0.7s;
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
        <div class="jumbotron">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <img src="urdBanner.jpg" id="urdBanner" alt="Banner" style="width:100%; height:250px;"> 
                <center><h1 style="position:relative;">Update username and password of Admin</h1></center>
               
                 <a href="#menu-toggle" id="menu-toggle"><img src="menu.jpg" class="rounded-circle" style="width:30px; height:30px;"></a>
       <div class="bs-example">
  <!-- Bootstrap Grid -->
  <form method="post" action="kiosk-EDIT_ADMIN.php">
    
  <div class="row form-group">
    <div class="col-md-2"><label for="textBox" class="col-form-label"><b>Username</b></label></div>
    <div class="col-md-2"><input type="text" placeholder="Username" name="username" class="form-control" value=""></div>
    </div>

    <div class="row form-group">
    <div class="col-md-2"><label for="textBox" class="col-form-label"><b>Password</b></label></div>
    <div class="col-md-2"><input type="password" placeholder="Password" name="password" class="form-control" value=""></div>
    </div>

     <div class="row form-group">
    <div class="col-md-12">
      <input type="submit" class="btn btn-danger" name="btnUpdate" value="Update Account">
    </div>
  </div>

    </form>
    </div>

            </div>
        </div>
    </div>

    <?php 
        if (isset($_POST['btnUpdate'])) {

            $conn = mysqli_connect('localhost','root','','information_kiosk') or 
die("Can't connect to the database");

if (!$conn) {
  echo "Can't connect";

}
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                $sqlUpdate = "UPDATE users SET username = '$username', password = '$password'";

                

                if(!mysqli_query($conn,$sqlUpdate)){
                    echo "Could not update account";
                }else{
                header("location:kiosk-login.php");
            }
        }
        
        ?>
</div>
    </div>

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
