angular.module('app_landing').controller('login_adm_ctrl', ['$scope', '$http','$timeout', function ($scope, $http,$timeout) {

    $scope.login = {
        user_login: "",
        user_senha: ""
    }

    $scope.doLogin = function () {
        $http({

            method: 'POST',
            url:  "LoginAdm",
            data: $.param($scope.login),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

            console.log(response.data)

            if(response.data.success ==  true){

                window.location.href =  "admIndex"

            }
            }
        );
    }
}]);