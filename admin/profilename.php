<?php
include 'includes/connections.php';

                    $company_rpid = $_POST['company_rpid'];
                    $sql =$conn->query("SELECT * FROM company_profile  WHERE `company_rpid` = '$company_rpid' "); 
                     $row_cnt = $sql->num_rows; 
                   if ($row_cnt > 0) {
                     	echo "Already Select Username So Select Another Username";
                      }else{
                      	echo "";
                      }
                  
           

?>