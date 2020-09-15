
 <?php  
 //department autosearch from exprience.php
 $connect = mysqli_connect("localhost", "root", "", "job_portal");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM department WHERE depart_name LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="result1" style="max-height: 100px; overflow-y: scroll; overflow-x: hidden;">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li class="result1">'.$row["depart_name"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li class="result1">department Not Found</li>';  
      }  
      $output .= '</ul >';  
      echo $output;  
 }  

  //colleage name autosearch from education.php
 if(isset($_POST["query1"]))  
 {  
      $output1 = '';  
      $query1 = "SELECT * FROM colleages WHERE colleage_name LIKE '%".$_POST["query1"]."%'";  
      $result1 = mysqli_query($connect, $query1);  
      $output1 = '<ul class="" style="max-height: 100px; overflow-y: scroll; overflow-x: hidden;">';  
      if(mysqli_num_rows($result1) > 0)  
      {  
           while($row1 = mysqli_fetch_array($result1))  
           {  
                $output1 .= '<li>'.$row1["colleage_name"].'</li>';  
           }  
      }  
      else  
      {  
           $output1 .= '<li>colleages Not Found</li>';  
      }  
      $output1 .= '</ul>';  
      echo $output1;  
 }  



//job autosearch for keywords from index.php

 if(isset($_POST["query2"]))  
 {  
      $output2 = '';  
      $query2 = "SELECT DISTINCT jobp_titlename FROM job_post WHERE  jobp_titlename LIKE '%".$_POST["query2"]."%'";  
      $result2 = mysqli_query($connect, $query2);  
      $output2 = '<ul class="" style="max-height: 100px; overflow-y: scroll; overflow-x: hidden;">';  
      if(mysqli_num_rows($result2) > 0)  
      {  
           while($row2 = mysqli_fetch_array($result2))  
           {  
                $output2 .= '<li>'.$row2["jobp_titlename"].'</li>';  
               
           }  
      }  
      else  
      {  
           $output2 .= '<li>Data Not Found</li>';  
      }  
      $output2 .= '</ul>';  
      echo $output2;  
 }  

 //job autosearch for location from index.php

 if(isset($_POST["query3"]))  
 {  
      $output3 = '';  
      $query3 = "SELECT * FROM job_post WHERE jobp_location LIKE '%".$_POST["query3"]."%'";  
      $result3 = mysqli_query($connect, $query3);  
      $output3 = '<ul class="" style="max-height: 100px; overflow-y: scroll; overflow-x: hidden;">';  
      if(mysqli_num_rows($result3) > 0)  
      {  
           while($row3 = mysqli_fetch_array($result3))  
           {  
                $output3 .= '<li>'.$row3["jobp_location"].'</li>';  
               
           }  
      }  
      else  
      {  
           $output3 .= '<li>Data Not Found</li>';  
      }  
      $output3 .= '</ul>';  
      echo $output3;  
 }  


//Location autosearch for location from jobpost.php

if(isset($_POST["query4"]))  
{  
     $output4 = '';  
     $query4 = "SELECT * FROM city WHERE ctname LIKE '%".$_POST["query4"]."%'";  
     $result4 = mysqli_query($connect, $query4);  
     $output4 = '<div class="" style="max-height: 100px; overflow-y: scroll; overflow-x: hidden;">';  
     if(mysqli_num_rows($result4) > 0)  
     {  
          while($row4 = mysqli_fetch_array($result4))  
          {  
               $output4 .= '<li>'.$row4["ctname"].'</li>';  
              
          }  
     }  
     else  
     {  
          $output4 .= '<li>Data Not Found</li>';  
     }  
     $output4 .= '</div>';  
     echo $output4;  
}  

 

if(isset($_POST["query5"]))  
{  
     $output5 = '';  
     $query5 = "SELECT * FROM skills WHERE skill_name LIKE '%".$_POST["query5"]."%'";  
     $result5 = mysqli_query($connect, $query5);  
     $output5 = '<div class="" style="max-height: 100px; overflow-y: scroll; overflow-x: hidden;">';  
     if(mysqli_num_rows($result5) > 0)  
     {  
          while($row5 = mysqli_fetch_array($result5))  
          {  
               $output5 .= '<li>'.$row5["skill_name"].'</li>';  
              
          }  
     }  
     else  
     {  
        
     }  
     $output5 .= '</div>';  
     echo $output5;  
}  

 

 ?> 