<?php
  // echo $_POST['str'];
	$s = explode(" ",$_POST['str']);
  
	
  

  // echo $name."/".$pass."/".$email."/".$address."/".$phone."/".$gender."/".$income;
	// echo $email." ".$pass;
	$con = mysqli_connect('localhost','root','scarlet2131','maa');
 
// echo $CID;
	$sql = "select * from dealer";

        
        $res = $con->query($sql);
         while($row = $res->fetch_assoc())
          {
         
            $DID=$row['DID'];
            $name=$row['name'];
            $address=$row['address'];
            $lat=$row['lat'];
            $longi=$row['longi'];
            echo $DID.",".$name.",".$address.",".$lat.",".$longi;
            echo " ";
          
          }
?>