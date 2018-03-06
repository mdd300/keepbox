angular.module('app_pre_cadastro', []);

angular.module('app_pre_cadastro').run(['$http', function( $http ){
    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
}]);