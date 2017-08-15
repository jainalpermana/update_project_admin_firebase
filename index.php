<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    
    <title>Admin</title>
    <link href="style.css" rel="stylesheet" type="text/css">


<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCIwd6kAjFRWjrYTi71a85Q5DRYaJGTpCc",
    authDomain: "admin-431f8.firebaseapp.com",
    databaseURL: "https://admin-431f8.firebaseio.com",
    projectId: "admin-431f8",
    storageBucket: "admin-431f8.appspot.com",
    messagingSenderId: "92588852870"
  };
  firebase.initializeApp(config);
</script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script type="text/javascript" src="app.js"></script>
    
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    

    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

 </head>

  <body>
    
    
	
	<!-- Preloader Start -->
    <div id="preloader">
	  <div class="loader"></div>
    </div>
    <!-- Preloader End -->

    
    
    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index-2.html">Admin Newtronic Solution</a>
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="createlokasi.php">BuatLokasi <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a href="createpetugas.php">BuatPetugas</a>
                                        </li>
                                        <li><a href="createpekerjaan.php">BuatPekerjaan</a>
                                        </li>
                                        <li><a href="createlaporankerja.php">BuatLaporan</a>
                                        </li>
                                         <li><a href="qr/barcode.php">BuatBarcode</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="home-section-background" data-stellar-background-ratio="0.6">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text">
                                    <p>Ini Adalah Web Admin Newtronic Solution</p>
                                    <h2><span class="typing"></span></h2>
                                    
                                    <div class="margin-top-60">
                          <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" href="#portfolio">Tampilkan Data Petugas Kebersihan</a>
                                  </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Home & Menu Section End-->
    
    
    
    
   

    
    <!-- Portfolio Start -->
    <section id="portfolio" class="portfolio section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Data Para Petugas Kebersihan dilapangan</h2>
                        <marquee><p>*Data ini hanya bisa dibuat dan diubah hanya oleh Admin*</p></marquee>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <ul class="portfolio">
                    <li class="filter" data-filter="all">Lokasi</li>
                    <li class="filter" data-filter=".apps">Petugas</li>
                    <li class="filter" data-filter=".mockups">Pekerjaan</li>
                    <li class="filter" data-filter=".wordpress">Laporan</li>
                </ul>
            </div>
            
            <div class="portfolio-inner">
                <div class="row">
                
                
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps">
                        <div class="item">
                            <a href="images/portfolio/test.jpg" class="portfolio-popup" title="Project Title">
                                <img src="images/portfolio/test.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix mockups">
                        <div class="item">
                            <a href="images/portfolio/test.jpg" class="portfolio-popup" title="Project Title">
                                <img src="images/portfolio/test.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps">
                        <div class="item">
                            <a href="images/portfolio/test.jpg" class="portfolio-popup" title="Project Title">
                                <img src="images/portfolio/test.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix mockups wordpress">
                        <div class="item">
                            <a href="images/portfolio/test.jpg" class="portfolio-popup" title="Project Title">
                                <img src="images/portfolio/test.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix wordpress apps">
                        <div class="item">
                            <a href="images/portfolio/test.jpg" class="portfolio-popup" title="Project Title">
                                <img src="images/portfolio/test.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps mockups wordpress" title="Project Title">
                        <div class="item">
                            <a href="images/portfolio/test.jpg" class="portfolio-popup">
                                <img src="images/portfolio/test.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
     
     </section>
    <!-- Portfolio End -->
    
    
    
     <!-- Testimonial Start -->
     <section id="testimonials" class="testimonial-section section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Barcode para petugas kebersihan</h2>
                        <marquee><p>*Setiap petugas kebersihan memiliki barcode yang berbeda-beda*</p></marquee>
                      
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="testimonial-carousel-list margin-top-20">

                    FOTO BARCODE PETUGAS KEBERSIHAN
                    <div class="testimonial-word text-center">
                    <img src="images/testimonial/a.jpg" class="img-responsive" alt="">
                        <h2>Pa Philips</h2>
                        <p>di tugaskan di ATM 1 BNI</p>
                    </div>
                    
                    <div class="testimonial-word text-center">
                    <img src="images/testimonial/b.jpg" class="img-responsive" alt="">
                        <h2>Pa Ujang</h2>
                        <p>di tugaskan di ATM 2 BNI</p>
                    </div>
                    
                    <div class="testimonial-word text-center">
                    <img src="images/testimonial/a.jpg" class="img-responsive" alt="">
                        <h2>Pa Ono</h2>
                        <p>di tugaskan di ATM 3 BNI</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End --> 
        
    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
               
      <div class="col-md-4 text-left">
       <p><span><a href="#about" class="smoth-scroll">Web Admin</a></span> | <span><a href="#portfolio" class="smoth-scroll">Newtronic Solution</a></span></p>
          </div>
               
            <div class="col-md-4 text-center">
               <p>© Copyright 2017 Newtronic Solution.</p>
               </div>
              
             <div class="col-md-4 uipasta-credit text-right">
                <p>Design By Jainal Permana <a href="http://www.newtronicsolution.com" target="_blank" title="NewtronicSolution">Newtronic Solution</a></p>
                </div>
                
             </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
  
  
  </body>
 </html>