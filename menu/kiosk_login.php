<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Undeviating 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140322

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
    <a href="kiosk_login.php" style="color:RED; padding-left:1000px;">Login</a>
		<div id="logo">
        	<span class=""><img src="images/carabao.png" alt="logo_top" style="width:500px; height:300px;"></span>
			<h1><a href="#">Login</a></h1>
		</div>

     <?php
    require('db.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        
    //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
        $result = mysqli_query($con,$query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;
            header("Location: kiosk-HOMEPAGE.php"); // Redirect user to index.php
            }else{
                echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='admin-login.php'>Login</a></div>";
                }
    }
?>
<div class="container-fluid">
<br>

<a href="index.php" class="blue"><b>Previous Page</b></a>
  

    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title"></h1>
            <div class="account-wall">
                <img class="profile-img" src="logo.png"
                    alt="">
               <form class="form-signin" action="" method="post" name="login">
               <input type="text" name="username" class="form-control" placeholder="username" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" name="submit " type="submit">
                    Login</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
               
                </form>
                <br>
                
            </div>

           
        </div>
    </div>
</div>


		
	</div>
</div>

</body>
</html>