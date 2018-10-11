app.controller("ContactController", ["$rootScope", "$scope", "$http", function ($rootScope, $scope, $http) {

    $rootScope.page.title = "Contact";
    $scope.message = "";

    $http.get("/api.php?controller=Contact&action=GetMessage").then(function (response) {
        $scope.message = response.data.message;
    }).catch(function (response) {
        console.log(response);
    });

}]);