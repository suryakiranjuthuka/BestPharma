<?php
  $url =  "{$_SERVER['REQUEST_URI']}";
  $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

  if (strpos($escaped_url, 'partial-location') !== false) {
    $individualLocation = "../";
  } else {
    $individualLocation = "";
  }

  // Dynamic Links for the Footer
  $home = $individualLocation."index.php";
  $services = $individualLocation."clinic.php";
  $ourTeam = $individualLocation."about.php";
  $ourStores = $individualLocation."location.php";
  $promotions = $individualLocation."promotions.php";
  $newEvents =$individualLocation."media.php";
  $contactUs = $individualLocation."contact.php?form=contactUs";
  $logo = $individualLocation."images/logo.png";
?>

<!--Offer Banner Ends-->

<section class="weprovide-strip text-center pt-4 pb-4 pl-5 pl-md-0">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 mb-md-0">
        <div class="d-flex">
          <img src="<?php echo $individualLocation; ?>images/footer-strip-icon1.png" alt="" width="60" height="60">
          <div>
            <h5 class="pl-1 pl-md-2 pt-2">100% Genuine Products</h5>
            <p>Sourced directly from brands</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 mb-md-0">
      <div class="d-flex">
        <img src="<?php echo $individualLocation; ?>images/footer-strip-icon2.png" alt="" width="60" height="60">
        <div>
          <h5 class="pl-1 pl-md-2 pt-2">Free Home Delivery</h5>
          <p>Minimum Order of ₹200/-</p>
        </div>
      </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 mb-md-0">
      <div class="d-flex">
          <img src="<?php echo $individualLocation; ?>images/footer-strip-icon3.png" alt="" width="60" height="60">
          <div>
            <h5 class="pl-1 pl-md-2 pt-2">500+ Brands</h5>
            <p>Variety of products</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 mb-3 mb-md-0">
      <div class="d-flex">
        <img src="<?php echo $individualLocation; ?>images/footer-strip-icon4.png" alt="" width="60" height="60">
        <div>
          <h5 class="pl-1 pl-md-2 pt-2">Best deals and discounts</h5>
          <p>The best offers you can ask for</p>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <div class="cssreloader">
  <div class="ball-scale-multiple">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div> -->

<section class="callUs">
    <div class="container">
      <h4>Need Any Help? Contact Us.<h4>
      <div class="contactInfo">
        <a class="phone d-block d-md-inline" href="tel://+91 630-053-2615"><i class="fa fa-phone" aria-hidden="true"></i>+91 630-053-2615</a>
        <a class="email d-block d-md-inline mt-3 mt-md-0" href="mailto:wecare@bestpharmastores.com"><i class="fa fa-envelope" aria-hidden="true"></i>wecare@bestpharmastores.com</a>
      </div>
    </div>
</section>

<footer class="container-fluid footer footer-default p-md-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-12 col-md-4 text-center text-md-left">
              <img src="<?php echo $logo; ?>" alt="" width="150">
              <p class="pt-4 pb-4 text-light">Best Pharmacy & Clinic aims to bring you  hassle-free healthcare services to your home.</p>
            </div>
            <div id="quickLinks" class="col-sm-12 col-md-4 text-center text-md-left">
                <h3 class="blockquote text-light pb-2 text-uppercase" style="padding: 2px 20px !important;">Quick Links</h3>
                <ul class="list-unstyled">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <li class="d-block"><a href="<?php echo $home; ?>" class="nav-link text-light font-weight-bold">Home</a></li>
                      <li class="d-block"><a href="<?php echo $ourTeam; ?>" class="nav-link text-light font-weight-bold">Our Team</a></li>
                      <li class="d-block"><a href="<?php echo $ourStores; ?>" class="nav-link text-light font-weight-bold">Our Stores</a></li>
                      <li class="d-block"><a href="<?php echo $promotions; ?>" class="nav-link text-light font-weight-bold">Promotions</a></li>
                      <li class="d-block"><a href="<?php echo $newEvents; ?>" class="nav-link text-light font-weight-bold">News &amp; Events</a></li>
                      <li class="d-block"><a href="<?php echo $contactUs; ?>" class="nav-link text-light font-weight-bold">Contact us</a></li>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <li class="d-block"><a href="<?php echo $services; ?>" class="nav-link text-light font-weight-bold">Services</a></li>
                      <li class="d-block"><a href="<?php echo $services.'#section--pharmacy'; ?>" class="nav-link text-light font-weight-bold"><i class="fa fa-caret-right d-none d-md-inline-block" aria-hidden="true"></i> Pharmacy</a></li>
                      <li class="d-block"><a href="<?php echo $services.'#section--clinicservices'; ?>" class="nav-link text-light font-weight-bold"><i class="fa fa-caret-right d-none d-md-inline-block" aria-hidden="true"></i> Clinic</a></li>
                      <li class="d-block"><a href="<?php echo $services.'#section--diagnostics'; ?>" class="nav-link text-light font-weight-bold"><i class="fa fa-caret-right d-none d-md-inline-block" aria-hidden="true"></i> Diagnostic</a></li>
                      <li class="d-block"><a href="<?php echo $services.'#section--ambulance'; ?>" class="nav-link text-light font-weight-bold"><i class="fa fa-caret-right d-none d-md-inline-block" aria-hidden="true"></i> Ambulance</a></li>
                    </div>
                  </div>
                </ul>
            </div>
            <div id="social" class="col-sm-12 col-md-4 text-center text-md-left">
                <h3 class="blockquote text-light pb-2 text-uppercase mt-4 mt-md-0" style="padding: 2px 20px !important;">Social</h3>
                <h6 class="pl-2 pb-2 text-light">SHOW US SOME &nbsp; <i class="fa fa-heart" aria-hidden="true"></i> &nbsp; ON SOCIAL MEDIA</h6>
                <ul>
                    <li>
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
