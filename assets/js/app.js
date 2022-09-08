var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope) {
	$scope.error_alert=false;
  var fullname="";
  $scope.firstName = "Vladimir";
  $scope.surname = "Krstevski";
  fullname=$scope.firstName+" "+$scope.surname;
  console.log("Ova e piljara");
});