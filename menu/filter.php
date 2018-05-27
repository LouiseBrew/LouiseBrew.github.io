<?php  
 //filter.php  .$_POST["search_office"].
 if(isset($_POST["search_office"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "information_kiosk");  
      $output = '';  
      
      $query = "SELECT * FROM `tbl_offices` WHERE office_name LIKE '%".$_POST["search_office"]."%' " ;  
      $result = mysqli_query($connect, $query);

      $query2 = "SELECT * FROM `tbl_offices` WHERE office_section LIKE '%".$_POST["search_office"]."%' " ;  

      $result2 = mysqli_query($connect, $query2);
$output .= ' 
        <div class="container">
           <div class="bs-example">  
                <div class="row"> 
                      
                     <div class="col-md-2">Office Name</div>
                     <div class="col-md-2">Section</div>  
                     
                       
                </div>  
              </div>
            </div>
';  
    if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           { 
            $output .= ' 
              <div class="container">
                  <div class="bs-example2"> 
                     <div class="row">  
                          
                         <div class="col-md-2"><?php echo $row["office_name"];?></div> 
                         <div class="col-md-2"><?php echo $row["office_section"];?></div>
                         
                     </div> 
                   </div>
                 </div>
            '; 

}

}elseif(mysqli_num_rows($result2) > 0)   
      {  
         while($row = mysqli_fetch_array($result2))  
           {
            $output .= ' 
             <div class="container">
                  <div class="bs-example2"> 
                     <div class="row">  

                          <div class="col-md-2"><?php echo $row["office_name"];?></div> 
                         <div class="col-md-2"><?php echo $row["office_section"];?></div> 
                         
                         
                     </div> 
                   </div>
                 </div>
            '; 


            }
          }else  
      {  
           $output .= '  
                <div class="row">  
                     <div class="col-md-12">No Order Found</div>  
                </div>  
           ';  
      }
      
        
      echo $output;  
}  
 ?>