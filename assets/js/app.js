var app = angular.module('myApp', ["ngRoute"]);
app.controller('myCtrl', function($scope,$http) {
	$scope.error_alert=false;
  $scope.success_alert=false;
  console.log("Ova e piljara");


  /////JSON/////
  $scope.dukani=[];
  $http.get("model/select.php?table_name=dukani").then(function(response) {
    $scope.dukani = response.data;
  });

  $scope.prodazba=[];
  $http.get("model/select.php?table_name=prodazba").then(function(response) {
    $scope.prodazba = response.data;
  });

  $scope.proizvodi=[];
  $http.get("model/select.php?table_name=proizvodi").then(function(response) {
    $scope.proizvodi = response.data;
  });

  $scope.rabotnik=[];
  $http.get("model/select.php?table_name=rabotnik").then(function(response) {
    $scope.rabotnik = response.data;
  });

  $scope.vraboteni=[];
  $http.get("model/select.php?table_name=vraboteni").then(function(response) {
    $scope.vraboteni = response.data;
  });

  ////////Functions/////////////

  function postData(file,objData){
    $http({
      method : "POST",
      url : "model/"+file+".php",
      data: objData
    }).then(function mySuccess(_response) {
      $scope.alert_success=true;
      $scope.error_alert=false;
    }, function myError(_response) {
      $scope.error_alert=true;
      $scope.alert_success=false;
    });
  }

  $scope.erorr=function(){
    $scope.error_alert=true;
    $scope.success_alert=false;
  }

///Button function of details --> Insert in Database

  $scope.function_dukani=function(adresa,telefon,grad){
    objDukani=[];
    objDukani.push({"adresa":adresa,"telefon":telefon,"grad":grad});
    console.log("objDukani");
    postData("insert",objDukani);
  };

  $scope.function_prodazba=function(prodazba_datum,promet,prodadeno_kg,rasipano_kg,rabotnik_id)
  {
    var objProdazba=[];
    objProdazba.push({"prodazba_datum":prodazba_datum,"promet":promet,"prodadeno_kg":prodadeno_kg,"rasipano_kg":rasipano_kg,"rabotnik_id":rabotnik_id});
    console.log(objProdazba);
    postData("insert",objProdazba);
  }

  $scope.function_proizvodi=function(ime,tip,kg,cena,datum_priem)
  {
    var objProizvodi=[];
    objProizvodi.push({"ime":ime,"tip":tip,"kg":kg,"cena":cena,"datum_priem":datum_priem});
    console.log(objProizvodi);
    postData("insert",objProizvodi);
  }

  $scope.function_rabotnik=function(datum,smena,dukani_id,vraboteni_id)
  {
    var objRabotnik=[];
    objRabotnik.push({"datum":datum,"smena":smena,"kg":kg,"dukani_id":dukani_id,"vraboteni_id":vraboteni_id});
    console.log(objRabotnik);
    postData("insert",objRabotnik);
  }

  $scope.function_vraboteni=function(ime,prezime,grad,plata)
  {
    var objVraboteni=[];
    objVraboteni.push({"ime":ime,"prezime":prezime,"grad":grad,"plata":plata});
    console.log(objVraboteni);
    postData("insert",objVraboteni);
  }

    ///Delete functions --> Button function of view table

    $scope.getIndex=0;
    $scope.passPosition=function(position,index) // position=3
    {
      console.log("position="+position);
      $scope.getIndex=position; // 3
    }
    
    $scope.deleteRow=function(table_name,pk_value)
    {
      var objDelete=[];
      objDelete.push({"table_name":table_name,"pk_value":pk_value});
      postData("delete",objDelete);
    }
  
});