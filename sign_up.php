<?php  
        
        $con = mysqli_connect('localhost','root','scarlet2131','maa');

        $filter =  $_POST['str'];
        $s = explode(" ",$filter);

        $color = $s[0];
        $body = $s[1];
        $engine = $s[2];
        $trans = $s[3];
        
        
        // echo $color." ".$body." ".$engine." ".$trans;
       // echo $temp_sql;




         
          
        
        
        
        $con->close();

?>