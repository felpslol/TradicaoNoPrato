<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Tradição No Prato</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/newcss/style1.css">
    <link rel="icon" href="data:,">
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img id = "iconesite" src = "assets/images/iconesite.jpg">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Search for restaurants and dishes" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Offers</a></li>
                      <li class="scroll-to-section"><a href="#courses">Services</a></li>
                      <li class="scroll-to-section"><a href="business.html" id = "businessbut">Business</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category"><h6 class = "spanh6xd">Parobé</h6></span>
                <h2>Best Offer 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac ornare elit. Aenean molestie diam.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">See menu</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category"><h6 class = "spanh6xd">Igrejinha</h6></span>
                <h2>Best Offer 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque laoreet ante in turpis mattis, ut pharetra ipsum pretium. Nam dignissim.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">See menu</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category"><h6 class = "spanh6xd">Taquara</h6></span>
                <h2>Best Offer 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat ut eros id convallis. Aliquam finibus euismod nulla, eu tincidunt sem pulvinar eget. Cras vestibulum.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">See menu</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Services</h6>
            <h2>Our best Services</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".categoria-pizzeria">Pizzerias</a>
        </li>
        <li>
          <a href="#!" data-filter=".categoria-restaurant">Restaurants</a>
        </li>
        <li>
          <a href="#!" data-filter=".categoria-burguerplace">Burguer Places</a>
        </li>
      </ul>
      <div class="row event_box">
        <?php include 'restaurante.php'; ?>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2024 Tradição no Prato. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>