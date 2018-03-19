angular.module("app_fashon").controller("loginCtrl", ['$scope', 'loginService', '$timeout', function ($scope, loginService, $timeout) {

    $scope.loginForm = {
        msg: {}
    };

    // Fazer loginForm
    $scope.doLogin = function () {

        $scope.loginForm.loading = true;
        $scope.loginForm.msg = {};

        loginService.doLogin({data: $scope.loginForm}).then(function (Response) {

            $scope.loginForm.loading = false;
            if (Response.data.success) {
                $scope.loginForm.msg.success = Response.data.text;

                    console.log(Response.data)

                if(Response.data.user_type == 1) {
                    $timeout(function () {
                        window.location.href = Response.data.href;
                    }, 300);
                }   else {
                    $timeout(function () {
                        window.location.href = Response.data.href2;
                    }, 300);
                }

            }
            else {
                $scope.loginForm.msg[Response.data.type] = Response.data.text;
            }
        });

    };

    // Recuperação de senha
    $scope.Recuperacao = function () {

        var email = $("#email-recuperacao").val();

        if (email !== "") {
            console.log(email);
        }
        else {

        }

    };

}]);