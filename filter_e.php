<?php  
        
        $con = mysqli_connect('localhost','root','scarlet2131','maa');

        $engine =  $_POST['str'];
        
        $sql = "select * from vehicle";
        $res = $con->query($sql);
       
          $c=1;
          echo '<div id="filter_op"><table id="list_table" class="table table-borderless" rules="rows" style="position:absolute;left:5%;width:50%;" >
              <tr>
                <th>CARS</th>
                <th>INFO</th>
                <th></th>
                
              </tr>';
          while($row = $res->fetch_assoc())
          {
            $VIN= $row['VIN'];
            $image = $row['image'];
            $sql1="select o.engine,o.transmission,o.color,m.body_type from vehicle v,options_t o,model m where v.OID=o.OID and o.MID=m.MID and o.engine='$engine' and v.VIN='$VIN'";
            $res1=$con->query($sql1);
            while($row1=$res1->fetch_assoc())
            {
              $engine=$row1['engine'];
              $trans=$row1['transmission'];
              $color=$row1['color'];
              $body=$row1['body_type'];
              echo '<tr>
                <td ><img src="images/'.$image.'" width="80%"/></td><td>VIN:'.$VIN.'<br>ENGINE TPYE:'.$engine.'<br>TRANSMISSION:'.$trans.'<br> COLOR:'.$color.'<br> BODY TYPE:'.$body.'</td>
                </tr>';
            }
            

          }
          echo '</table></div>';

        
        
        
        $con->close();

?>