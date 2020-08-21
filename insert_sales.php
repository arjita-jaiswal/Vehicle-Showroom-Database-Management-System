<?php
  // echo $_POST['str'];
	$s = explode(" ",$_POST['str']);
  
	$vin= $s[0];
	$cid = $s[1];
  $did = $s[2];
  $price= $s[3];

  echo $vin." ".$cid." ".$did." ".$price;
  $vin = (int)$vin;
  $did = (int)$did;
  $cid = (int)$cid;
  $price = (int)$price;
  $current_date = date("Y-m-d H:i:s");

  // echo $name."/".$pass."/".$email."/".$address."/".$phone."/".$gender."/".$income;
	// echo $email." ".$pass;
	$con = mysqli_connect('localhost','root','scarlet2131','maa');
 
// echo $CID;
	$sql = "insert into sales values('$vin','$cid','$did','$current_date','$price')";
        
        if($con->query($sql))
        {
          $sql1="delete from inventory i where i.VIN='$vin' ";
          $con->query($sql1);
          echo '<font size="4" color="green">Sold Successfully!</font>';
        }
        else
        {
          echo '<font size="4" color="red">Error!</font>';
        }
         
        $con->close();
?>