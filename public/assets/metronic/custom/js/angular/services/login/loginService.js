angular.module('app_fashon').service('loginService', ['$http', function($http){

    var _doLogin = function(params){

        return $http({
            method: 'POST',
            data: $.param(params.data),
            url: window.base_url + 'login/do_login',
            headers: {"Content-Type": "application/x-www-form-urlencoded"}
        });

    };

    return {
        doLogin: _doLogin
    };

}]);