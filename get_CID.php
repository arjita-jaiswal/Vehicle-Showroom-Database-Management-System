<?php

	$email= $_POST['str'];
	
	
	$con = mysqli_connect('localhost','root','scarlet2131','maa');
	$sql = "select CID from customer where email='$email' ";
	$res = $con->query($sql);
	 while($row = $res->fetch_assoc())
          {
        	$CID=$row['CID'];
        	
        	
          }

          echo $CID;



?>