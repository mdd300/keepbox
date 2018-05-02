angular.module('app_landing').controller('landing_ctrl', ['$scope', '$http','$location', function ($scope, $http,$location) {

    var url = new URL(window.location.href);

    $scope.idCliente = url.searchParams.get("id");

    $scope.singIn = {
        user_login: "",
        user_senha: ""
    }
    $scope.login_press = false;

    if ($scope.idCliente !== null && $scope.idCliente !== undefined && $scope.idCliente !== "") {

        $scope.dataCad = {
            user_endereco: "",
            user_numero: "",
            user_complemento: "",
            user_cidade: "",
            user_estado: "",
            user_telefone: "",
            user_login: "",
            user_senha: "",
            user_confirmar_senha: "",
        }

        $scope.step2 = true;

        $scope.cadastro = function () {

            if ($scope.dataCad.user_senha.length > 5) {
                if ($scope.dataCad.user_senha == $scope.dataCad.user_confirmar_senha) {

                    if ($scope.dataCad.user_endereco !== "" && $scope.dataCad.user_numero !== "" && $scope.dataCad.user_login !== ""
                        && $scope.dataCad.user_senha !== "") {

                        $http({

                            method: 'POST',
                            url: base_url + "home/cadastroFinalizar",
                            data: $.param({id: $scope.idCliente, Data: $scope.dataCad}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                        }).then(function (response) {

                                console.log(response)

                            }
                        );
                    }else{

                    }
                }else{

                }
            }else{

            }
        }
    } else {

        $scope.dataCad = {
            user_nome: "",
            user_sobrenome: "",
            user_email: ""

        }

        $scope.step1 = true;

        $scope.cadastro = function () {

            if ($scope.dataCad.user_email !== "" && $scope.dataCad.user_sobrenome !== "" && $scope.dataCad.user_nome !== "") {

                $http({

                    method: 'POST',
                    url: base_url + "home/cadastro_email",
                    data: $.param({Data: $scope.dataCad}),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                }).then(function (response) {

                        console.log(response)

                    }
                );

            }
        }
    }

    $scope.login = function () {

        $http({

            method: 'POST',
            url: base_url + "home/Login",
            data: $.param($scope.singIn),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

                if(response.data.success){
                    var id = response.data.id;
                    console.log(response.data.id)
                    $http({

                        method: 'POST',
                        url: base_url + "Sistema/getData",
                        data: $.param({id:parseInt(id)}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                    }).then(function (response) {

                            if(response.data.success == true){

                                $scope.dataUser = response.data.data;
                                $location.url(base_url + "Sistema/system").search({data: $scope.dataUser});
                            }

                        }
                    );
                }

            }
        );
    }
}]);
angular.module('app_landing').controller('login_ctrl', ['$scope', '$http', 'precadastroService', function ($scope, $http) {


}]);

