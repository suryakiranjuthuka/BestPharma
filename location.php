<!doctype html>
<html lang="en">

<head>
    <title>Best Pharma | Location</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <!--    <link href="assets/css/material-kit.css?v=2.1.0" rel="stylesheet" />-->
    <link rel="stylesheet" href="assets/css/material-kit.min.css">
    <!--    Custom Css Styles-->
    <link rel="stylesheet" href="css/main.css">
<style>
    #each-location {
        display: flex;
        flex-wrap: wrap;
    }

    #each-location .single-location {
        height: 50vh;
        position: relative;
        overflow: hidden;
    }

    #each-location .single-location .slide1 {
        text-align: center;
        color: #fff;
        height: 50vh;
        width: 100%;
        transform: translateY(40%);
        transition: 0.2s ease-out;
    }

    #each-location .single-location .slide1 h3 {
        font-size: 2rem;
    }

    #each-location .single-location .slide1 .overflow p {
        font-size: 1.08em;
        font-weight: lighter;
        margin: 15px auto;
    }

    #each-location .single-location .slide1 .border-20 {
        margin: auto;
        border-radius: 1px;
        display: block;
        width: 100px;
        border: 1px solid #fff;
        margin: 15px auto;
    }

    #each-location .single-location .slide1 .overflow {
        opacity: 0;
        transition: 0.2s ease-out;
    }

    #each-location .single-location:hover .slide1 {
        transform: translateY(0%);
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #each-location .single-location:hover .overflow {
        opacity: 1;
    }

    .headlocation-page .location-banner {
      background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(./images/ourStores.jpg);
      background-size: cover;
      background-position: 10% 20%;
      border-bottom: 2px solid rgba(255,255,255,.6);
    }

    .headlocation-page .single-location p {
      padding: 0 35px;
    }
</style>
</head>
<body>
    <!--	Including Global Header	-->
    <?php	include("global_header.php");	?>

    <!-- Main Starts -->
    <main class="headlocation-page">
      <div class="section container-fluid pt-5 pb-5 p-md-5 location-banner">
        <h1 class="text-center text-light pt-5 pb-5" style="font-size: 3rem !important;">Our Stores</h1>
      </div>

      <div class="container-fluid p-0">
        <div id="each-location">
          <!-- One -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/1.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Srinivasa Colony</h3>
              <div class="overflow">
                <p class="text-white">9-SBN/G4B, Ground Floor, Srinivasa Colony, Nizampet Village.</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location8.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- One Ends -->

          <!-- Two -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/2.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Neelima Greens Miyapur</h3>
              <div class="overflow">
                <p class="text-white">1-42/NG/M-I/5, Ground Floor, Shop No. 1, Neelima Greens, Plot No. 10, Miyapur.</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location1.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Two Ends -->

          <!-- Three -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/1.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>CBCID</h3>
              <div class="overflow">
                <p class="text-white">16-2-67/9, Plot no. 9, Shop No. 4 Ground Floor CBCID Colony Ramamurty nagar, Hyder nagar, Kukatpally</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location2.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Three Ends -->

          <!-- Four -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/2.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>KTR Colony</h3>
              <div class="overflow">
                <p class="text-white">Door no. 54&55, Shop no. 2&3 Ground Floor Tulasivanam B Block, Road no.-1 KTR Colony, Nizampet-90</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location11.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Four Ends -->

          <!-- Five  -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/1.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Pragathi Nagar - 2</h3>
              <div class="overflow">
                <p class="text-white">Plot No. 858, Shop No. 1, Pragathi Nagar, Kukatpally</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location15.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Five Ends -->

          <!-- Six -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/2.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Attapur</h3>
              <div class="overflow">
                <p class="text-white">#3-3-110//87, Pleasant Park, New Friends Colony, Hyderguda, Attapur.</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location14.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Six Ends -->

          <!-- Seven -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/1.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Huda (Chanda Nagar)</h3>
              <div class="overflow">
                <p class="text-white">13-79, Ground Floor, Shop. No. 1&3, H. No. C3-15, Huda Colny Chanda nagar, Tirumalagiri-50</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location13.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Seven Ends -->

          <!-- Eight  -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/2.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Nagarkurnool</h3>
              <div class="overflow">
                <p class="text-white">#15-31/17, NDT Complex, Opp. Agriculture Market Committee, Main Road, Nagarkurnool, T.S. – 509209</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location12.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Eight Ends -->

          <!-- Nine -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/1.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Bowenpally</h3>
              <div class="overflow">
                <p class="text-white">Near Dubai Gate, Old bowenpally Road, Hasmathpet, Secunderabad</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location6.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Nine Ends -->

          <!-- Ten -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/2.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Nagaram</h3>
              <div class="overflow">
                <p class="text-white">5-98/1/2, Ground Floor Nagaram Village Keesara Mandal</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location7.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Ten Ends -->

          <!-- Eleven -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/1.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>RTC Chandanagar</h3>
              <div class="overflow">
                <p class="text-white">#3-10,Manjeera Road, RTC Colony, Chanda Nagar, Hyderabad.</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location3.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!--Eleven Ends -->

          <!-- Tweleve -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/2.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Pragathi Nagar - 1</h3>
              <div class="overflow">
                <p class="text-white">7-88, Plot no 7&12, Flat no.G4, Shop No. 1, Sri Swarupa Towers, Pragathi Nagar</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location5.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Tweleve Ends -->

          <!-- Thirteen -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/1.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Nizampet, HP Petrol Pump</h3>
              <div class="overflow">
                <p class="text-white">Sree Krutha Sadan Apts., Beside HP petrol pump. Nizampet Village</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location10.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Thirteen Ends -->

          <!-- Fourteen  -->
          <div class="col-sm-12 col-md-6 col-lg-4 single-location p-0 m-0" style="background:url('./images/location/1.jpg') center no-repeat; background-size: cover;">
            <div class="slide1">
              <h3>Mancherial</h3>
              <div class="overflow">
                <p class="text-white">D. No. 8-448,  Main Road, Mancheriyal - 504 208. TS</p>
                <span class="border-16 border-20"></span>
                <a href="" class="btn btn-white btn-round blue-btn mr-2 mb-4 mb-md-0" target="_blank">Get Direction</a>
                <a class="btn btn-secondary btn-round mb-4 mb-md-0" href="partial-location/location4.php">GET DETAIL</a>
              </div>
            </div>
          </div>
          <!-- Fourteen Ends -->
        </div>
      </div>
    </main>
    <!-- Main Ends -->

    <!--	Including Global Footer	-->
    <?php	include("global_footer.php");	?>

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script>
      $('nav #navItems #locationNav').addClass("nav-active"); // Active Main Nav
  </script>
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
