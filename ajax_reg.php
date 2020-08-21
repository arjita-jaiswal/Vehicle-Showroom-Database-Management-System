<?php
  // echo $_POST['str'];
	$s = explode(' ',$_POST['str']);
  
	$name = $s[0];
	$pass = $s[1];
  $email = $s[2];
  $address= $s[3];

  $phone=$s[4];
  $gender=$s[5];
  $income=$s[6];

  // echo $name."/".$pass."/".$email."/".$address."/".$phone."/".$gender."/".$income;
	// echo $email." ".$pass;
	$con = mysqli_connect('localhost','root','scarlet2131','maa');
  $sql="select * from customer";
  $res=$con->query($sql);
  $c=0;
  while($row=$res->fetch_assoc())
  {
    $c=$c+1;
  }
$income = (int)$income;
$CID=7001+$c;  
// echo $CID;
	$sql1 = "insert into customer values('$CID','$name','$address','$phone','$gender','$income','$email','$pass')";
        
        if($con->query($sql1))
          echo '<font size="4" color="green">Registered Successfully!</font>';
        else
          echo '<font size="4" color="red">Error!</font>';
         
        $con->close();
?>