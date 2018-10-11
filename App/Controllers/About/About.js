app.controller("AboutController", ["$rootScope", "$scope", "$http", function ($rootScope, $scope, $http) {

    $rootScope.page.title = "About";
    $scope.message = "";

    $http.get("/api.php?controller=About&action=GetMessage").then(function (response) {
        $scope.message = response.data.message;
    }).catch(function (response) {
        console.log(response);
    });

}]);