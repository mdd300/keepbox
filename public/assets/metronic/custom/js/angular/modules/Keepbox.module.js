angular.module('app_landing', []);
angular.module('app_landing').run(["$http", function ($http) {
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
}]);