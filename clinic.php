<!doctype html>
<html lang="en">

<head>
    <title>Best Pharma</title>
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
        .clinic-page .doc-details h5 {
            font-size: 14px !important;
        }

        .clinic-page h5 {
            color: #3c3c3c;
        }
        .diagnostics-bg {
        /* background: no-repeat linear-gradient(to right, rgba(255, 255, 255, 0.5), var(--mainBg) 90%), url(images/diagnosticsbg.jpg) fixed; */
        background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(images/diagnosticsbg.jpg);
        background-size: cover;
        background-position: top center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}
.inputfile + label {
    max-width: 80%;
    font-size: 1.25rem;
    /* 20px */
    font-weight: 700;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    padding: 0.625rem 1.25rem;
    /* 10px 20px */
}

.no-js .inputfile + label {
    display: none;
}

.inputfile:focus + label,
.inputfile.has-focus + label {
    outline: 1px dotted #000;
    outline: -webkit-focus-ring-color auto 5px;
}

.inputfile + label * {
    /* pointer-events: none; */
    /* in case of FastClick lib use */
}

.inputfile + label svg {
    width: 1em;
    height: 1em;
    vertical-align: middle;
    fill: currentColor;
    margin-top: -0.25em;
    /* 4px */
    margin-right: 0.25em;
    /* 4px */
}


/* style 1 */

.inputfile-1 + label {
    color: #f1e5e6;
    background-color: #d3394c;
}

.inputfile-1:focus + label,
.inputfile-1.has-focus + label,
.inputfile-1 + label:hover {
    background-color: #722040;
}
    </style>
</head>

<body>
    <!--	Including Global Header	-->
    <?php	include("global_header.php");	?>
        <main class="clinic-page">
            <section class="container-fluid pt-5 bg-white" id="section--pharmacy">
                <div class="container">
                    <h2 class="head-typo-color pb-4">Pharmacy</h2>
                    <div class="row mb-5">
                        <div class="col-sm-12 col-md-6 pr-md-5">
                            <p class="text-muted pb-2">Our Best Pharmacy &amp; Clinics have associated with qualified medical doctors dispensing prescription drugs and providing clinical and diagnostic services for a nominal consulting fee.</p>
                            <p class="pb-2 text-muted">Best Pharmacy &amp; Clinics provide quality and affordable healthcare services right to your doorstep. Whether it is questions about your medication, ambulance incase of an emergency or prescription management, we aid to offer services to cover all your medical needs. </p>
                            <p class="pb-2 text-muted">With these and many more health services, Best Pharmacy &amp; Clinic aims to bring you hassle-free healthcare services to your home.</p>
                        </div>
                        <div class="col-sm-12 col-md-6 p-0" style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);"> <img src="images/about-us.png" alt="" height="300" class="d-block m-auto w-100">
                            <div class="pl-5 pr-5 pt-2 pb-2" style="background-color: gray">
                                <h5 class="text-center" style="color: rgba(255,255,255, .78)">All your health care needs addressed at your doorsteps.</h5> </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-fluid pb-5 bg-white pt-2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 mb-4">
                            <div class="pharmacyTile">
                                <section>
                                    <div class="image"><img src="images/doc.png" alt="" class="mr-3"></div>
                                    <h4>Doctors</h4> </section>
                                <ul>
                                    <li>Qualified Doctors</li>
                                    <li>Nominal Consultation Fee</li>
                                    <li>We have designated doctor at every store</li>
                                </ul><a href="about.php#ourDoctors" class="tileButton btn btn-white btn-round blue-btn-outline mt-4">View Doctors</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-4">
                            <div class="pharmacyTile">
                                <section>
                                    <div class="image"><img src="images/docMobile.png" alt="" class="mr-3"></div>
                                    <h4>Place An Order</h4> </section>
                                <ul>
                                    <li>Place order by phone</li>
                                    <li>Order Online by Uploading your prescription</li>
                                    <li>Medical services are a phone call away</li>
                                </ul> <a href="tel://+91 630-053-2615" class="tileButton btn btn-white btn-round blue-btn-outline mt-4">Call Now</a>
                                <a href="#" style="position: relative; right: 20px;" class="tileButton btn btn-white btn-round blue-btn-outline mt-4" data-toggle="modal" data-target="#upload-prescription">Upload Now</a></div>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-4">
                            <div class="pharmacyTile">
                                <section>
                                    <div class="image"><img src="images/free-delivery.png" style="opacity:.6;" alt="" class="mr-3"></div>
                                    <h4>Free Delivery</h4> </section>
                                <ul>
                                    <li>Get free delivery within a 3kms range</li>
                                    <li>Minimum order value of ₹200/-</li>
                                    <li>Stay home and get a free delivery</li>
                                </ul> <a href="contact.php?form=homeDelivery" class="tileButton btn btn-white btn-round blue-btn-outline mt-4">Order Now</a> </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Prescription Model Pop-UP -->
            <div class="modal fade" id="upload-prescription" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="text-center" id="ModalLabel">Upload Prescription</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <form action="./php/prescription_upload.php" enctype="multipart/form-data" method="POST" id="uploadform">
                            <div class="modal-body">
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text">
                                        <i class="material-icons">phone_iphone</i>
                                      </span> </div>
                                    <input type="tel" name="phone" pattern="[1-9]{1}[0-9]{9}" id="phoneUpload" class="form-control" placeholder="Phone Number" required> </div>
                            </div>
                            <div class="text-center mt-3 mb-3">
                              <span>
                                <input id="fileUpload" name="prescription" type="file" required></span>
                                <br /> <span id="lblError" style="color: red;">
                              </span>
                              <!-- <input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                              <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                              <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" /></svg> <span>Choose a file&hellip;</span></label> -->
                            </div>
                            <div class="pl-5">
                              <button type="submit" id="btnUpload" name="submit" class="btn btn-white btn-round blue-btn" onclick="return ValidateExtension()">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <section class="container-fluid pt-5 pb-5 p-md-5 bg-light" id="section--clinicservices">
                <div class="container">
                    <h2 class="head-typo-color pb-3">Clinic</h2>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 p-0" style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);"> <img src="images/clinical-services.jpg" alt="" height="300" class="d-block m-auto w-100">
                            <div class="pl-5 pr-5 pt-2 pb-2" style="background-color: gray">
                                <h5 class="text-center" style="color: rgba(255,255,255, .78)">Just a Call many services.</h5> </div>
                        </div>
                        <div class="col-sm-12 col-md-6 pl-md-5">
                            <p class="text-muted pb-2">Each of our stores has an in-house qualified practitioner of general medicine to dispense basic medical advice and treatment. Our dedicated clinics offer you advice and support of our expert physicians, who are the best in their fields. Our clinics offer key specialties and super specialties, to ensure that no matter what the problem is, we can help you come out of it. </p>
                            <p class="text-muted pb-2">The doctors are assisted by qualified Every one of our stores has an in-house qualified practitioner of general medicine to dispense basic medical advice and treatment and who are available on call.</p>
                        </div>
                    </div>
                </div>
                <div id="clinicHighlightsContainer" class="container">
                  <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-5 col-lg-4 mb-4">
                        <div class="clinicHighlight">
                          <section class="clinicHighlightHeader">
                            <div class="image"><img src="images/phone.png"></div>
                            <h4>Doctor House Calls</h4>
                            <p>Every store has a qualified doctor and nursing staff with specialists available on call. Free Emergency Medical Advice.</p>
                          </section>
                          <section class="clinicHighlightFooter">
                            <ul>
                              <li>35+ Years of Expertise </li>
                              <li>24 X 7 Expert Care</li>
                              <li>Free Emergency Medical Advice;</li>
                              <li>Experienced and Qualified Doctors;</li>
                              <li>Specialists available on call;</li>
                              <li>Consult the doctor right from your doorstep;</li>
                            </ul> <a href="contact.php?form=doctorHouseCalls" class="btn btn-white btn-round blue-btn mt-lg-4">Book an Appointment</a>
                          </section>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-4 mb-4">
                        <div class="clinicHighlight">
                          <section class="clinicHighlightHeader">
                            <div class="image"><img src="images/stet.png"></div>
                            <h4>Health Checks at Home</h4>
                            <p>Specialists and Nurses offer home visits so that you can access health care from the comfort of your own home.</p>
                          </section>
                          <section class="clinicHighlightFooter">
                            <ul>
                              <li>Nominal Consultation Charges;</li>
                              <li>Appointments that suit your time & schedule;</li>
                              <li>Specialized Medical care in the comfort of your home;</li>
                              <li>Specialists and Nurses offer home visits;</li>
                              <li>No Queues;</li>
                            </ul> <a href="contact.php?form=healthChecksAtHome" class="btn btn-white btn-round blue-btn mt-lg-4">Book an Appointment</a>
                          </section>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-4 mb-4">
                        <div class="clinicHighlight">
                          <section class="clinicHighlightHeader">
                            <div class="image"><img src="images/bed.png"></div>
                            <h4>Bedside Caregivers</h4>
                            <p>Our Bedside caregivers are specially trained to cater to your activities of daily living.</p>
                          </section>
                          <section class="clinicHighlightFooter">
                            <ul>
                              <li>Get 24X7 caregivers at home; </li>
                              <li>1 to 1 Care & Attention; </li>
                              <li>All Caregivers are Verified for Background Checks and Records;</li>
                              <li>Mouth Care, Feeding, Vital Checks, Administer Medication, Exercise Help, Diaper change, Bedpan, Urinal & more.</li>
                            </ul><a href="contact.php?form=bedSideAssistance" class="btn btn-white btn-round blue-btn mt-lg-4">Book an Appointment</a>
                          </section>
                        </div>
                    </div>
                  </div>
                </section>
            </section>
        </main>

        <main class="diagnostics-page">
          <section class="container-fluid pt-5 bg-white" id="section--diagnostics">
              <div id="diagnosticsContainer" class="container">
                  <h2 class="head-typo-color pb-4">Diagnostic Services</h2>
                  <div class="row mb-5">
                      <div class="col-sm-12 col-md-6 pr-md-5 mb-3 mb-md-0">
                          <p class="text-muted pb-2" style="padding-bottom: 0px!important;">All of our pharmacies provide diagnostic services dispensed by qualified medical staff. Our Phlebotomists can also visit your homes at your convenient times to collect Lab Samples and the results will be emailed to you or can be accessed online. Find out more by calling us or visiting our store clinic.</p>
                          <ul>
                            <li>Laboratories, where tests are done, are National Accreditation Board for Testing and Calibration Laboratories (NABL) accredited;</li>
                            <li>Wide range of preventive Health Check-ups;</li>
                            <li>Full History of all tests is maintained on Electronic Medical Records;</li>
                            <li>Home collection of samples; | Test Reports can be emailed;</li>
                            <li>Most Lab Reports will be available within 12 hours;</li>
                          </ul>
                      </div>
                      <div class="col-sm-12 col-md-6 p-0" style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);"> <img src="images/diagnosticsImage.png" alt="" height="300" class="d-block m-auto w-100">
                          <div class="pl-5 pr-5 pt-2 pb-2" style="background-color: gray">
                              <h5 class="text-center" style="color: rgba(255,255,255, .78)">Wide range of Health Check-ups Available</h5> </div>
                      </div>
                  </div>
              </div>
          </section>
            <section class="container-fluid">
                <div class="container">
                    <div class="diagnosticsDetails row mt-3">
                      <span style="text-align: center;" class="d-block m-auto d-md-inline-block">
                        <div><img src="images/microscope.png"></div>
                        <a href="contact.php?form=diagnostics" class="btn btn-white btn-round blue-btn mt-lg-4">Book an Appointment</a>
                      </span>
                      <section>
                        <div><img src="images/hospital.png">CT Scan/MRI</div>
                        <div><img src="images/hospital.png">Pathology laboratory</div>
                        <div><img src="images/hospital.png">General Pathology</div>
                        <div><img src="images/hospital.png">Complete Blood Test</div>
                        <div><img src="images/hospital.png">Diagnostic & Pathology</div>
                        <div><img src="images/hospital.png">Test for Heart Attack</div>
                        <div><img src="images/hospital.png">Blood Group Test</div>
                        <div><img src="images/hospital.png">Pathology Lab Services</div>
                        <div><img src="images/hospital.png">Blood Test</div>
                        <div><img src="images/hospital.png">Pathology Lab</div>
                        <div><img src="images/hospital.png">Test for Heart Attack</div>
                        <div><img src="images/hospital.png">X-Ray</div>
                        <div><img src="images/hospital.png">Path Laboratory</div>
                      </section>
                    </div>
                </div>
            </section>
        </main>
        <section class="container-fluid pt-5 pb-5 p-md-5 bg-light" id="section--ambulance">
            <div class="container">
                <h2 class="head-typo-color pb-3">Emergency Ambulance Services</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-6 p-0 mb-3 mb-md-0" style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);"> <img src="images/yellowAmbulance.png" alt="" height="300" class="d-block m-auto w-100">
                        <div class="pl-5 pr-5 pt-2 pb-2" style="background-color: gray">
                            <h5 class="text-center" style="color: rgba(255,255,255, .78)">Just a Call & an Ambulance will be at Your Doorstep</h5> </div>
                    </div>
                    <div class="col-sm-12 col-md-6 pl-md-5">
                        <p class="text-muted pb-2">Do you have an emergency at home? Just one phone call to us and we will dispatch an ambulance to your doorstep immediately to provide prompt medical service.</p>
                        <div class="ambulanceHighlights">
                          <div><span><img src="images/ambulance.png">Pre Booking</span><a href="contact.php?form=ambulancePreBooking" class="btn btn-white blue-btn mt-lg-4">Book Now</a></div>
                          <div><span><img src="images/ambulance.png">Emergency Booking</span><a href="tel:+91-98765-43210" class="btn btn-white blue-btn mt-lg-4">Call Now</a></div>
                          <div><span><img src="images/ambulance.png">Tariff Card</span><a href="Tarrif Card 1.xlsx" class="btn btn-white blue-btn mt-lg-4">Download</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--	Including Global Footer	-->
        <?php	include("global_footer.php");	?>
            <!--   Core JS Files   -->
            <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
            <script>
                $('nav #navItems #servicesNav').addClass("nav-active"); // Active Main Nav
            </script>
            <script type="text/javascript">
                function ValidateExtension() {
                    //                                    phone validation
                    //                                    file validation
                    var allowedFiles = [".doc", ".docx", ".pdf", ".jpg", ".png",".jpeg"];
                    var fileUpload = document.getElementById("fileUpload");
                    var lblError = document.getElementById("lblError");
                    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
                    if (!regex.test(fileUpload.value.toLowerCase())) {
                        lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
                        return false;
                    }
                    if (fileUpload.files[0].size > 5073741824) // 5 mb for bytes.
                    {
                        lblError.innerHTML = "Please upload files size < 5M:";
                        return false;
                    }
                    lblError.innerHTML = "";
                    return true;
                }
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
            <script>
              ( function ( document, window, index ) {
                var inputs = document.querySelectorAll( '.inputfile' );
                Array.prototype.forEach.call( inputs, function( input )
                {
                  var label	 = input.nextElementSibling,
                    labelVal = label.innerHTML;

                  input.addEventListener( 'change', function( e )
                  {
                    var fileName = '';
                    if( this.files && this.files.length > 1 )
                      fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                    else
                      fileName = e.target.value.split( '\\' ).pop();

                    if( fileName )
                      label.querySelector( 'span' ).innerHTML = fileName;
                    else
                      label.innerHTML = labelVal;
                  });

                  // Firefox bug fix
                  input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
                  input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
                });
              }( document, window, 0 ));
            </script>
</body>

</html>
