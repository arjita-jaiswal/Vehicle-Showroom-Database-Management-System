<?php
	$s = explode(" ",$_POST['str']);

	$email = $s[0];
	$pass = $s[1];
	// echo $email." ".$pass;
	$con = mysqli_connect('localhost','root','scarlet2131','maa');

	$sql = "select * from customer";
        $res = $con->query($sql);
        $f=0;
         while($row = $res->fetch_assoc())
          {
        	$email1=$row['email'];
        	$pass2=$row['password']; 
        	if($email==$email1 && $pass==$pass2)
        	{
        		$f=1;
        		break;
        	}   
          }
          $obj->found=0;
          if($f==1)
          {
          		$obj->found=1;

    			//   echo '<div class="panel panel-success">
				//   <div class="panel-heading">
				//     <h3 class="panel-title">PAYMENT GATEWAY</h3>
				//   </div>
				//   <div class="panel-body">
				//     <table class="table table-borderless">
				//       <tr>
				//       <th><strong>Amount to Pay</strong></th>
				//       <th>&#x20B9;</th>
				//     </tr>
				//   </table>
				//   <br>
				  
				//   <button class="btn btn-success" id="now">PAY</button>
				//   </div>
				// </div>';
          }

             // echo '<font color="red" size="3">Unable to LOGIN. Register first!</font>';
          $json_obj = json_encode($obj);
          echo $json_obj;

          $con->close();

         

?>