<script>
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
if(!getCookie('username')){
  window.location.pathname = '/index.php';
}
</script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MarketPlace - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center justify-content-end">

          <h1 class="logo mr-auto"><a href="index.html">Marketplace</a></h1>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="/landingPage/index.php">Home</a></li>
              <li><a href="#services">Partner Sites</a></li>
              <li><a href="#portfolio">Top Products</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="/user_activity.php">User Activity</a></li>
              <li><a href="/statistics.php">Statistics</a></li>

            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Welcome to <span>Marketplace</span></h2>
              <p class="animated fadeInUp">This the common website where we have all our partner website in one place</p>
              <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Choose from different domains</h2>
              <p class="animated fadeInUp">Browse products in our partner website and choose product of your liking</p>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Get the most trending products</h2>
              <p class="animated fadeInUp"> We have a curated list of products that customers liked the most, bought the most and rated the most</p>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Services Section ======= -->
    <section id="services" class="services portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Check our <span>Partner Sites</span></h3>
          <p>Below are our vendor websites of our marketplace. Check out the products sold by these websites by clicking on the links below</p>
        </div>

        <div class="row portfolio-container justify-content-center">

          <div class="col-xl-10">
            <div class="row">

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item" onclick="navigateToCompany('Minfri', 'http://app.ragini-dwivedi.com/services.php')">
                <div class="portfolio-wrap">
                  <img src="https://ninetheme.com/themes/techland/wp-content/uploads/2019/05/img_14.png" style="height: 257px; padding-left: 55px;" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Minfri</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="assets/img/gallery/gallery-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item" onclick="navigateToCompany('Rashmi', '')">
                <div class="portfolio-wrap">
                  <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Rashmi</h4>
                    <p>Web</p>
                    <div class="portfolio-links">
                      <a href="assets/img/gallery/gallery-2.jpg" data-gall="portfolioGallery" class="venobox" title="Rashmi"></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item" onclick="navigateToCompany('Prashant', '')">
                <div class="portfolio-wrap">
                  <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Prashant</h4>
                    <p>App</p>
                    <div class="portfolio-links">
                      <a href="assets/img/gallery/gallery-3.jpg" data-gall="portfolioGallery" class="venobox" title="Prashant"></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

              <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item" onclick="navigateToCompany('Dishant', '')">
                <div class="portfolio-wrap">
                  <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4>Dishant</h4>
                    <p>Card</p>
                    <div class="portfolio-links">
                      <a href="assets/img/gallery/gallery-4.jpg" data-gall="portfolioGallery" class="venobox" title="Dishant"></a>
                    </div>
                  </div>
                </div>
              </div><!-- End portfolio item -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Top Products</h2>
          <h3>Check our <span>Top List of Products</span></h3>
          <p>Below are our top 5 products based on different criterias. Check it out</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li class='top-rated-filter' data-filter=".top-rated-products" class="filter-active">Top 5 rated Products</li>
              <li data-filter=".top-visited-products">Top 5 visited Products</li>
              <li data-filter=".recently-visited-products">Last 5 visited Products</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container justify-content-center">

          <?php include './top_products.php' ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hard Working <span>Team</span></h3>
          <p>We are the people responsible for this awesome website and the owners of our individual websites.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member">
                  <img src="assets/img/team/developers.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Ragini Dwivedi</h4>
                      <span>Owner of Website 1</span>
                    </div>
                    <div class="social">
                      <a href="#"><i class="icofont-twitter"></i></a>
                      <a href="#"><i class="icofont-facebook"></i></a>
                      <a href="#"><i class="icofont-instagram"></i></a>
                      <a href="#"><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
                <div class="member">
                  <img src="assets/img/team/developers.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Prashanth Narasimha</h4>
                      <span>Owner of Website 2</span>
                    </div>
                    <div class="social">
                      <a href="#"><i class="icofont-twitter"></i></a>
                      <a href="#"><i class="icofont-facebook"></i></a>
                      <a href="#"><i class="icofont-instagram"></i></a>
                      <a href="#"><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
                <div class="member">
                  <img src="assets/img/team/developers.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Rashmi Kumari</h4>
                      <span>Owner of Website 3</span>
                    </div>
                    <div class="social">
                      <a href="#"><i class="icofont-twitter"></i></a>
                      <a href="#"><i class="icofont-facebook"></i></a>
                      <a href="#"><i class="icofont-instagram"></i></a>
                      <a href="#"><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

              <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
                <div class="member">
                  <img src="assets/img/team/developers.png" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Dishant Shah</h4>
                      <span>Owner of Website 4</span>
                    </div>
                    <div class="social">
                      <a href="#"><i class="icofont-twitter"></i></a>
                      <a href="#"><i class="icofont-facebook"></i></a>
                      <a href="#"><i class="icofont-instagram"></i></a>
                      <a href="#"><i class="icofont-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div> <!-- End Member Item -->

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
      function navigateToCompany(companyName, companyLink){
          let counter = getCookie(companyName);
          if(counter == null){
              setCookie(companyName, 0);
          }else {
              counter = parseInt(counter) + 1;
              setCookie(companyName, counter);
          }
          
          //window.location.href = companyLink;
      }

      function setCookie(name,value) {
          document.cookie = name + "=" + value  + "; path=/";
      }

  </script>

</body>

</html>
