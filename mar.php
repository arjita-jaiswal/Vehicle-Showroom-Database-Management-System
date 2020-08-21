<?php
  // echo $_POST['str'];
  

  // echo $name."/".$pass."/".$email."/".$address."/".$phone."/".$gender."/".$income;
  // echo $email." ".$pass;
  $con = mysqli_connect('localhost','root','scarlet2131','maa');
 
 

                  $temp_sql="drop view if exists g"; 
                $temp1="create view g as select DID,count(s.DID) as no_of_brands from sales s ,vehicle v,model m where s.VIN=v.VIN and v.MID=m.MID group by (DID)";
                  $temp2="select DID from g where no_of_brands=(select max(no_of_brands) from g)";

                  

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