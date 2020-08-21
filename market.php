<html>
<head>
	<title>SCAVEN AUTOWORLD - Photography Portfolio Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="SCAVEN AUTOWORLD photography portfolio template">
	<meta name="keywords" content="photography, portfolio, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="js/jquery-3.2.1.min.js"></script>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style >
		#m1{
        position: absolute;
        left: 30%;
    }
    #m2{
        position: absolute;
        left: 50%;
    }
    /*#q1{
        position: absolute;
        left: 30%;
    }
    #q2{
        position: absolute;
        left: 30%;
    }
    #q3{
        position: absolute;
        left: 30%;
    }
    #q3{
        position: absolute;
        left: 30%;
    }
    #q4{
        position: absolute;
        left: 30%;
    }
    #q5{
        position: absolute;
        left: 30%;
    }
    #q6{
        position: absolute;
        left: 30%;
    }
    #q7{
        position: absolute;
        left: 30%;
    }*/

     
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


</head>
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
	<!-- Header section end -->


	<!-- Hero section start -->
	<section class="hero-section">

		<div class="hero-slider owl-carousel">

			<div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/1.jpg">
				<div class="hs-text">
					
					
				</div>
			</div>


	</section>

	
		
                       &nbsp&nbsp&nbsp<div  id="m1">
                       	<form>
                        <select class="year">
                         <option value="not">Select years</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                            <option value="8">8</option>
                             <option value="9">9</option>
                          
                        </select>
                      </form>
                      </div>

                      <div  id="m2">
                      	<form>
                        <select class="gender">
                          <option value="not">Gender</option>
                          <option value="male">male</option>
                          <option value="female">female</option>

                         
                          
                        </select>
                      </form>

                      
                      </div>
                      <br>
                      <br>

                      <div id="q1"></div>

                      <h4>BRANDS BY YEAR</h4>
                      <button class="btn btn-success" id="kuch">By Amount</button>

                      <div id="q2"></div>

                      <h4>BRANDS BY UNIT SELL</h4>
                      <button class="btn btn-success" id="unit_s">By UnitSell</button>
                      <div id="q3"></div>
                      <h4>HATCHBACKS SELL</h4>
                      <button class="btn btn-success" id="hatch">BEST MONTH</button>
                      <div id="q4"></div>

                      <h4>VEHICLE(LONGEST TIME)</h4>
                      <button class="btn btn-success" id="vehicle">Vehicle</button>
                      <div id="q5"></div>

                      <h4>DEALER(MAXIMUM BRANDS)</h4>
                      <button class="btn btn-success" id="br">Brands</button>
                      <div id="q6"></div>

                      <h4>SUPPLIER(LEAST COST)</h4>
                      <button class="btn btn-success" id="supp">least cost</button>
                      <div id="q7"></div>
                  




                      <script>
                      $(document).ready(function(){
                      	var year="";
                      	var gender="";

                      	$("select.year").change(function(){
			              year = $(this).children("option:selected").val();
			              
			              
			              if(gender.length==0)
			                gender="not";
			              

			              var str = year+" "+gender;
			              alert(str);
				              $.ajax({
				              type: "POST",
				              url: "market1.php",
				              data: "str="+str,
				              success: function(data){
				              	alert(data);
				                $('#q1').html(data);
				              }
				            });
			          });
			              $("select.gender").change(function(){
			              gender = $(this).children("option:selected").val();
			              
			              
			              if(year.length==0)
			                year="not";
			              

			              var str = year+" "+gender;
			              alert(str);
			              $.ajax({
			              type: "POST",
			              url: "market1.php",
			              data: "str="+str,
			              success: function(data){
			              	alert(data);
			                $('#q1').html(data);
			              }
			            });
			          });
			        });

                      $('#kuch').on('click',function(e){
				          var str= 'hi';
				          
				           $.ajax({
				              type: "POST",
				              url: "market2.php",
				              data: "str="+str,
				              // dataType: 'json',
				              success: function(data){
				                $('#q2').html(data);
				                // alert($('#set_CID').val());
				          
				              }
				            });
				        })
                      $('#unit_s').on('click',function(e){
				          var str= 'hi';
				          
				           $.ajax({
				              type: "POST",
				              url: "market3.php",
				              data: "str="+str,
				              // dataType: 'json',
				              success: function(data){
				                $('#q3').html(data);
				                // alert($('#set_CID').val());
				          
				              }
				            });
				        })
                      $('#hatch').on('click',function(e){
				          var str= 'hi';
				          
				           $.ajax({
				              type: "POST",
				              url: "market4.php",
				              data: "str="+str,
				              // dataType: 'json',
				              success: function(data){
				                $('#q4').html(data);
				                // alert($('#set_CID').val());
				          
				              }
				            });
				        })
                      $('#vehicle').on('click',function(e){
				          var str= 'hi';
				          
				           $.ajax({
				              type: "POST",
				              url: "market5.php",
				              data: "str="+str,
				              // dataType: 'json',
				              success: function(data){
				                $('#q5').html(data);
				                // alert($('#set_CID').val());
				          
				              }
				            });
				        })
                      $('#br').on('click',function(e){
				          var str= 'hi';
				          
				           $.ajax({
				              type: "POST",
				              url: "mar.php",
				              data: "str="+str,
				              // dataType: 'json',
				              success: function(data){
				                $('#q6').html(data);
				                // alert($('#set_CID').val());
				          
				              }
				            });
				        })

                      
                      $('#supp').on('click',function(e){
				          var str= 'hi';
				          
				           $.ajax({
				              type: "POST",
				              url: "market7.php",
				              data: "str="+str,
				              // dataType: 'json',
				              success: function(data){
				                $('#q7').html(data);
				                // alert($('#set_CID').val());
				          
				              }
				            });
				        })
			          
					</script>

	



	<!--====== Javascripts & Jquery ======-->
	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>