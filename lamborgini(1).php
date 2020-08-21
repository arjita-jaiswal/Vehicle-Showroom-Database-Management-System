<html>
  <head>
     <title>Place Autocomplete</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    

            <!--minfied CSS compiled -->
             <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            

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
       html, body {
            height: 100%;
            margin: 0;
            padding: 0;
          }
    </style>
  <body>
               
            <?php 

                $brand = $_GET['brand'];   
            ?>


               <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section start -->
  <header class="header-section sp-pad">
    <h3 class="site-logo">SACVEN AUTOWORLD</h3>
    
    <div class="nav-switch">
      <i class="fa fa-bars"></i>
    </div>
    <nav class="main-menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        
        <li><a href="index.php">Home</a></li>
        <li><a href="dealer.php">Dealer</a></li>
        
        <li><a href="market.php">Marketing Info</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- Header section end -->

   <!-- Page top section start -->
         
         <section class="hero-section">

  
    <div class="hero-slider owl-carousel">

      <div class="hs-item set-bg sp-pad" data-setbg="img/hero-slider/lam.jpg">
        <div class="hs-text">
          
          
        </div></div></div></section>

          <br>
          <br>
            <div >
              <h2>&nbsp &nbsp &nbsp &nbsp  <?php echo $brand; ?> Models </h2>
            </div>
            <br>
            <br>
            <br>
            <br>
            
          <section class="portfolio-section">
            <div  class="portfolio-warp">
              <!-- single item -->
              <div class="single-portfolio set-bg" data-setbg="img/portfolio/LAM_H.jpg">
                <a href="cal.php?model=Huracan&brand=<?php echo $brand;?>" class="portfolio-info">
                  <div class="pfbg set-bg" data-setbg="img/portfolio/LAM_H.jpg"></div>
                  <h5>Huracan</h5>
                  
                </a>
              </div>
              <!-- single item -->
              <div class="single-portfolio set-bg" data-setbg="img/portfolio/LAM_A.jpg">
                <a href="cal.php?model=Aventador&brand=<?php echo $brand;?>" class="portfolio-info">
                  <div class="pfbg set-bg" data-setbg="img/portfolio/LAM_A.jpg"></div>
                  <h5>Aventador</h5>
                  
                </a>
              </div>
              <!-- single item -->
              <div class="single-portfolio set-bg" data-setbg="img/portfolio/LAB_U.jpg">
                <a href="cal.php?model=Urus&brand=<?php echo $brand;?>" class="portfolio-info">
                  <div class="pfbg set-bg" data-setbg="img/portfolio/LAB_U.jpg"></div>
                  <h5>Urus</h5>
                  
                </a>
             
            </div>
    <div class="clearfix"></div>
  </section>


  


  
  

  <!--====== Javascripts & Jquery ======-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/circle-progress.min.js"></script>
  <script src="js/main.js"></script>
  
  

  </body>
</html>