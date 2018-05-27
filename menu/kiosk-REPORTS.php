<?php  
 $connect = mysqli_connect("localhost", "root", "", "information_kiosk");  
 $query = "SELECT * FROM report_gen ORDER BY id ";  
 $result = mysqli_query($connect, $query);  
 ?>  
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Print Reports</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  

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
                <center><h1 style="position:relative;">Print Reports</h1>
                
                 <a href="#menu-toggle" id="menu-toggle"><img src="menu.jpg" class="rounded-circle" style="width:30px; height:30px;"></a></center>

                 <br /><br />  

                       

                       <input id="btn" type="button" class="btn btn-info" value="Print Reports" onclick="unhide(); printData();"/>
<div class="container">
  <div class="row form-group">

           <form method="post" action="kiosk-REPORTS.php"> 
                 
                 <div class="col-md-3"><label for="textBox" class="col-form-label"><b>Year</b></label><input type="number" placeholder="Year" name="year" class="form-control" value=""></div>
                 
                  <div class="col-md-3"><label for="textBox" class="col-form-label"><b>Month</b></label><input type="number" placeholder="Month" name="month" class="form-control" value=""></div>
                 
                 <div class="col-md-3"><label for="textBox" class="col-form-label"><b>Date</b></label><input type="number" placeholder="Day" name="day" class="form-control" value=""></div>
                 <br>

                 <div class="col-md-3"><input type="submit" name="submit" value="Search" class="btn btn-info"></div>

                </form>
  </div> 
                </div>                
                <br />  
                  
</form>

<div id="printTable"
<center><h3></h3></center>

<?php  
 //filter.php  
 if(isset($_POST['submit']))  
 {  


      $connect = mysqli_connect("localhost", "root", "", "information_kiosk"); 
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];


if(!empty($year) && empty($month) && empty($day))
{
   $output = '';  
      $query = "SELECT * FROM `report_gen` WHERE YEAR(date_searched) = '$year'";  
      $result = mysqli_query($connect, $query);  
      ?>  


           <table>
          
<label id="headstyle" style="visibility:hidden;"><center><h1>Urdaneta City Report</h1></center></label>
<br>

                <tr>  
                     <th width="50%">ID</th>  
                     <th width="50%">Searched Item</th>
                     <th width="50%">Search Date</th>  
                     
                </tr>  
      <?php
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                  ?>
                     <tr>  
                          <td><?php echo $row["id"]; ?></td>  
                          <td><?php echo $row["searched_item"]; ?></td>  
                         <td><?php echo $row["date_searched"]; ?></td>  
                         
                     </tr>  
                <?php
           }  
      }  
      else  
      {  
            ?>
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           <?php
      }  
      ?>
      </table>
        <?php
 }elseif (!empty($year) && !empty($month) && empty($day)){
    $output = '';  
      $query = "SELECT * FROM `report_gen` WHERE YEAR(date_searched) = '$year' AND MONTH(date_searched) = '$month'";  
      $result = mysqli_query($connect, $query);  
      ?>  
           <table id="printTable">  
                  <h1><label id="headstyle" style="visibility:hidden;"><center>Urdaneta City Report</center></label></h1>
<br>
                     <tr>  
                     <th width="50%">ID</th>  
                     <th width="50%">Searched Item</th>
                     <th width="50%">Search Date</th>  
                     
                </tr>   
                  
      <?php
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                  ?>
                     <tr>  
                           <td><?php echo $row["id"]; ?></td>  
                          <td><?php echo $row["searched_item"]; ?></td>  
                         <td><?php echo $row["date_searched"]; ?></td>  
                     </tr>  
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
      ?>
      </table>
      <?php
 }elseif (!empty($year) && !empty($month) && !empty($day)){
    $output = '';  
      $query = "SELECT * FROM `report_gen` WHERE YEAR(date_searched) = '$year' AND MONTH(date_searched) = '$month' AND DAY(date_searched) = '$day'";  
      $result = mysqli_query($connect, $query);  
      ?>  
           <table id="printTable"> 
            <label id="headstyle" style="visibility:hidden;"><center>Urdaneta City Report</center></label>
<br>
                <tr>  
                     <th width="50%">ID</th>  
                     <th width="50%">Searched Item</th>
                     <th width="50%">Search Date</th> 
                </tr>  
      <?php
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                  ?>
                     <tr>  
                          <td><?php echo $row["id"]; ?></td>  
                          <td><?php echo $row["searched_item"]; ?></td>  
                         <td><?php echo $row["date_searched"]; ?></td>  
                     </tr>  
                <?php
           }  
      }  
      else  
      {  
            ?>
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           <?php
      }  
    ?>
          </table>
    <?php

}
}

?>

</div>


            
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
<script>
    function printData()
{
   var divToPrint=document.getElementById("printTable");
  
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

function unhide()
{
  var div = document.getElementById('headstyle');

// hide
div.style.visibility = 'visible';

}

$('button').on('click',function(){
printData();unhide();})
</script>
</body>
</html>