<?php
  // echo $_POST['str'];
  
  
  // echo $year1;
  // echo $gender;
  

  // echo $name."/".$pass."/".$email."/".$address."/".$phone."/".$gender."/".$income;
  // echo $email." ".$pass;
  $con = mysqli_connect('localhost','root','scarlet2131','maa');
 
 

                  $temp_sql="drop view if exists e1"; 
                $temp1="create view e1 as (select MONTH(sale_date) as month,count(MONTH(sale_date)) as count_month from sales s,vehicle v,model m where s.VIN=v.VIN and v.MID=m.MID and m.body_type='Hatchback' group by (month))";

                  $temp2="select month,count_month from e1 order by(count_month) desc ";

                   $res = $con->query($temp_sql);
                 $res1 = $con->query($temp1);
             $res2 = $con->query($temp2);
            
                echo '<table class="table table-borderless">
                <tr><th>MONTH</th>
                
                <th>SELL COUNT</th></tr>';
                  while ($row = $res2->fetch_assoc())
                      {
                        $c=1;
                        $month=$row['month'];
                        $count_month=$row['count_month'];
                      
                     

                      echo '<tr>
                      <td>'.$month.'</td><td>'.$count_month.'</td></tr>';
                      
                      }
                      echo '</table>';
                      // echo $c;
                      // echo $brand." ".$gender." ".$CID;
                    

                
              
             
             
                

   

  

        
       
?>