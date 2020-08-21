<html>
<head>
	<title>HALO - Photography Portfolio Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="HALO photography portfolio template">
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

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDvQDfUUccUtRojyjq5_uadoM2x3eh_LUU&libraries=places&callback=initMap"
        async defer></script>

	<style>
		#map {
			position: absolute;
			top:55%;
			width: 100%;
        height: 100%;
        z-index:10;
      }
      /* Optional: Makes the sample page fill the window. */
      
	</style>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section start -->
	<header class="header-section sp-pad">
		<h3 class="site-logo">HALO</h3>
		<form class="search-top">
			<button class="se-btn"><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search.....">
		</form>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="dealer.php">Dealer</a></li>
				
				<li><a href="portfolio.html">Marketing Info</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	<!-- Page top section start -->
	<div class="page-top-area set-bg" data-setbg="img/headers-bg/1.jpg">
		<div class="breadcrumb-area">
			<a href="#">Home</a> / <span>About us</span>
		</div>
	</div>
	<!-- Page top section end -->
	<div id="map"></div>
      
</section>

    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 28.6139, lng: 77.2090},
          zoom: 6
        });

        lt = {lat:19.076 , lng: 72.8777};
        var marker = new google.maps.Marker({
		    position: lt,
		    map: map,
		    title: 'Bombay, Arjita DID:5001'
		  });

        lt = {lat: 12.9716 , lng: 77.5946 };
        var marker = new google.maps.Marker({
		    position: lt,
		    map: map,
		    title: 'Bangalore, Monisha DID:5002'
		  });

        lt = {lat: 28.7041, lng:  77.1025 };
        var marker = new google.maps.Marker({
		    position: lt,
		    map: map,
		    title: 'Mona, DELHI DID:5003'
		  });

        lt = {lat:  26.1445, lng: 91.7362};
        var marker = new google.maps.Marker({
		    position: lt,
		    map: map,
		    title: 'Priya, Guwahati DID:5004'
		  });

        lt = {lat: 25.5941, lng: 85.1376};
        var marker = new google.maps.Marker({
		    position: lt,
		    map: map,
		    title: 'Janvi, Patna DID:5005'
		  });


        
      }
    </script>
    
  


	


	<!-- Intro section start -->
	
	

	<!-- Footer section start -->
	
	<!-- Footer section end -->

	<section class="ftco-counter" id="section-counter">
	    	
	    </section>
	

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
