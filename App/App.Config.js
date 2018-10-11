app.config(["$locationProvider", "$routeProvider", function ($locationProvider, $routeProvider) {

    // Remove /#!/ from url.
    $locationProvider.html5Mode(true);

    // Suffix.
    var urlPrefix = "?" + Math.random().toString(36).substr(2, 5);

    // Routes.
    $routeProvider

        // root/
        .when("/", {
            templateUrl: "App/Controllers/Home/Home.html" + urlPrefix,
            controller: "HomeController"
        })
        .when("/About", {
            templateUrl: "App/Controllers/About/About.html" + urlPrefix,
            controller: "AboutController"
        })
        .when("/Contact", {
            templateUrl: "App/Controllers/Contact/Contact.html" + urlPrefix,
            controller: "ContactController"
        })
        .when("/Privacy", {
            templateUrl: "App/Controllers/Privacy/Privacy.html" + urlPrefix,
            controller: "PrivacyController"
        });

}]);