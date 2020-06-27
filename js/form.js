var app = angular.module("myApp", []).controller("myCtrl", function ($scope, $http) {
    $scope.gifStatus = false;
    //    contact us form 
    $scope.formDetail = {}
    $scope.contact = function () {
        $scope.gifStatus = true;
        //        $scope.fomrData = [];
        var request = $http({
            method: "post"
            , url: "php/contact_form.php"
            , data: $scope.formDetail
            , headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        });
        request.then(function (response) {
            $scope.formData = response.data;
            if ($scope.formData.status == 200) {
                $scope.gifStatus = false;
                $('#SuccessALert').modal('show');
                $scope.SuccessMessage = "Thank you for providing your details. We will get back to you shortly.";
                $scope.formDetail = {};
            }
            else {
                $scope.gifStatus = false;
                $('#SuccessALert').modal('show');
                $scope.SuccessMessage = "please try after some time,we are down at moment";
            }
        });
    };
    //    Ambulance Booking
    $scope.bookngDetail = {}
    $scope.booknow = function () {
        $scope.gifStatus = true;
        //        $scope.fomrData = [];
        var request = $http({
            method: "post"
            , url: "php/amblance_prebooking.php"
            , data: $scope.bookngDetail
            , headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        });
        request.then(function (response) {
            $scope.formData = response.data;
            if ($scope.formData.status == 200) {
                $scope.gifStatus = false;
                $('#bookingSucess').modal('show');
                $scope.SuccessMessage = "Thank you for providing your details. We will get back to you shortly.";
                $('#prebookambulance').modal('hide');
                $scope.bookngDetail = {};
            }
            else {
                $scope.gifStatus = false;
                $('#bookingSucess').modal('show');
                $scope.SuccessMessage = "please try after some time,we are down at moment";
            }
        });
    };
});
