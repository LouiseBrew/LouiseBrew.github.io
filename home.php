<!--Template Name: purrkatty
File Name: home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.png"/>
        <title>Information Kiosk</title>

        <!-- Custom styles for this template -->
        <link href="css/bootstrap.min.css" rel="stylesheet">    
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="fonts/website-font/stylesheet.css" rel="stylesheet" type="text/css" />
        

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/modernizr.custom.97074.js"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="js/counterup.min.js" type="text/javascript"></script>
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </head>
    <body>

        <!-- Sidebar with image -->
        <nav class="tv-sidebar tv-hide-medium tv-hide-small" style="width: 35%; float: left;">
            
            	<div class="story_image wow slideInLeft" data-wow-duration="2s">
				<img class="bgimg" src="images/profile_girl2.png">
				<img class="bgimg" src="images/profile_girl3.jpg">
				<img class="bgimg" src="images/allanis.jpg">
				<img class="bgimg" src="images/char.jpg">
            </div>

            <script>
            	var myIndex = 0,
    container = document.getElementsByClassName('story_image')[0];

carousel();

function carousel() {
  var i,
      el,
      x = document.getElementsByClassName("bgimg");
  for (i = 0; i < x.length; i++) {
    x[i].style.opacity = "0";
  }
  myIndex++;
  if (myIndex > x.length) {
    myIndex = 1
  }
  el = x[myIndex - 1];
  container.style.height = el.height + 'px';
  setTimeout(function() {
    el.style.opacity = "1";
    setTimeout(carousel, 5000);
  },200);
}
            </script>
        </nav>

        <!-- Hidden Sidebar (reveals when clicked on menu icon)-->
        

        <!-- Page Content -->
        <div class="tv-main" style="width: 65%; float: right;">
            <!-- Menu icon to open sidebar -->
            <span class="tv-button tv-top tv-icon-bar" style="width:auto;right:0;" onclick="openNav()">
                 <a href="menu/index.php">MENU</a> 
            </span>

            <!-- Header -->
            <header class="tv-center" id="home">
                <div class="tv-girl-name">
                    <div class="tv-profile-pic tv-display-nn">
                        <img src="images/profile_pic.jpg" alt="profile-pic">
                    </div>
                    <h1><b>Info-Kiosk</b></h1>
                    <p>For Urdaneta City Municipality</p>
                    <h4>Our mission is to serve you better.</h4>
                </div>
            </header>

            <section id="about" class="tv-paddingT-100">
                <div class="tv-container">
                    <div class="tv-row">
                        <div class="tv-about-content">
                            <div class="tv-block-title">
                                <h2>About the creators</h2>
                                <hr>
                            </div>
                            <p>This Information kiosk was developed for Urdaneta City Municipality in conjunction for the requirements of 3rd year level Students of Urdaneta City Univiersity</p>
                            <p>This Info-Kiosk will help better serve peoples needs in acquiring information faster and hassle free</p>
                            
                            
                            
                        </div>
                    </div>
                   
        <a id="back-to-top" class="scrollTop tv-back-to-top" href="javascript:void(0);" style="display: none;">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </a>
        <script type="text/javascript" src="js/hoverdir.js"></script>
        <script type="text/javascript">
                $(function () {
                    $(' #da-thumbs > li ').each(function () {
                        $(this).hoverdir();
                    });

                });
        </script>
        <script>
            // Open and close sidebar
            function openNav() {
                document.getElementById("mySidebar").style.width = "64%";
                document.getElementById("mySidebar").style.display = "block";
            }

            function closeNav() {
                document.getElementById("mySidebar").style.display = "none";
            }
        </script>
        <script>
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>

    </body>
</html>
