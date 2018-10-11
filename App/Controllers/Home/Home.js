app.controller("HomeController", ["$rootScope", "$scope", "$http", function ($rootScope, $scope, $http) {

    $rootScope.page.title = "Home";
    $scope.message = "";

    $http.get("/api.php?controller=Home&action=GetMessage").then(function (response) {
        $scope.message = response.data.message;
    }).catch(function (response) {
        console.log(response);
    });

}]);