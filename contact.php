<?php
  // Get what kind of form type we get from the url params
  if(isset($_GET['form'])) { $getForm = $_GET['form']; }
  else { $getForm = "contactUs"; }

  // Service Selection Data
  $serviceData = array(
    'contactUs' => array( 'title' => 'Contact Us', 'para' => 'We will get in touch with you soon.' ),
    'homeDelivery' => array( 'title' => 'Home Delivery', 'para' => 'Get free delivery within a 3kms range on a minimum order of ₹200/-' ),
    'doctorAppointment' => array( 'title' => 'Doctor Appointment', 'para' => 'Qualified Doctors at Nominal Consultation Fee.' ),
    'doctorHouseCalls' => array( 'title' => 'Doctor House Calls', 'para' => '35+ Years of Expertise & 24 X 7 Expert Care.' ),
    'healthChecksAtHome' => array( 'title' => 'Health Checks At Home', 'para' => 'Specialized Medical care in the comfort of your home.' ),
    'bedSideAssistance' => array( 'title' => 'Bed Side Assistance', 'para' => 'Get 24X7 Caregivers at home with 1 to 1 Care & Attention' ),
    'diagnostics' => array( 'title' => 'Diagnostic Services', 'para' => 'Our Phlebotomists can also visit your homes to collect Lab Samples' ),
    'ambulancePreBooking' => array( 'title' => 'Ambulance - Pre Booking', 'para' => 'Emergency? We will dispatch an ambulance to your doorstep immediately.' ),
  );
?>

<!doctype html>
<html lang="en">

<head>
    <title>Best Pharma | Contact us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <!-- Material Kit CSS -->
    <!--    <link href="assets/css/material-kit.css?v=2.1.0" rel="stylesheet" />-->
    <link rel="stylesheet" href="assets/css/material-kit.min.css">
    <!--    Custom Css Styles-->
    <link rel="stylesheet" href="css/main.css"> </head>
<style>
    #processing {
        position: fixed;
        top: 50%;
        left: 50%;
        z-index: 1000;
    }

    .contactus-page .section--contactform .card-head {
      background: rgba(68, 138, 255, 1);
      padding: 20px 30px;
      color: #fff;
      border-top-left-radius: 6px;
      border-top-right-radius: 6px;
      border-bottom: 2px solid rgba(0,0,0,.1);
    }

    .contactus-page .section--contactform .card {
      margin-top: 0 !important;
    }

    @media (max-width: 768px) {
      .brand .contactInfo span {
        display: block;
        margin-bottom: 15px;
      }
    }
</style>

<body id="contactUsPage" ng-app="myApp" ng-controller="myCtrl" ng-cloak>
    <!--	Including Global Header	-->
    <?php	include("global_header.php");	?>
        <div class="contactUsHeader header-filter clear-filter pt-5 pb-5 p-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="brand text-center text-white mt-md-5 mb-md-5">
                            <h1 style="font-size: 2.6rem;">Need Help? Contact Us</h1>
                            <p class="h4">We will get in touch with you as soon as possible</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="contactus-page">
          <!-- <section class="actionButtons">
            <div>
              <i class="material-icons rounded-circle">phone</i>
              <div><p>PHONE</p><a class="link-phone" href="tel:+9163005 32615">+91 630-053-2615</a></div>
            </div>
            <div>
              <i class="material-icons rounded-circle">mail_outline</i>
              <div><p>EMAIL</p><a class="link-mail" href="mailto:wecare@bestpharmastores.com">wecare@bestpharmastores.com</a></div>
            </div>
          </section> -->


            <!-- <section class="container-fluid pt-3 pb-3 p-md-5 text-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-4 mb-3 border border-light border-top-0 border-bottom-0 border-left-0 border-sm-right-0"> <i class="material-icons rounded-circle">phone</i>
                            <h4 class="pt-3 pb-3">PHONE</h4> <a class="link-phone" href="tel:+9163005 32615">+91 63005 32615</a> </div>
                        <div class="col-sm-12 col-md-4 mb-3"> <i class="material-icons rounded-circle">mail_outline</i>
                            <h4 class="pt-3 pb-3">EMAIL</h4> <a class="link-mail" href="mailto:wecare@bestpharmastores.com" class="d-block pb-2">wecare@bestpharmastores.com</a> </div>
                    </div>
                </div>
            </section> -->


            <section class="container-fluid bg-dark pt-5 pb-5 p-md-5 section--contactform">
              <div id="processing" ng-show="gifStatus"><img src="./images/loader1.gif" width="10%;" /></div>
                <div class="row justify-content-center">
                  <div class="col-sm-12 col-md-12 col-lg-7" style="margin: 0 10px !important; max-width: 800px; flex: none;">
                    <div class="card">
                      <div class="card-head">
                        <h3 style="font-weight: 600 !important;"><?php echo $serviceData[$getForm]['title']; ?></h3>
                        <h5 style="font-weight: 400 !important;"><?php echo $serviceData[$getForm]['para']; ?></h5>
                        <section class="actionButtons">
                          <div>
                            <i class="material-icons rounded-circle">phone</i>
                            <div><p>PHONE</p><a class="link-phone" href="tel:+9163005 32615">+91 630-053-2615</a></div>
                          </div>
                          <div>
                            <i class="material-icons rounded-circle">mail_outline</i>
                            <div><p>EMAIL</p><a class="link-mail" href="mailto:wecare@bestpharmastores.com">wecare@bestpharmastores.com</a></div>
                          </div>
                        </section>
                      </div>
                      <div class="card-body">
                        <form ng-submit="contact()">
                          <div class="row">
                            <div class="col-6">
                              <div class="form-group">
                                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" ng-model="formDetail.name">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <input type="text" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter Phone" ng-model="formDetail.phone">
                              </div>
                            </div>

                            <div class="contactUsSelect col-12" ng-init="formDetail.select_service='<?php echo $serviceData[$getForm]['title'] ?>'">
                              <label>Selected Service:</label>
                              <i class="material-icons dropicon">expand_more</i>
                              <select class="form-control" ng-model="formDetail.select_service">
                                <option value="Contact Us">Contact Us</option>
                                <option value="Home Delivery">Home Delivery</option>
                                <option value="Doctor Appointment">Doctor Appointment</option>
                                <option value="Doctor House Calls">Doctor House Calls</option>
                                <option value="Health Checks At Home">Health Checks at Home</option>
                                <option value="Bed Side Assistance">Bed Side Assistance</option>
                                <option value="Diagnostic Services">Diagnostic Services</option>
                                <option value="Ambulance - Pre Booking">Ambulance - Pre Booking</option>
                                <option value="Others">Others</option>
                              </select>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email Id" ng-model="formDetail.email">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <input type="text" class="form-control" id="pincode" aria-describedby="pincode" placeholder="Pincode" ng-model="formDetail.pincode">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <textarea class="form-control" id="address" rows="1" placeholder="Address" ng-model="formDetail.address"></textarea>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <input type="text" class="form-control" id="city" aria-describedby="city" placeholder="City" ng-model="formDetail.city">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <input type="text" class="form-control" id="state" aria-describedby="state" placeholder="State" ng-model="formDetail.state">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <textarea class="form-control" id="message" rows="1" placeholder="Message" ng-model="formDetail.message"></textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-white btn-round blue-btn mb-4 ml-2 mb-md-0">Submit</button>
                          </div>
                        </form>
                        <!-- Model Starts -->
                        <div class="modal fade" id="SuccessALert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                              </div>
                              <div class="modal-body">{{SuccessMessage}}</div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-white btn-round blue-btn" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

               <!-- Old Stuff -->
                <!-- <div class="row justify-content-center" style="display: none;">
                    <div class="col-md-8">
                        <div class="card card-nav-tabs">
                            <div class="card-body"> -->
                                <!-- <form ng-submit="contact()">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Name" ng-model="formDetail.name"> </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter Phone" ng-model="formDetail.phone"> </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email Id" ng-model="formDetail.email"> </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="meassage" rows="3" placeholder="Message" ng-model="formDetail.message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-white btn-round blue-btn mb-4 mb-md-0">Send</button>
                                </form> -->
                                <!-- Modal -->
                                <!-- <div class="modal fade" id="SuccessALert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                        <div class="modal-body">{{SuccessMessage}} </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                </div> -->
                                <!-- Model Ending -->
                            <!-- </div>
                        </div>
                    </div>
                </div> -->
            </section>
        </main>
        <!--	Including Global Footer	-->
        <?php	include("global_footer.php");	?>
        <!--   Core JS Files   -->
        <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script>
            $('nav #navItems #contactNav').addClass("nav-active"); // Active Main Nav
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
        <script src="./js/form.js" type="text/javascript"></script>
</body>
</html>
