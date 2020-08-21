<?php
  // echo $_POST['str'];
  
  
  // echo $year1;
  // echo $gender;
echo('hi');
  

  // echo $name."/".$pass."/".$email."/".$address."/".$phone."/".$gender."/".$income;
  // echo $email." ".$pass;
  $con = mysqli_connect('localhost','root','scarlet2131','maa');
 
 

                  $temp_sql="drop view if exists f"; 
                $temp1="create view f as select DID,avg(DATEDIFF(CURDATE(),date)/365) as date_diff from inventory group by DID";
                  $temp2="select DID from f where date_diff=(select max(date_diff) from f)";

                  

                   $res = $con->query($temp_sql);
                 $res1 = $con->query($temp1);
             $res2 = $con->query($temp2);
            
                echo '<table class="table table-borderless">
                <tr><th>DID</th></tr>';
                  while ($row = $res2->fetch_assoc())
                      {
                        
                        $DID=$row['DID'];
                      
                      
                      }
                      
                      // echo $c;

                      echo '<tr><td>'.$DID.'</td></tr></table>';
                    

                
              
             
             
                

   

  

        
       
?>