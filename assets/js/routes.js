app.config(function($routeProvider) {
  $routeProvider
  .when("/home", {
    templateUrl : "view/main.html",
	controller:"myCtrl"
  })
  .when("/igrachi", {
    templateUrl : "view/igrachi.html",
	controller:"myCtrl"
  })
  .when("/income", {
    templateUrl : "view/income.html",
	controller:"myCtrl"
  })
  .when("/natprevaruvanje", {
    templateUrl : "view/natprevaruvanje.html",
	controller:"myCtrl"
  })
  .when("/outcome", {
    templateUrl : "view/outcome.html",
	controller:"myCtrl"
  })
  .when("/publika", {
    templateUrl : "view/publika.html",
	controller:"myCtrl"
  })
  .when("/sostav", {
    templateUrl : "view/sostav.html",
	controller:"myCtrl"
  })
  .when("/stadion", {
    templateUrl : "view/stadion.html",
	controller:"myCtrl"
  })
  .when("/uprava", {
    templateUrl : "view/uprava.html",
	controller:"myCtrl"
  })
});