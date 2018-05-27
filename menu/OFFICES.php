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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<style>
body{
	background-color:#2056ac;
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


</style>
</head>
<body>
<a href="kiosk-login.php" class="btn btn-info" style="margin-left:95%; position:absolute;"><b>Login</b></a>
<div id="header-wrapper">
  <div id="header" class="container">

    <div id="logo">

          <span class=""><img src="images/carabao.png" alt="logo_top" style="width:500px; height:300px;"></span>
      <h1><a href="#">Offices</a></h1>
    </div>
    <div id="menu">
      <ul>
        <li><a href="index.php" title=""><img src="images/home-icon.png" alt="home" style="width:50px; height:50px;"></a></li>

        <li><a href="OFFICES.php" accesskey="2" title=""><img src="images/office-icons.png" alt="office" style="width:50px; height:50px;"></a></li>

        <li><a href="search.php" accesskey="3" title=""><img src="images/search-icon1.png" alt="searcg" style="width:50px; height:50px;"></a></li>

        
        <li><a href="CONTACT.php" accesskey="4" title=""><img src="images/contact-icon.jpg" alt="contact" style="width:50px; height:50px;"></a></li>

        <li><a href="../home.php" accesskey="5" title=""><img src="images/about-icon.png" alt="about" style="width:50px; height:50px;"></a></li>
        
        
      </ul>
    </div>
  </div>
</div>

<br>
<br>     
            
  <?php
  
  //Change the password to match your configuration
 $conn = mysqli_connect('localhost','root','','information_kiosk') or die ("Can't connect to the database");

    if (!$conn) {
        echo "Can't connect";
    }
  
  
  $sql = "SELECT * FROM tbl_offices";
     $query = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($query);
                if ($rows > 0) {
        while($row =mysqli_fetch_array($query)) {
                            ?> 

                             <div class="container"> 
                  <div class="bs-example2"> 
                     <div class="row form-group">  

                          <div class="col-md-4" style="padding-top:10px;"><h4><b><?php echo $row["office_name"];?></h4></b><b><?php echo $row["office_section"];?></b><br><img src="../Daily_Uploaded_Documents/<?php echo $row['office_image']; ?>" style="width:300px; height:170px;" class="imgreport" onerror="this.style.display='none'"><br><b><a href="VIEW_OFFICE.php?id=<?=$row['id']?>" class="btn btn-info">More</a><b>
                            <a href="employee_office.php?office_name=<?=$row['office_name']?>" class="btn btn-success"?>Employees</a>
                          </div>

                         

                        
                         
                 
                         
                      
                  
                 
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

<?php   
 if(isset($_POST['submit']))  
 {  


      $connect = mysqli_connect("localhost", "root", "", "information_kiosk"); 
$search_office = $_POST['search_office'];



if(!empty($search_office))
{
    
      $query = "SELECT * FROM `tbl_offices` WHERE office_name LIKE '%".$search_office."%' " ;  
      $result = mysqli_query($connect, $query);

      $query2 = "SELECT * FROM `tbl_offices` WHERE office_section LIKE '%".$search_office."%' " ;  
      $result2 = mysqli_query($connect, $query2); 

      $query3 = "SELECT * FROM `tbl_employee` WHERE emp_fname LIKE '%".$search_office."%' " ;  
      $result3 = mysqli_query($connect, $query3);

      $query4 = "SELECT * FROM `tbl_employee` WHERE emp_lname LIKE '%".$search_office."%' " ;  
      $result4 = mysqli_query($connect, $query4); 

      $query5 = "SELECT * FROM `tbl_employee` WHERE emp_position LIKE '%".$search_office."%' " ;  
      $result5 = mysqli_query($connect, $query5);


      if(mysqli_num_rows($result) > 0)  
      {  ?><div class="container">
           <div class="bs-example">  
                <div class="row"> 
                      
                     <div class="col-md-4"><b>Office Name</b></div>
                     <div class="col-md-3"><b>Section</b></div>
                     <div class="col-md-4"><b>Map</b></div>    
                     
                       
                </div>  
              </div>
            </div>
            <?php
           while($row = mysqli_fetch_array($result))  
           {  
                  ?>
                   
                  <div class="container">
                  <div class="bs-example2"> 
                     <div class="row">  
                          
                         <div class="col-md-4"><?php echo $row["office_name"];?></div> 
                         <div class="col-md-3"><?php echo $row["office_section"];?></div>
                         <div class="col-md-4"><img src="../Daily_Uploaded_Documents/<?php echo $row['office_image']; ?>" style="width:300px; height:170px;" class="imgreport" onerror="this.style.display='none'"></div> 
                         
                     </div> 
                   </div>
                 </div>
                   
                <?php

           }  
      }elseif(mysqli_num_rows($result2) > 0)   
      {  
        ?>
          <div class="container">
           <div class="bs-example">  
                <div class="row"> 
                      
                     <div class="col-md-4"><b>Office Name</b></div>
                     <div class="col-md-3"><b>Section</b></div>
                     <div class="col-md-4"><b>Map</b></div>    
                     
                       
                </div>  
              </div>
            </div>
        <?php
         while($row = mysqli_fetch_array($result2))  
           {  
                  ?>
                   
                  <div class="container">
                  <div class="bs-example2"> 
                     <div class="row">  

                          <div class="col-md-4"><?php echo $row["office_name"];?></div> 
                         <div class="col-md-3"><?php echo $row["office_section"];?></div> 
                         <div class="col-md-4"><img src="../Daily_Uploaded_Documents/<?php echo $row['office_image']; ?>" style="width:300px; height:170px;" class="imgreport" onerror="this.style.display='none'"></div> 
                         
                         
                     </div> 
                   </div>
                 </div>
                <?php
           }

         }elseif(mysqli_num_rows($result3) > 0)   
      {  ?>
        <div class="container">
           <div class="bs-example">  
                <div class="row"> 
                      
                     <div class="col-md-3"><b>First Name</b></div>
                     <div class="col-md-3"><b>Last Name</b></div>
                     <div class="col-md-2"><b>Position</b></div>
                     <div class="col-md-3"><b>Picture</b></div>    
                     
                       
                </div>  
              </div>
            </div>
            <?php

         while($row = mysqli_fetch_array($result3))  
           {  
                  ?>

                  
                  <div class="container">
                  <div class="bs-example2"> 
                     <div class="row">  

                          <div class="col-md-3"><?php echo $row["emp_fname"];?></div> 
                         <div class="col-md-3"><?php echo $row["emp_lname"];?></div>
                         <div class="col-md-2"><?php echo $row["emp_position"];?></div> 
                         <div class="col-md-3"><img src="../Daily_Uploaded_Documents/<?php echo $row['emp_image']; ?>" style="width:300px; height:170px;" class="imgreport" onerror="this.style.display='none'"></div> 
                         
                     </div> 
                   </div>
                 </div>
                <?php
           } 
           
      }elseif(mysqli_num_rows($result4) > 0)   
      {  
        ?>
        <div class="container">
           <div class="bs-example">  
                <div class="row"> 
                      
                     <div class="col-md-3"><b>First Name</b></div>
                     <div class="col-md-3"><b>Last Name</b></div>
                     <div class="col-md-2"><b>Position</b></div>
                     <div class="col-md-3"><b>Picture</b></div>    
                     
                       
                </div>  
              </div>
            </div>
            <?php
         while($row = mysqli_fetch_array($result4))  
           {  
                  ?>

                  
                  <div class="container">
                  <div class="bs-example2"> 
                     <div class="row">  

                          <div class="col-md-3"><?php echo $row["emp_fname"];?></div> 
                         <div class="col-md-3"><?php echo $row["emp_lname"];?></div>
                         <div class="col-md-2"><?php echo $row["emp_position"];?></div> 
                         <div class="col-md-3"><img src="../Daily_Uploaded_Documents/<?php echo $row['emp_image']; ?>" style="width:300px; height:170px;" class="imgreport" onerror="this.style.display='none'"></div> 
                         
                     </div> 
                   </div>
                 </div>
                <?php
           } 

         }elseif(mysqli_num_rows($result5) > 0)   
           {  
            ?>
        <div class="container">
           <div class="bs-example">  
                <div class="row"> 
                      
                     <div class="col-md-3"><b>First Name</b></div>
                     <div class="col-md-3"><b>Last Name</b></div>
                     <div class="col-md-2"><b>Position</b></div>
                     <div class="col-md-3"><b>Picture</b></div>    
                     
                       
                </div>  
              </div>
            </div>
            <?php

         while($row = mysqli_fetch_array($result5))  
           {  
                  ?>

                  
                  <div class="container">
                  <div class="bs-example2"> 
                     <div class="row">  

                          <div class="col-md-3"><?php echo $row["emp_fname"];?></div> 
                         <div class="col-md-3"><?php echo $row["emp_lname"];?></div>
                         <div class="col-md-2"><?php echo $row["emp_position"];?></div> 
                         <div class="col-md-3"><img src="../Daily_Uploaded_Documents/<?php echo $row['emp_image']; ?>" style="width:300px; height:170px;" class="imgreport" onerror="this.style.display='none'"></div> 
                         
                     </div> 
                   </div>
                 </div>
                <?php
           } 

         }else  
      {  
            ?>
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           <?php
      }


      } 
  }


      

?>
</div>


</body>
</html>
