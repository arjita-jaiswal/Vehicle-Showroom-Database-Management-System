<?php
  // echo $_POST['str'];
  
  
  // echo $year1;
  // echo $gender;'

echo('hi');
  // echo $name."/".$pass."/".$email."/".$address."/".$phone."/".$gender."/".$income;
  // echo $email." ".$pass;
  $con = mysqli_connect('localhost','root','scarlet2131','maa');
  $temp_sql="";
 $temp1="";
 $temp2="";
 


                  $temp_sql="drop view if exists g"; 
                $temp1="create view g as select DID,count(s.DID) as no_of_brands from sales s ,vehicle v,model m where s.VIN=v.VIN and v.MID=m.MID group by (DID)";

                  $temp2="select DID as d from g where count_DID=(select max(count_DID) from g) ";
                   $res = $con->query($temp_sql);
                 $res1 = $con->query($temp1);
             $res2 = $con->query($temp2);
            echo('hi');
                echo '<table class="table table-borderless">
                <tr><th>DID</th>
                </tr>';
                  while ($row = $res2->fetch_assoc())
                      {
                        
                        $did=$row['d'];
                      
                      
                     

                      echo '<tr>
                      <td>'.$did.'</td></tr>';
                      
                      }
                      echo '</table>';
                      // echo $c;
                      // echo $brand." ".$gender." ".$CID;
                    

                
              
             
             
                

   

  

        
       
?>