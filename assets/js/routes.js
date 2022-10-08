app.config(function($routeProvider) {
  $routeProvider
  .when("/main", {
    templateUrl : "view/home.html",
	controller:"myCtrl"
  })
  .when("/dukani", {
    templateUrl : "view/dukani.html",
	controller:"myCtrl"
  })
  .when("/prodazba", {
    templateUrl : "view/prodazba.html",
	controller:"myCtrl"
  })
  .when("/proizvodi", {
    templateUrl : "view/proizvodi.html",
	controller:"myCtrl"
  })
  .when("/rabotnik", {
    templateUrl : "view/rabotnik.html",
	controller:"myCtrl"
  })
  .when("/vraboteni", {
    templateUrl : "view/vraboteni.html",
	controller:"myCtrl"
  })
  .when("/details_dukani", {
    templateUrl : "view/details_dukani.html",
	controller:"myCtrl"
  })
  .when("/details_prodazba", {
    templateUrl : "view/details_prodazba.html",
	controller:"myCtrl"
  })
  .when("/details_proizvodi", {
    templateUrl : "view/details_proizvodi.html",
	controller:"myCtrl"
  })
  .when("/details_rabotnik", {
    templateUrl : "view/details_rabotnik.html",
	controller:"myCtrl"
  })
  .when("/details_vraboteni", {
    templateUrl : "view/details_vraboteni.html",
	controller:"myCtrl"
  })
});