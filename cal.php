<html>
  <head>
     <title>Place Autocomplete</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    

            <!--minfied CSS compiled -->
             <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
            

            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

           
            <link rel="stylesheet" href="css/bootstrap.min.css"/>
            <link rel="stylesheet" href="css/font-awesome.min.css"/>
            <link rel="stylesheet" href="css/flaticon.css"/>
            <link rel="stylesheet" href="css/animate.css"/>
            <link rel="stylesheet" href="css/owl.carousel.css"/>
            <link rel="stylesheet" href="css/style.css"/>
            


            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css%22">

              

                              <script src="js/jquery-3.2.1.min.js"></script>
                
                
                

             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      
               <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvQDfUUccUtRojyjq5_uadoM2x3eh_LUU&libraries=places&callback=initMap"
                  async defer></script>
                  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                  
                  
  
  <!-- Favicon -->   
           

            <!-- Google Fonts -->
            

            <!-- Stylesheets -->
            
  </head>
  <style>

   #m1{
        position: absolute;
        left: 30%;

      }
       #m2{
        position: absolute;
        left: 10%;

      }
       #m3{
        position: absolute;
        left: 50%;

      }
      #m4{
        position: absolute;
        left: 70%;

      }
      .fade {
          opacity: 0;
          -webkit-transition: opacity 1s linear;
          transition: opacity 1s linear;

      }
      .modal-backdrop
      {
          opacity:0.9 !important;
      }

          


         
    </style>
  <body>
               
       


               <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section start -->
  <header class="header-section sp-pad">
    <h3 class="site-logo">SCAVEN AUTOWORLD</h3>
    
    <div class="nav-switch">
      <i class="fa fa-bars"></i>
    </div>
    <nav class="main-menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="dealer.php">Dealer</a></li>
        
        <li><a href="market.php">Marketing Info</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>


         <section class="hero-section">

  
    <div class="hero-slider owl-carousel">

      <div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/1.jpg">
        <div class="hs-text">
          
          
        </div></div></div></section>

  <?php
    $brand=$_GET['brand'];
    $model=$_GET['model'];
  ?>
  <!-- Header section end -->

   <!-- Page top section start -->
         
          <!-- Page top section end -->
           <br>
          <br>
            <div >
              <h2>&nbsp &nbsp &nbsp &nbsp  <?php echo $brand; ?> Models </h2>
            </div>
            <br>
            <br>
            <br>
            <br>

                
                <table class="table table-borderless">
                  <tr><th colspan='4'><center><font size="4" color="blue">FILTERS</font></center></th></tr>
                  <tr>
                    <th>
                       <div  id="m1"><form>
                        <select class="car_color">
                          <option value="not">SELECT COLOR</option>
                          <option value="red">RED</option>
                          <option value="blue">BLUE</option>
                          <option value="black">BLACK</option>
                          <option value="purple">PURPLE</option>
                           <option value="voilet">VOILET</option>
                           <option value="yellow">YELLOW</option>
                           <option value="brown">BROWN</option>
                          
                        </select>
                      </form>
                      </div>
                    </th>
                    <th>
                   <div id="m2"> <form>
                        <select class="body_type">
                          <option value="not">SELECT BODY_TYPE</option>
                          <option value="Hatchback">Hatchback</option>
                          <option value="SUV">SUV</option>
                          <option value="Convertible">Convertible</option>
                          <option value="Coupe">Coupe</option>
                           <option value="MUV">MUV</option>
                           <option value="Seden">Seden</option>

                          
                          
                        </select>
                      </form>
                    </div></th>
                    <th>
                    <div id="m3"> <form>
                        <select class="engine">
                          <option value="not">SELECT ENGINE</option>
                          <option value="petrol">PETROL</option>
                          <option value="diseal">DISEAL</option>
                          <option value="electric">ELECTRIC</option>
                          
                        </select>
                      </form>
                    </div></th>
                    <th>
                    <div id="m4"> <form>
                        <select class="trans">
                          <option value="not">SELECT TRANSMISSION</option>
                          <option value="automatic">AUTOMATIC</option>
                          <option value="manual">MANUAL</option>
                          <option value="semi-automatic">SEMI-AUTOMATIC</option>
                          
                        </select>
                      </form>
                    </div></th>
                  </tr></table>
          

          <br>
          <br>
          <br>
          <br>

              
      <?php  
        
        $con = mysqli_connect('localhost','root','scarlet2131','maa');

        $sql = "select * from vehicle";
        $res = $con->query($sql);
        $f=0;
        while($row = $res->fetch_assoc())
        {
          $f = $f+1;
          break;
        }
        if($f>0)
        {
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
            $sql1="select o.engine,o.transmission,o.color,m.body_type,i.DID,d.name,i.price from vehicle v,options_t o,model m,inventory i,dealer d where i.DID=d.DID and v.OID=o.OID and o.MID=m.MID and v.VIN='$VIN' and v.VIN=i.VIN and m.brand_name='$brand' and m.model='$model' ";
            $res1=$con->query($sql1);
            $f1=0;
            while($row1=$res1->fetch_assoc())
            {
              $f1=1;
              $engine=$row1['engine'];
              $trans=$row1['transmission'];
              $color=$row1['color'];
              $body=$row1['body_type'];
              $dealer_n=$row1['DID'];
              $dealer_id=$row1['name'];
              $price=$row1['price'];

              if($f1==1)
              {
                echo '<tr>
                  <td ><img src="images/'.$image.'" width="80%"/></td><td>ENGINE TPYE:'.$engine.'<br>TRANSMISSION:'.$trans.'<br> COLOR:'.$color.'<br> BODY TYPE:'.$body.'<br>PRICE: &#x20B9;'.$price.'<br><button value="'.$VIN.'" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" >BUY</button></td>

                  </tr>';
              }
            
            }
            


            
            $c=$c+1;

          }
          echo '</table></div>';

        }
        else
          echo '<font color="red">NO CARS YET !!<font>';
        
        $con->close();
      ?>



        
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button"   class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                <div id="rec_yn">
                <div id="welcome">
                      <h1>Welcome</h1>
                  </div>
                  <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a data-toggle="tab" href="#home">Sign IN</a></li>
                    <li><a data-toggle="tab" href="#profile">Sign UP</a></li>
                  </ul>

                  <!-- SIGN IN FORM-->
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                          
                          <form id="login_form" method="post">
                            <div class='form-group'>
                              <div class="input-group">
                                 <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-user"></span> 
                              </div>
                              <input type="text" class="form-control"  id="name" name="name" placeholder="Name" />
                                
                              </div></div>

                            <div class='form-group'>
                              <div class="input-group">
                                 <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-envelope"></span> 
                              </div>
                              <input type="text" class="form-control"  id="email" name="email" placeholder="Email" />
                                
                              </div></div>
                              <div class="form-group">
                                  <div class="input-group">
                                     <div class="input-group-addon">
                                      <span class="glyphicon glyphicon-asterisk"></span> 
                                  </div>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" />
                              </div></div><br>
                              
                                  
                              
                              <button type="submit" class="btn  btn-danger" value="Submit">Submit</button> 
                              <div id="ax_login"></div>
                          </form>
                     
                     
                    </div>

                    <!--SIGN UP FORM-->
                    <div id="profile" class="tab-pane fade">
                          
                          <form id= "reg_form" method="post">
                              <div class='form-group'>
                              <div class="input-group">
                                 <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-user"></span> 
                              </div>
                              <input type="text" class="form-control"  id="sname" name="sname" placeholder="Name" autocomplete="off" />
                                
                              </div></div>

                            <div class='form-group'>
                              <div class="input-group">
                                 <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-envelope"></span> 
                              </div>
                              <input type="text" class="form-control"   id="semail" name="semail" placeholder="Email" autocomplete="off" />
                                
                              </div></div><div id="out-email"></div>
                              <div class="form-group">
                                  <div class="input-group">
                                     <div class="input-group-addon">
                                      <span class="glyphicon glyphicon-asterisk"></span> 
                                  </div>
                                <input type="password" class="form-control" id="spass" name="spass" placeholder="Password" autocomplete="off"/>
                              </div></div>
                              <div class="form-group">
                                  <div class="input-group">
                                     <div class="input-group-addon">
                                      <span class="glyphicon glyphicon-asterisk"></span> 
                                  </div>
                                <input type="password" class="form-control" id="scpass" name="scpass" placeholder="Confirm-Password" autocomplete="off"/>
                              </div></div>
                              <div class="form-group">
                                  <div class="input-group">
                                     <div class="input-group-addon">
                                      <span class="glyphicon glyphicon-tree-conifer"></span> 
                                  </div>
                               <input type="text" class="form-control" id="address" name="address" placeholder="Address" autocomplete="off"/>
                              </div></div>
                              
                              <div class="form-group">
                                  <div class="input-group">
                                     <div class="input-group-addon">
                                      <span class="glyphicon glyphicon-earphone"></span> 
                                  </div>
                               <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" autocomplete="off"/>
                              </div></div>

                              <div class="form-group">
                                  <div class="input-group">
                                     <div class="input-group-addon">
                                      <span class="glyphicon glyphicon-heart-empty"></span> 
                                  </div>
                               <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender" autocomplete="off"/>
                              </div></div>

                              <div class="form-group">
                                  <div class="input-group">
                                     <div class="input-group-addon">
                                      <span class="glyphicon glyphicon-briefcase"></span> 
                                  </div>
                               <input type="text" class="form-control" id="income" name="income" placeholder="Annual Income" autocomplete="off"/>
                              </div></div>

                              

                              
                              
                              <button type="submit" class="btn  btn-danger" id="sub" value="Submit">Submit</button> 
                              <div id="ax_reg"></div>
                          </form>
                         
                     

                    </div>
                    
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" id="restore" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>

        </div>
      </div>
      
    <form style='display: none;'>
      <input type='text' id='set_email'>
      <input type='text' id='set_vin'>
      <input type='text' id='set_brand'>
      <input type='text' id='set_model'>
      <input type='text' id='set_price'>
      <input type='text' id='set_DID'>
      <input type='text' id='set_CID'>
      <button  id='set_sub'></button>
    </div>
      
      <script>

        var vin="";
        var name_c="";
        var brand="";
        var model="";
        var cid="";
        var price="";
        var email_c="";
        var DID="";
        var f=0;
        $('#restore').on('click',function(e){
          window.location.reload();
        })
         
        $(document).on('click','button',function(){ 
          vin = $(this).val();
          
          f=f+1;
          vin = parseInt(vin);
          if(isNaN(vin)==0)
          {
            // alert(vin);
          var str = vin;
          // alert(str);
              $.ajax({
              type: "POST",
              url: "getall.php",
              data: "str="+str,
              dataType: 'json',
              success: function(data){

                brand = data.brand;
                model = data.model;
                price = data.price;
                DID = data.DID;
                // alert(brand+" "+model+" "+price);

                $('#set_vin').val(vin);
                $('#set_brand').val(brand);
                $('#set_model').val(model);
                $('#set_price').val(price);
                $('#set_DID').val(DID);
                // $('#set_sub').click();
                // alert($('#set_brand').val()+" "+$('#set_model').val()+" "+$('#set_price').val()+" "+DID);
              }
            });
          }
          
          // alert(vin);
          // console.log(vin);
        })

        $('#set_sub').on('click',function(e){
          
          brand=$('#set_brand').val();
          model = $('#set_model').val();
          price = $('#set_price').val();
          DID = $('#set_DID').val();
          email = $('#set_email').val();
          // alert(brand+" "+model+" "+price+" "+DID);
          var str = email;
          alert(str);
           $.ajax({
              type: "POST",
              url: "get_CID.php",
              data: "str="+str,
              // dataType: 'json',
              success: function(data){
                $('#set_CID').val(data);

                $('#set_brand').val(brand);
                $('#set_model').val(model);
                $('#set_price').val(price);
                $('#set_DID').val(DID);
                $('#set_email').val(email);
                alert($('#set_brand').val()+" "+$('#set_model').val()+" "+$('#set_price').val()+" "+$('#set_DID').val()+" "+$('#set_CID').val());
          
              }
            });
           e.preventDefault();
        })
        $("#login_form").submit( function(e){
            // alert(brand+" "+model+" "+price);
            var NAME = $('#name').val();
            var EMAIL=$('#email').val();
            var PASS=$('#pass').val();
            $('#set_email').val(EMAIL);
            $('#set_sub').click();
            var str = EMAIL+" "+PASS;
            // alert(str);
            $.ajax({
              type: "POST",
              url: "ajax_login.php",
              data: "str="+str,
              dataType: 'json',
              success: function(data){
                // alert(data);
                // alert(data["found"]);
                if(data["found"]==0)
                {
                  var st = '<font size="4" color="red" >Unable to login. Register first!</font>';
                  $("#ax_login").html(st);
                }
                else
                {
                  email_c = EMAIL; 
                  $('#set_email').val(email_c);
                  name_c = NAME;
                  price = $('#set_price').val();
                  model = $('#set_model').val();
                  brand = $('#set_brand').val();
                  // alert(email_c+" "+name_c+" "+price+" "+model+" "+brand);
                  var st = '<div class="panel panel-success"><div class="panel-heading"><h3 class="panel-title">PAYMENT GATEWAY</h3></div><div class="panel-body"><table class="table table-borderless"><tr><th><strong>Customer Name</strong></th><th>'+name_c+'</th></tr><tr><th><strong>Amount to Pay</strong></th><th>&#x20B9;'+price+'</th></tr><tr><th><strong>Model</strong></th><th>'+model+'</th></tr><tr><th><strong>Brand</strong></th><th>'+brand+'</th></tr></table><br><button class="btn btn-success" id="now">PAY</button><div id="paid"></div></div></div>';

                  $("#rec_yn").html(st);
                }
                
              }
            });
            e.preventDefault();
            

        });


        $(document).on('click','#now',function(e){
          // alert(brand+" "+model+" "+price+" "+did);
          var t_brand=$('#set_brand').val();
          var t_model = $('#set_model').val();
          var t_price = $('#set_price').val();
          var t_did = $('#set_DID').val();
          var t_email = $('#set_email').val();
          var t_vin = $('#set_vin').val();
          var t_cid = $('#set_CID').val();
          // alert(brand+" "+model+" "+price+" "+did);
          var str = t_vin+" "+t_cid+" "+t_did+" "+t_price;
          alert(str);
           $.ajax({
              type: "POST",
              url: "insert_sales.php",
              data: "str="+str,
              // dataType: 'json',
              success: function(data){
                $('#paid').html(data);
                $('#now').prop('disabled',true);
          
              }
            });

        })
       
          
          
      

        $("#reg_form").submit( function(e){
          var name=$('#sname').val();
          var pass=$('#spass').val();
           var email=$('#semail').val();
           var address=$('#address').val();
           var phone=$('#phone').val();
           var gender=$('#gender').val();
           var income=$('#income').val(); 
            var str = name+" "+pass+" "+email+" "+address+" "+phone+" "+gender+" "+income;
            $.ajax({
              type: "POST",
              url: "ajax_reg.php",
              data: "str="+str,
              // dataType: 'json',
              success: function(data){
                $('#ax_reg').html(data);
                
              }
            });
            e.preventDefault();

        });

        $(document).ready(function(){
          var color="";
          var body="";
          var engine="";
          var trans="";
          var brand='<?php echo $brand; ?>';
          var model='<?php echo $model; ?>';
          // alert(model);
          $("select.car_color").change(function(){
              color = $(this).children("option:selected").val();
              // alert(color);
              if(body.length==0)
                body="not";
              if(engine.length==0)
                engine="not";
              if(trans.length==0)
                trans="not";

              alert(color+" "+body+" "+engine+" "+trans+" "+brand+" "+model);

              var str = color+" "+body+" "+engine+" "+trans+" "+brand+" "+model;
              $.ajax({
              type: "POST",
              url: "filter.php",
              data: "str="+str,
              success: function(data){
                $("#filter_op").html(data);
              }
            });

          });
          $("select.body_type").change(function(){
              body = $(this).children("option:selected").val();
              // alert(body);
              if(color.length==0)
                color="not";
              if(engine.length==0)
                engine="not";
              if(trans.length==0)
                trans="not";
              // alert(color+" "+body+" "+engine+" "+trans);

              var str = color+" "+body+" "+engine+" "+trans+" "+brand+" "+model;
              $.ajax({
              type: "POST",
              url: "filter.php",
              data: "str="+str,
              success: function(data){
                $("#filter_op").html(data);
              }
            });

          });
          $("select.engine").change(function(){
              engine = $(this).children("option:selected").val();
              // alert(engine);
              if(color.length==0)
                color="not";
              if(body.length==0)
                body="not";
              if(trans.length==0)
                trans="not";
              // alert(color+" "+body+" "+engine+" "+trans);

              var str = color+" "+body+" "+engine+" "+trans+" "+brand+" "+model;
              $.ajax({
              type: "POST",
              url: "filter.php",
              data: "str="+str,
              success: function(data){
                $("#filter_op").html(data);
              }
            });

          });
          $("select.trans").change(function(){
              trans = $(this).children("option:selected").val();
              // alert(trans);
              if(color.length==0)
                color="not";
              if(body.length==0)
                body="not";
              if(engine.length==0)
                engine="not";
              // alert(color+" "+body+" "+engine+" "+trans);

              var str = color+" "+body+" "+engine+" "+trans+" "+brand+" "+model;
              $.ajax({
              type: "POST",
              url: "filter.php",
              data: "str="+str,
              success: function(data){
                $("#filter_op").html(data);
              }
            });
          });

          

      });
        $('#filter').on('submit',function(e) {
          e.preventDefault();
          var color = $('select.car_color').val();
          var body = $('select.body_type').val();
          var engine = $('select.engine').val();
          var trans = $('select.trans').val();
          // alert(color);
          // alert(body);
          $.ajax({
              type: "POST",
              url: "filter.php",
              data: "str="+this.value,
              success: function(data){
                $("#filter_op").html(data);
              }
            });
        });
      </script>


  
  
         

          
         


  


  
  

  <!--====== Javascripts & Jquery ======-->
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/circle-progress.min.js"></script>
  <script src="js/main.js"></script>


  </body>
</html>