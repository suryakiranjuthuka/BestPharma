$(document).ready(function() {
  // // $('#common-header').load("header");
  // $("a").on("click", function(event) {
  //   // Make sure this.hash has a value before overriding default behavior
  //   if (this.hash !== "") {
  //     // Prevent default anchor click behavior
  //     event.preventDefault();

  //     // Store hash
  //     var hash = this.hash;

  //     // Using jQuery's animate() method to add smooth page scroll
  //     $("html, body").animate(
  //       {
  //         scrollTop: $(hash).offset().top
  //       },
  //       600,
  //       function() {
  //         // Add hash (#) to URL when done scrolling (default click behavior)
  //         window.location.hash = hash;
  //       }
  //     );
  //   } // End if
  // });

  $(".scroll").on("click", function(e) {
    e.preventDefault();

    var dest = $(this).attr("href");

    $("html, body").animate(
      {
        scrollTop: $(dest).offset().top
      },
      1000,
      $.bez([0.86, 0, 0.07, 1])
    );
  });

  // $(".js--forAnimation-5").waypoint(
  //   function(direction) {
  //     $(".js--forAnimation-5").addClass("animated fadeInUp");
  //   },
  //   {
  //     offset: "95%"
  //   }
  // );
  // $(".js--forAnimation-6").waypoint(
  //   function(direction) {
  //     $(".js--forAnimation-6").addClass("animated fadeInUp");
  //   },
  //   {
  //     offset: "95%"
  //   }
  // );
});
