<?php

	$vin = $_POST['str'];
	
	$vin = (int)$vin;
	$con = mysqli_connect('localhost','root','scarlet2131','maa');
	$sql = "select v.VIN,m.model,m.brand_name,i.price,i.DID from vehicle v,inventory i,model m where v.MID=m.MID and v.VIN=i.VIN and v.VIN='$vin' ";
	$res = $con->query($sql);
	 while($row = $res->fetch_assoc())
          {
        	$model=$row['model'];
        	$brand_name=$row['brand_name']; 
        	$price=$row['price'];
        	$DID=$row['DID'];
        	
          }

          $obj->model=$model;
          $obj->brand=$brand_name;
          $obj->price=$price;
          $obj->DID=$DID;

          $json_obj = json_encode($obj);
          echo $json_obj;

         $con->close();



?>