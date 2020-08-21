<?php
  // echo $_POST['str'];
  $s = explode(" ",$_POST['str']);

  $year1=$s[0];
  $gender=$s[1];
  // echo $year1;
  // echo $gender;
  

  // echo $name."/".$pass."/".$email."/".$address."/".$phone."/".$gender."/".$income;
  // echo $email." ".$pass;
  $con = mysqli_connect('localhost','root','scarlet2131','maa');
 
 
// echo $CID;
   $temp_sql="";
  
                if($year1!='not' && $gender=='not')
                {
                    // echo "only color";
                    $temp_sql="drop view if exists a"; 
                    $temp2="create view  a as (select s.VIN,s.CID,c.gender,v.MID,m.brand_name from sales s,vehicle v,customer c,model m,(select DATE_ADD(CURDATE(),interval -$year1 year) as n_date) as t where s.sale_date>t.n_date and  s.VIN=v.VIN and v.MID=m.MID and s.CID=c.CID  order by YEAR(sale_date),Month(sale_date),week(sale_date)) "; 
                    $temp3="select VIN,m.model as mo,a.brand_name as br from a,customer c,model m where a.CID=c.CID and m.MID=a.MID  order by c.annual_income ";
                }
                else
                {
                  $temp_sql="drop view if exists a";
                   $temp2="create view  a as (select s.VIN,s.CID,c.gender,v.MID,m.brand_name from sales s,vehicle v,customer c,model m,(select DATE_ADD(CURDATE(),interval -3 year) as n_date) as t where s.sale_date>t.n_date and  s.VIN=v.VIN and v.MID=m.MID and s.CID=c.CID  order by YEAR(sale_date),Month(sale_date),week(sale_date)) ; ";
                   
                   $temp3="select VIN,m.model as mo,a.brand_name as br from a,customer c,model m where a.CID=c.CID and  c.gender='$gender' and a.MID=m.MID order by c.annual_income  ";
                }


                
             if($con->query($temp_sql))
             {
              // echo 'hi';
                $res1 = $con->query($temp2);
                $res2 = $con->query($temp3);
                echo '<table class="table table-borderless">
                <tr><th>VIN</th>
                <th>MODEL</th>
                <th>Brand_Name</th></tr>';
                  while ($row = $res2->fetch_assoc())
                      {
                        $c=1;
                        $VIN=$row['VIN'];
                        $model=$row['mo'];
                      $brand=$row['br'];
                     

                      echo '<tr>
                      <td>'.$VIN."</td><td> ".$model."</td><td> ".$brand.'</td></tr>';
                      
                      }
                      echo '</table>';
                      // echo $c;
                      // echo $brand." ".$gender." ".$CID;
                    

                
              
             }
             
                

   

  

        
       
?>