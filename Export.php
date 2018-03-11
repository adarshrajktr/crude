<?php  
//export.php

if(isset($_POST["export"]))  
{
 $connect = mysqli_connect("LOCALHOST", "adarshcs615", "Aadhi123", "adarshcs615"); 
 header('Content-Type: text/csv; charset=utf-8');  
   header('Content-Disposition: attachment; filename=data.csv'); 
  $output = fopen("php://output", "w");  
  fputcsv($output, array('Sr.No.', 'Name', 'Address', 'Salary')); 
 $query = "SELECT * FROM employees"; 
  $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output); 
}
 
      
      
     
      
 
        
       
  
 



?> 











 
