angular.module('app_landing').controller('landing_ctrl', ['$scope', '$http', 'precadastroService', function ($scope, $http) {

    $scope.dataCad = {
        user_nome: "",
        user_sobrenome: "",
        user_email: ""

    }



    $scope.cadastro = function () {

        if ($scope.dataCad.user_email !== "" && $scope.dataCad.user_sobrenome !== "" && $scope.dataCad.user_nome !== "") {

            $http({

                method: 'POST',
                url: base_url + "home/EnviarEmail",
                data: $.param({Data: $scope.dataCad}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

            }).then(function (response) {


                }
            );

        }
    }
}]);