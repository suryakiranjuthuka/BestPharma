<!doctype html>
<html lang="en">

<head>
    <title>Best Pharma</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <!--    <link href="assets/css/material-kit.css?v=2.1.0" rel="stylesheet" />-->
    <link rel="stylesheet" href="assets/css/material-kit.min.css">

    <!--    Custom Css Styles-->
    <link rel="stylesheet" href="css/main.css">
    <style>
      .best-offers-cards {
        border-radius: 5px;
      }
    </style>
</head>

<body>
  <!--	Including Global Header	-->
  <?php	include("global_header.php");	?>

    <main class="promotions-page">
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active d-none d-md-block"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="d-none d-md-block"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="d-none d-md-block"></li>
                    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="3" class="d-none d-md-block"></li> -->
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/carousel4.png" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/carousel1.png" alt="First slide">
                    </div>
                    <!-- <div class="carousel-item">
                        <img class="d-block w-100" src="images/carousel2.png" alt="Second slide">
                    </div> -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/carousel3.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

        </section>

        <section class="container-fluid pt-5 bg-white" id="bestoffers">
            <div class="container">
                <h2 class="h3 text-center text-uppercase text-md-left pb-4">Best Offers</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-4 mb-5 p-2">
                      <div class="best-offers-cards bg-dark p-4">
                        <div class="d-flex">
                          <div><span class="d-block" style="font-size: 20px; color: #d50000;">Upto</span><span class="d-block" style="font-size: 50px; margin-top: 10px; color: #d50000;">25%</span></div>
                          <h2 class="pl-3" style="font-size: 26px;">Medicines</h2>
                        </div>
                        <div class="pt-3">
                          <ul class="list-unstyled">
                            <li class="list-group-item pl-0 pr-0 pb-0">&#x25CF; No Minimum purchase value</li>
                            <li class="list-group-item pl-0 pr-0 pb-0">&#x25CF; Offer Valid on all pharma products</li>
                            <li class="list-group-item pl-0 pr-0 pb-0">&#x25CF; Offer valid at all Best Pharmacy Stores</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-5 p-2">
                      <div class="best-offers-cards bg-dark p-4">
                        <div class="d-flex">
                          <div><span class="d-block" style="font-size: 20px; color: #d50000;">Flat</span><span class="d-block" style="font-size: 50px; margin-top: 10px; color: #d50000;">5%</span></div>
                          <h2 class="pl-3" style="font-size: 26px;">General Products</h2>
                        </div>
                        <div class="pt-3">
                          <ul class="list-unstyled">
                            <li class="list-group-item pl-0 pr-0 pb-0">&#x25CF; No Minimum purchase value</li>
                            <li class="list-group-item pl-0 pr-0 pb-0">&#x25CF; Offer Valid on all general products</li>
                            <li class="list-group-item pl-0 pr-0 pb-0">&#x25CF; Offer valid at all Best Pharmacy Stores</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-5 p-2">
                      <div class="best-offers-cards bg-dark p-4">
                        <div class="d-flex">
                          <div><span class="d-block" style="font-size: 20px; color: #d50000;">Upto</span><span class="d-block" style="font-size: 45px; margin-top: 10px; color: #d50000;">3Km</span></div>
                          <h2 class="pl-3" style="font-size: 26px;">Free Delivery</h2>
                        </div>
                        <div class="pt-3">
                          <ul class="list-unstyled">
                            <li class="list-group-item pl-0 pr-0 pb-0">&#x25CF; Free Home delivery on all items</li>
                            <li class="list-group-item pl-0 pr-0 pb-0">&#x25CF; Minimum order Rs. 200 for home delivery</li>
                            <li class="list-group-item pl-0 pr-0 pb-0">&#x25CF; Offer valid at all Best Pharmacy Stores</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid bg-white pb-5 d-inline-block" id="ourbrand">
          <div class="container">
              <h2 class="h3 text-center text-uppercase text-md-left pb-4">Our Brand</h2>
              <div class="bg-dark p-4 section--ourbrand">
                <h3 class="h2 mt-0">Upto 50% Off | Buy 1 Get 1 Free</h3>
                <ul class="ml-3">
                  <li class="pb-0"> No Minimum purchase value</li>
                  <li class="pb-0"> Offer valid till stocks last</li>
                  <li class="pb-0"> Offer valid at all Best Pharmacy Stores</li>
                  <li class="pb-0"> Offer valid on selected brands only</li>
                </ul>
              </div>
          </div>
        </section>
        <!-- Brand Products -->
        <section class="container-fluid ourbrand-products">
          <div class="container">
            <h3 class="mb-3">Personal Care</h3>
            <div class="row mb-5">
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (2).png" alt="">
                <h6>Amora Beauty Soap</h6>
                <span>Bath Soap</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (3).png" alt="">
                <h6>Amora Sandal Soap</h6>
                <span>Bath Soap</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (5).png" alt="">
                <h6>Amora Charcoal Soap</h6>
                <span>Handmade Soap</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (12).png" alt="">
                <h6>Amora Goat Milk Soap</h6>
                <span>Handmade Soap</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (14).png" alt="">
                <h6>Amora Neem Soap</h6>
                <span>Handmade Soap</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (4).png" alt="">
                <h6>Best Ear Buds</h6>
                <span>Made of 100% Cotton</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (1).png" alt="">
                <h6>Amora Aloe Vera Gel</h6>
                <span>Skin Moisturizing Gel</span>
              </div>
            </div>
            <hr>
            <h3 class="mb-3 mt-3">Domestic Cleaning</h3>
            <div class="row mb-5">
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (18).png" alt="">
                <h6>Ship Disinfectant Surface Cleaner</h6>
                <span>10X Perfect Cleaning Formula</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (19).png" alt="">
                <h6>Ship Toilet Bowl Cleaner</h6>
                <span>Power Plus Formula</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (7).png" alt="">
                <h6>Ship Dishwash Liquid</h6>
                <span>Lime Flavour</span>
              </div>
            </div>
            <hr>
            <h3 class="mb-3 mt-3">OTC</h3>
            <div class="row mb-5">
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (8).png" alt="">
                <h6>Glucose</h6>
                <span>with Vitamin D</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (10).png" alt="">
                <h6>Glucose</h6>
                <span>Orange Flavour with Vitamin E</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (9).png" alt="">
                <h6>Glucose</h6>
                <span>with Vitamin D</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (11).png" alt="">
                <h6>Glucose</h6>
                <span>Orange Flavour with Vitamin E</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (20).png" alt="">
                <h6>Choiz Vapourizing Rub</h6>
                <span>Relieves Cold Symptoms</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (13).png" alt="">
                <h6>Choiz Inhaler</h6>
                <span>For Clear and Cool breathing</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (16).png" alt="">
                <h6>Quick Aid Pain Oil</h6>
                <span>Pain Reliever Oil</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (15).png" alt="">
                <h6>Quick Aid Balm</h6>
                <span>Pain Balm Strong</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (6).png" alt="" class="w-100">
                <h6>Amora Cracked Heel Cream</h6>
                <span>Herbal Fissure Heel Healer</span>
              </div>
              <div class="col-sm-12 col-md-3">
                <img src="images/brand-products/product (17).png" alt="" class="w-100">
                <h6>Quick Aid Roll On</h6>
                <span>Pain Relief Roll on</span>
              </div>
            </div>

          </div>
        </section>
    </main>

    <!--	Including Global Footer	-->
    <?php	include("global_footer.php");	?>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script>$('nav #navItems #promotionsNav').addClass("nav-active"); // Active Main Nav </script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <!-- <script src="assets/js/plugins/bootstrap-tagsinput.js"></script> -->
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <!-- <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script> -->
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <!-- <script src="assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script> -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/material-kit.js?v=2.1.0" type="text/javascript"></script>
</body>

</html>
