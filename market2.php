<?php
  // echo $_POST['str'];
  
  
  // echo $year1;
  // echo $gender;
  

  // echo $name."/".$pass."/".$email."/".$address."/".$phone."/".$gender."/".$income;
  // echo $email." ".$pass;
  $con = mysqli_connect('localhost','root','scarlet2131','maa');
 
 

  
                $temp_sql="select m.brand_name as br,sum(s.price) as pr from sales s,vehicle v,model m where s.VIN=v.VIN and v.MID=m.MID and DATEDIFF(CURDATE(),sale_date)/365<=1 group by m.brand_name order by sum(s.price) desc";


                
             $res = $con->query($temp_sql);
            
                echo '<table class="table table-borderless">
                <tr><th>BRAND</th>
                
                <th>TOTAL SELL</th></tr>';
                  while ($row = $res->fetch_assoc())
                      {
                        $c=1;
                        $brand=$row['br'];
                        $price=$row['pr'];
                      
                     

                      echo '<tr>
                      <td>'.$brand.'</td><td>'.$price.'</td></tr>';
                      
                      }
                      echo '</table>';
                      // echo $c;
                      // echo $brand." ".$gender." ".$CID;
                    

                
              
             
             
                

   

  

        
       
?>