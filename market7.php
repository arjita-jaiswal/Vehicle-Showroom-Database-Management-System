<?php
  // echo $_POST['str'];
  
  
  // echo $year1;
  // echo $gender;
  

  // echo $name."/".$pass."/".$email."/".$address."/".$phone."/".$gender."/".$income;
  // echo $email." ".$pass;
  $con = mysqli_connect('localhost','root','scarlet2131','maa');
 
 

                  $temp_sql="drop view if exists h"; 
                $temp1="create view h as select p.sid,p.price from parts p,manufacturer mn,vehicle v,model m where p.part_name='brakes' and p.MAN_ID=mn.MAN_ID and mn.VIN=v.VIN and 
v.MID=m.MID and m.brand_name='Ford'";

                  $temp2="select distinct(sid) from h where price=(select min(price) from h) ";
                   $res = $con->query($temp_sql);
                 $res1 = $con->query($temp1);
             $res2 = $con->query($temp2);
            
                echo '<table class="table table-borderless">
                <tr><th>Supplier ID</th>
                
                </tr>';
                  while ($row = $res2->fetch_assoc())
                      {
                        $c=1;
                        $SID=$row['sid'];
                        
                      
                     

                      echo '<tr>
                      <td>'.$SID.'</td></tr>';
                      
                      }
                      echo '</table>';
                      // echo $c;
                      // echo $brand." ".$gender." ".$CID;
                    

                
              
             
             
                

   

  

        
       
?>