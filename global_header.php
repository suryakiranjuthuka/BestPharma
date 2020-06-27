<?php
  $url =  "{$_SERVER['REQUEST_URI']}";
  $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );

  if (strpos($escaped_url, 'partial-location') !== false) {
    $individualLocation = "../";
  } else {
    $individualLocation = "";
  }

  // Dynamic Links for the Header
  $home = $individualLocation."index.php";
  $services = $individualLocation."clinic.php";
  $ourTeam = $individualLocation."about.php";
  $ourStores = $individualLocation."location.php";
  $promotions = $individualLocation."promotions.php";
  $newEvents =$individualLocation."media.php";
  $contactUs = $individualLocation."contact.php?form=contactUs";
  $logo = $individualLocation."images/logo.png";
?>

<header>
  <nav class="navbar navbar-expand-lg mb-0" color-on-scroll="100">
      <div class="container" style="position: relative;">
        <div class="contactInfo">
          <a class="phone" href="tel://+91 630-053-2615"><i class="fa fa-phone" aria-hidden="true"></i>+91 630-053-2615</a>
          <a class="email" href="mailto:wecare@bestpharmastores.com"><i class="fa fa-envelope" aria-hidden="true"></i>wecare@bestpharmastores.com</a>
        </div>
          <div id="logo" class="navbar-translate">
              <a class="navbar-brand" href="<?php echo $home; ?>">
                  <img src="<?php echo $logo; ?>"  alt="">
              </a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
              </button>
          </div>
          <div class="collapse navbar-collapse">
              <ul id="navItems" class="navbar-nav ml-auto">
                  <li class="nav-item pl-3 pr-3">
                      <a id="homeNav" href="<?php echo $home; ?>" class="nav-link pl-0 pr-0 pb-2">Home</a>
                  </li>
                  <li class="nav-item pl-3 pr-3">
                      <!-- <div class="dropdown">
                          <a id="servicesNav" class="nav-link dropdown-toggle pl-0 pr-0 pb-2" href="clinic.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              Services
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a id="clinicNav" class="dropdown-item text-uppercase" href="clinic.php">Pharmacy</a>
                            <a class="dropdown-item text-uppercase"  href="clinic.php">Clinic</a>
                            <a id="diagnosticsNav" class="dropdown-item text-uppercase" href="diagnostics.php">Diagnostics</a>
                            <a id="ambulanceNav" class="dropdown-item text-uppercase" href="ambulance.php">Ambulance</a>
                          </div>
                      </div> -->
                      <a href="<?php echo $services; ?>" class="nav-link pl-0 pr-0 pb-2" id="servicesNav">Services</a>
                      <!-- <ul class="list-unstyled dropdowncontainer">
                        <li><a href="#">Pharmacy</a></li>
                        <li><a href="#">Clinic</a></li>
                        <li><a href="#">Diagnostics</a></li>
                        <li><a href="#">Ambulance</a></li>
                      </ul> -->
                  </li>
                  <li class="nav-item pl-3 pr-3">
                      <a id="aboutNav" href="<?php echo $ourTeam; ?>" class="nav-link pl-0 pr-0 pb-2">Our Team</a>
                  </li>
                  <li class="nav-item pl-3 pr-3">
                      <a id="locationNav" href="<?php echo $ourStores; ?>" class="nav-link pl-0 pr-0 pb-2">Our Stores</a>
                  </li>
                  <li class="nav-item pl-3 pr-3">
                      <a id="promotionsNav" href="<?php echo $promotions; ?>" class="nav-link pl-0 pr-0 pb-2">Promotions</a>
                  </li>
                  <li class="nav-item pl-3 pr-3">
                      <a id="mediaNav" href="<?php echo $newEvents; ?>" class="nav-link pl-0 pr-0 pb-2">News &amp; Events</a>
                  </li>
                  <li class="nav-item pl-3 pr-3">
                      <a id="contactNav" href="<?php echo $contactUs; ?>" class="nav-link pl-0 pr-0 pb-2">Contact Us</a>
                  </li>

              </ul>
          </div>
      </div>
  </nav>
</header>
