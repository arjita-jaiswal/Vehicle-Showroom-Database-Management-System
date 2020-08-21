<?php  
        
        $con = mysqli_connect('localhost','root','scarlet2131','maa');

        $filter =  $_POST['str'];
        $s = explode(" ",$filter);

        $color = $s[0];
        $body = $s[1];
        $engine = $s[2];
        $trans = $s[3];
        $brand = $s[4];
        $model = $s[5];
        
        
         // echo $color." ".$body." ".$engine." ".$trans." ".$brand." ".$model;
       // echo $temp_sql;




        $sql = "select * from vehicle";
        $res = $con->query($sql);
       
          $c=1;
          echo '<div id="filter_op"><table id="list_table" class="table table-borderless" rules="rows" style="position:absolute;left:5%;width:50%;" >
              <tr>
                <th>CARS</th>
                <th>INFO</th>
                <th></th>
                
              </tr>';
            $c=0;
          while($row = $res->fetch_assoc())
          {
            
            $VIN= $row['VIN'];
            $image = $row['image'];

            $temp_sql="";
                if($color!='not' && $body=='not' && $engine=='not' && $trans=='not')
                {
                    // echo "only color";
                    $temp_sql="select o.engine,o.transmission,o.color,m.body_type,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN  and m.brand_name='$brand' and m.model='$model' and o.color='$color' ";
                }
               else if($color=='not' && $body!='not' && $engine=='not' && $trans=='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type ,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and m.body_type='$body' ";
               }
               else if($color=='not' && $body=='not' && $engine!='not' && $trans=='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type ,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and o.engine='$engine' ";
               }
               else if($color=='not' && $body=='not' && $engine=='not' && $trans!='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and o.transmission='$trans' ";
               }
               else if($color!='not' && $body!='not' && $engine=='not' && $trans=='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and m.body_type='$body' and o.color='$color'";
               }
               else if($color!='not' && $body=='not' && $engine!='not' && $trans=='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and o.engine='$engine' and o.color='$color'  ";
               }
               else if($color!='not' && $body=='not' && $engine=='not' && $trans!='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and o.transmission='$trans' and o.color='$color'  ";
               }
               else if($color=='not' && $body!=='not' && $engine=='not' && $trans!='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type ,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and m.body_type='$body' and o.transmission='$trans'  ";
               }
               else if($color=='not' && $body!='not' && $engine!='not' && $trans=='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type ,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and   m.body_type='$body' and o.engine='$engine'";
               }
               else if($color=='not' && $body=='not' && $engine!='not' && $trans!='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type ,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and  o.transmission='$trans'  and o.engine='$engine'";
               }
               else if($color!='not' && $body!='not' && $engine!='not' && $trans=='not')
               {
                // echo '3';
                // echo 'color: '.$color;
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type ,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and o.color='$color' and o.engine='$engine' and  m.body_type='$body'";

               }
                else if($color!='not' && $body!='not' && $engine=='not' && $trans!='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and o.color='$color' and o.transmission='$trans' and  m.body_type='$body'";
               }
                else if($color!='not' && $body=='not' && $engine!='not' && $trans!='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type ,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and o.color='$color' and o.transmission='$trans' and m.body_type='$body' ";
               }
                else if($color=='not' && $body!='not' && $engine!='not' && $trans!='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type ,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and o.engine='$engine' and o.transmission='$trans' and m.body_type='$body' ";
               }
                else if($color!='not' && $body!='not' && $engine!='not' && $trans!='not')
               {
                     $temp_sql="select o.engine,o.transmission,o.color,m.body_type ,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' and o.engine='$engine' and o.transmission='$trans' and m.body_type='$body' and   o.color='$color' ";


               }
               else if($color=='not' && $body=='not' && $engine=='not' && $trans=='not')
               {
                    // echo "all NOT";
                    $temp_sql="select o.engine,o.transmission,o.color,m.body_type,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model'";
               }


            $sql1=$temp_sql;
            // echo $sql1;
            $res1=$con->query($sql1);
            $f1=0;
            while($row1=$res1->fetch_assoc())
            {
                $f1=1;
                $c=$c+1;
              $engine=$row1['engine'];
              $trans=$row1['transmission'];
              $color=$row1['color'];
              $body=$row1['body_type'];
              $dealer_n=$row1['name'];
              $dealer_id=$row1['DID'];
              $price=$row1['price'];


                 echo '<tr>
                <td ><img src="images/'.$image.'" width="80%"/></td><td>VIN:'.$VIN.'<br>ENGINE TPYE:'.$engine.'<br>TRANSMISSION:'.$trans.'<br> COLOR:'.$color.'<br> BODY TYPE:'.$body.'<br> DEALER:'.$dealer_n.'<br> DEALER ID:'.$dealer_id.'<br> PRICE: &#x20B9;'.$price.'<br><button value="'.$VIN.'" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" >BUY</button></td>

                </tr>';
                
              
            }

            
            

          }
          echo '</table></div>';
          
        
        
        
        $con->close();

?>