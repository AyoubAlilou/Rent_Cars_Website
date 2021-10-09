<?php session_start(); ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Renten - Car Rental Service HTML Template</title>
  <!-- site favicon -->
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg"/>
  <!-- fontawesome css link -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- lightcase css link -->
  <link rel="stylesheet" href="assets/css/lightcase.css">
  <!-- animate css link -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- nice select css link -->
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <!-- datepicker css link -->
  <link rel="stylesheet" href="assets/css/datepicker.min.css">
  <!-- wickedpicker css link -->
  <link rel="stylesheet" href="assets/css/wickedpicker.min.css">
  <!-- jquery ui css link -->
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
  <!-- owl carousel css link -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <!-- main style css link -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->

  <!--  header-section start  -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <ul class="social-links">
              <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>


            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="header-info d-flex justify-content-center">
              <li>
                <i class="fa fa-map-marker"></i>
                <p>Tunis, El menzah 1, 1004 </p>
              </li>
              <li>
                <i class="fa fa-clock-o"></i>
                <p>Monday-Saturday 8:00am-3:00pm  </p>
              </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <div class="header-action d-flex align-items-center justify-content-end">

              <div class="login-reg">
                  <?php if ($_SESSION['id']==null){
               echo " <a href='registration.html'>Sign Up</a>
                <a href='login.html'>Sign in</a>";}
                else{
                     echo " <a href='login.html'>Disconnection</a>";
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
          <a class="site-logo site-title" href="index.php"><img src="assets/images/luxury2.png" alt="site-logo" class="logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu mr-auto">
              <li ><a href="index.php">Home</a>   </li>
              <!--              <li class="menu_has_children"><a href="#0">Home</a>-->
              <!--                <ul class="sub-menu">-->
              <!--                  <li><a href="HomeAdmin.html">Home One</a></li>-->
              <!--                  <li><a href="home-two.html">Home Two</a></li>-->
              <!--                </ul>-->

              <!--              <li><a href="about.html">About</a>-->
              <li ><a href="car-list.php">List cars</a>   </li>
              <!--              <li class="menu_has_children"><a href="#0">cars</a>-->
              <!--                <ul class="sub-menu">-->
              <!--                  <li><a href="car-list.php">car list one</a></li>-->
              <!--                  <li><a href="car-list-two.html">car list two</a></li>-->
              <!--                </ul>-->
              <!--              </li>-->
              <!--              <li class="menu_has_children"><a href="#0">pages</a>-->
              <!--                <ul class="sub-menu">-->
              <!--                  <li><a href="reservation.html">reservation</a></li>-->
              <!--                  <li><a href="login.html">login</a></li>-->
              <!--                  <li><a href="registration.html">registration</a></li>-->
              <!--                  <li><a href="error-404.html">404</a></li>-->
              <!--                </ul>-->
              <!--              </li>-->
              <!--              <li class="menu_has_children"><a href="#0">blog</a>-->
              <!--                <ul class="sub-menu">-->
              <!--                  <li><a href="blog.html">blog page</a></li>-->
              <!--                  <li><a href="blog-details.html">blog details</a></li>-->
              <!--                </ul>-->
              <!--              </li>-->
              <li><a href="contact.html">contact us</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
  <!--  header-section end  -->

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">reservation</h2>
          <ol class="page-list">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#0">car list</a></li>
            <li>reservation</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- car-search-section start -->
  <section class="car-search-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="car-search-filter-area">
            <div class="car-search-filter-form-area">
              <form class="car-search-filter-form">
                <div class="row justify-content-between">
                  <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="cart-sort-field">
                      <span class="caption">Sort by : </span>
                      <select>
                        <option>Pajero Range</option>
                        <option>Toyota Axio</option>
                        <option>Lancer</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 d-flex">
                    <input type="text" name="car_search" id="car_search" placeholder="Search what you want........">
                    <button class="search-submit-btn">Search</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="view-style-toggle-area">
              <button class="view-btn list-btn"><i class="fa fa-bars"></i></button>
              <button class="view-btn grid-btn active"><i class="fa fa-th-large"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-70">
        <div class="col-lg-8">
            <div class="car-search-result-area grid--view row mb-none-30">
                <?php include_once("Php/Cnx.php");
                $cnx=connect();
                //                                        $req=$cnx->query("select * from user where role='".$role."';");
                $req=$cnx->query("select * from cars");
                while($c=$req->fetch()){ ?>
                    <div class="col-md-6 col-12">
                        <div class="car-item">
                            <div class="thumb bg_img" data-background="Stellar-master/php/photos/<?php echo $c['image']?>"></div>
                            <div class="car-item-body">
                                <div class="content">
                                    <h4 class="title"><?php echo $c['marque'] ?></h4>
<!--                                    <span class="price">start form $20 per day</span>-->
                                    <p><?php echo $c['description']?></p>
                                    <a href="#0" class="cmn-btn">rent car</a>
                                </div>
                                <div class="car-item-meta">
                                    <ul class="details-list">
                                        <li><i class="fa fa-car"></i><?php echo $c['model']?></li>
                                        <li><i class="fa fa-tachometer"></i><?php echo $c['km']?>KM</li>
                                        <li><i class="fa fa-sliders"><?php if ($c['boite']){ echo "   Auto" ;} else {echo "   Manual";} ?></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div><!-- car-item end -->
                <?php } ?>
            </div>
          </div>


        <div class="col-lg-4">
          <aside class="sidebar">
            <div class="widget widget-reservation">
              <h4 class="widget-title">reservation</h4>
              <div class="widget-body">
                <form class="car-search-form" action="Php/add_reservation.php" method="post">
                  <div class="row">
                    <div class="col-lg-12 form-group">
                      <select name="idCar">
                          <option value="1" selected>Choose Your Car Type</option>
                          <?php include_once("Php/Cnx.php");
                          $cnx=connect();
                          $req=$cnx->query("select * from cars where available=false ");
                          while($c=$req->fetch()){ ?>
                        <option value="<?php echo $c['id'] ?>" ><?php echo $c['marque'] ?></option>
                          <?php } ?>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-map-marker"></i>
                      <input class="form-control has-icon" type="text" name="PickLoc" placeholder="Pickup Location">
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-map-marker"></i>
                      <input class="form-control has-icon" type="text" name="DropLoc" placeholder="Drop Off Location">
                    </div>
                    <div class="form-group col-md-12">
<!--                      <i class="fa fa-calendar"></i>-->
                      <input type='date' class='a' name="dateStart" data-language='en' placeholder="Pickup Date">
                    </div>

                    <div class="form-group col-md-12">
<!--                      <i class="fa fa-calendar"></i>-->
                      <input type='date' class='a' name="dateEnd" data-language='en' placeholder="Drop Off Date">
                    </div>

                  </div>
                  <button type="submit" class="cmn-btn">Reservation</button>
                </form>
              </div>
            </div>
            <div class="widget widget-price-filter">
              <h4 class="widget-title">price filter</h4>
              <div class="widget-body">
                <div id="slider-range"></div>
                <div class="filter-price-result">
                  <input type="text" id="amount" readonly><span>(Per Day)</span>
                </div>
              </div>
            </div>
            <div class="widget widget-testimonial">
              <h4 class="widget-title">testimonial</h4>
              <div class="widget-body">
                <div class="testimonial-slider owl-carousel">
                  <div class="testimonial-item">
                    <div class="testimonial-item&#45;&#45;header">
                      <div class="thumb"><img src="assets/images/testimonial/1.jpg" alt="image"></div>
                      <div class="content">
                        <h6 class="name">martin hook</h6>
                        <span class="designation">business man</span>
                      </div>
                    </div>
                    <div class="testimonial-item&#45;&#45;body">
                      <p>Tristique consequat, lorem sed vivamus donec eget, nulla pharetra lacinia wisi diamaliquam velit nec.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- car-search-section end -->

  <!-- footer-section start -->
  <footer class="footer-section">
    <!--    <div class="footer-top pt-120 pb-120">-->
    <!--      <div class="container">-->
    <!--        <div class="row">-->
    <!--          <div class="col-lg-4 col-sm-8">-->
    <!--            <div class="footer-widget widget-about">-->
    <!--              <div class="widget-about-content">-->
    <!--                <a href="HomeAdmin.html" class="footer-logo"><img src="assets/images/logo-footer.png" alt="logo"></a>-->
    <!--                <p>Lorem ipsum dolor sit amet, congue placeranec. Leo faucibus sed eleifend bibendum n vehicula nulla mauris nulla ipsum neque sed. Gravida egestas fermentum urna, velit sed. </p>-->
    <!--                <ul class="social-links">-->
    <!--                  <li><a href="#0"><i class="fa fa-facebook"></i></a></li>-->
    <!--                  <li><a href="#0"><i class="fa fa-twitter"></i></a></li>-->
    <!--                  <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>-->
    <!--                  <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>-->
    <!--                </ul>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="col-lg-2 col-sm-4">-->
    <!--            <div class="footer-widget widget-menu">-->
    <!--              <h4 class="widget-title">our cars</h4>-->
    <!--              <ul>-->
    <!--                <li><a href="#0">mistubishi lancer</a></li>-->
    <!--                <li><a href="#0">forester subar</a></li>-->
    <!--                <li><a href="#0">mirage ange</a></li>-->
    <!--                <li><a href="#0">pajero range</a></li>-->
    <!--                <li><a href="#0">subaru liberty</a></li>-->
    <!--              </ul>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="col-lg-2 col-sm-4">-->
    <!--            <div class="footer-widget widget-menu">-->
    <!--              <h4 class="widget-title">useful link</h4>-->
    <!--              <ul>-->
    <!--                <li><a href="#0">about</a></li>-->
    <!--                <li><a href="#0">reservation</a></li>-->
    <!--                <li><a href="#0">faq</a></li>-->
    <!--                <li><a href="#0">blog</a></li>-->
    <!--                <li><a href="#0">car list</a></li>-->
    <!--              </ul>-->
    <!--            </div>-->
    <!--          </div>-->

    </div>
    </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-sm-6">-->
            <p class="copy-right-text"><a href="templateshub.net"></a></p>
          </div>-->
          <div class="col-sm-6">

            <div class="col-lg-4 col-sm-8">
              <div class="footer-widget widget-address">
                <h4 class="widget-title">contact with us</h4>
                <ul>
                  <li>
                    <i class="fa fa-map-marker"></i>
                    <span>Tunis, El menzah 1, 1004</span>
                  </li>
                  <li>
                    <i class="fa fa-envelope"></i>
                    <span>www.luxurycars@gmail.com  www.luxurycars.com</span>
                  </li>
                  <li>
                    <i class="fa fa-phone-square"></i>
                    <span>71216548</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer-section end -->
  
  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  <!-- jquery js link -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- jquery migrate js link -->
  <script src="assets/js/jquery-migrate-3.0.0.js"></script>
  <!-- bootstrap js link -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- lightcase js link -->
  <script src="assets/js/lightcase.js"></script>
  <!-- wow js link -->
  <script src="assets/js/wow.min.js"></script>
  <!-- nice select js link -->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!-- datepicker js link -->
  <script src="assets/js/datepicker.min.js"></script>
  <script src="assets/js/datepicker.en.js"></script>
  <!-- wickedpicker js link -->
  <script src="assets/js/wickedpicker.min.js"></script>
  <!-- owl carousel js link -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- jquery ui js link -->
  <script src="assets/js/jquery-ui.min.js"></script>
  <!-- main js link -->
  <script src="assets/js/main.js"></script>
</body>

</html>
