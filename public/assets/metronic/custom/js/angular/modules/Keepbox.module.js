angular.module('app_fashon', []);
angular.module('app_fashon').run(["$http", function ($http) {
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
}]);