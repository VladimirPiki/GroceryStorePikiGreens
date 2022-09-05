var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope) {
	$scope.error_alert=false;
  var fullname="";
  $scope.firstName = "Ljubisa";
  $scope.surname = "Doe";
  fullname=$scope.firstName+" "+$scope.surname;
  console.log("Hello");
});