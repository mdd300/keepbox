angular.module('app_landing').controller('landing_ctrl', ['$scope', '$http', function ($scope, $http) {

    var url = new URL(window.location.href);

    var screenSize = $( window ).width() / 1920 * 100

    $('html').css({zoom: screenSize/100})

    $scope.range_simulator_home = 33;
    var valueP = parseFloat($scope.range_simulator_home) * 4.45;
    $scope.valor_plano_1 = 84.45 + valueP;
    var valueP2 = parseFloat($scope.range_simulator_home) * 3.7;
    $scope.valor_plano_2 = 44.95 + valueP2
    $scope.valor_plano_2 = Number(($scope.valor_plano_2).toFixed(2));
    $scope.changeValue = function () {
        if ($scope.range_simulator_home < 6) {
            var value1 = parseFloat($scope.range_simulator_home) * 4.35;
            $scope.valor_plano_1 = 67.05 + value1;
            $scope.valor_plano_1 = Number(($scope.valor_plano_1).toFixed(2));
        }
        else {
            var value1 = parseFloat($scope.range_simulator_home) * 4.45;
            $scope.valor_plano_1 = 84.45 + value1;
            $scope.valor_plano_1 = Number(($scope.valor_plano_1).toFixed(2));
        }
        if ($scope.range_simulator_home < 11) {
            var value2 = parseFloat($scope.range_simulator_home) * 3.7;
            $scope.valor_plano_2 = 44.95 + value2
            $scope.valor_plano_2 = Number(($scope.valor_plano_2).toFixed(2));
        } else {
            var value2 = parseFloat($scope.range_simulator_home) * 4.05;
            $scope.valor_plano_2 = 44.95 + value2
            $scope.valor_plano_2 = Number(($scope.valor_plano_2).toFixed(2));

        }
        if ($scope.range_simulator_home < 3) {
            $scope.valor_plano_3 = 23.50
        } else {
            if ($scope.range_simulator_home == 3) {
                $scope.valor_plano_3 = 34.75

            } else {
                $scope.valor_plano_3 = 51.50

            }
        }
    }

    $scope.idCliente = url.searchParams.get("id");

    $scope.singIn = {
        user_login: "",
        user_senha: ""
    }
    $scope.login_press = false;

    if ($scope.idCliente !== null && $scope.idCliente !== undefined && $scope.idCliente !== "") {

        $scope.loader_cad2 = false;

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

            $scope.loader_cad2 = true;


            $scope.dataCadError = {
                user_endereco_error: false,
                user_numero_error: false,
                user_cidade_error: false,
                user_estado_error: false,
                user_telefone_error: false,
                user_login_error: false,
                user_senha_error: false,
                user_senha_length: false,
                user_senha_conf: false
            }


            if ($scope.dataCad.user_endereco !== "") {
                if ($scope.dataCad.user_numero !== "") {
                    if ($scope.dataCad.user_cidade !== "") {
                        if ($scope.dataCad.user_estado !== "") {

                            if ($scope.dataCad.user_login !== "") {
                                if ($scope.dataCad.user_senha !== "") {
                                    if ($scope.dataCad.user_senha.length > 5) {
                                        if ($scope.dataCad.user_senha == $scope.dataCad.user_confirmar_senha) {


                                            $http({

                                                method: 'POST',
                                                url: base_url + "home/cadastroFinalizar",
                                                data: $.param({id: $scope.idCliente, Data: $scope.dataCad}),
                                                headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                                            }).then(function (response) {

                                                    $scope.loader_cad2 = false;

                                                    $scope.singIn = {
                                                        user_login: $scope.dataCad.user_login,
                                                        user_senha: $scope.dataCad.user_senha
                                                    }
                                                    $http({

                                                        method: 'POST',
                                                        url: base_url + "home/Login",
                                                        data: $.param($scope.singIn),
                                                        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                                                    }).then(function (response) {
                                                            $scope.loader_login = false;

                                                            if (response.data.success) {

                                                                window.location.href = base_url + "Sistema/system";
                                                            }

                                                        }
                                                    );


                                                }
                                            );
                                        } else {
                                            $scope.dataCadError.user_senha_conf = true;
                                            $scope.loader_login = false;
                                        }
                                    } else {
                                        $scope.dataCadError.user_senha_length = true;
                                        $scope.loader_login = false;
                                    }
                                } else {
                                    $scope.dataCadError.user_senha_error = true;
                                    $scope.loader_login = false;
                                }
                            } else {
                                $scope.dataCadError.user_login_error = true;
                                $scope.loader_login = false;
                            }
                        } else {
                            $scope.dataCadError.user_estado_error = true;

                        }
                    } else {
                        $scope.dataCadError.user_cidade_error = true;

                    }
                } else {
                    $scope.dataCadError.user_numero_error = true;

                }
            } else {
                $scope.dataCadError.user_endereco_error = true;

            }
        }
    } else {

        $scope.dataCad = {
            user_nome: "",
            user_sobrenome: "",
            user_email: ""
        }

        $scope.loader_cad1 = false;

        $scope.step1 = true;
        $scope.finishCad = false;


        $scope.cadastro = function () {
            $scope.loader_cad1 = true;
            $scope.dataCad_error = {
                user_nome_error: false,
                user_sobrenome_error: false,
                user_email_error: false,
                user_email_exist: false

            }
            if ($scope.dataCad.user_email !== "") {
                if ($scope.dataCad.user_nome !== "") {
                    if ($scope.dataCad.user_sobrenome !== "") {


                        $http({

                            method: 'POST',
                            url: base_url + "home/cadastro_email",
                            data: $.param({Data: $scope.dataCad}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

                        }).then(function (response) {

                                $scope.loader_cad1 = false;

                                if (response.data == "false") {
                                    $scope.dataCad_error.user_email_exist = true;
                                } else {
                                    $scope.step1 = false;
                                    $scope.finishCad = true;
                                }

                            }
                        );
                    } else {
                        $scope.dataCad_error.user_sobrenome_error = true
                    }
                } else {
                    $scope.dataCad_error.user_nome_error = true;
                }
            } else {
                $scope.dataCad_error.user_email_error = true;
            }
        }
    }

    $scope.login = function () {

        $scope.loader_login = true;

        $http({

            method: 'POST',
            url: base_url + "home/Login",
            data: $.param($scope.singIn),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {
                $scope.loader_login = false;

                if (response.data.success) {


                    window.location.href = base_url + "Sistema/system";
                }else{

                    $scope.Error_login = true;
                    $scope.TextError_Login = response.data.text
                }

            }
        );
    }
    $scope.logout = function () {
        $scope.loader_exit = true;
        $http({

            method: 'POST',
            url: base_url + "Logout",
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {
                $scope.loader_exit = false;
                window.location.href = base_url;

            }
        );
    }

    $scope.duvidas = [false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false,
        false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false,
        false, false, false, false, false, false, false, false, false, false, false, false,]

    $scope.openDuvida = function (num) {
        $scope.duvidas[num] = $scope.duvidas[num] ? false : true;
        console.log($scope.duvidas[num]);
    }
    $scope.verifySession = function () {

        $scope.loader_access = true;

        $http({

            method: 'POST',
            url: base_url + "home/verifySession",
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

            console.log(response.data)

                if (response.data.success == true) {
                    window.location.href = base_url + "Sistema/system";

                }
                else {
                    $scope.login_press = true
                }

                $scope.loader_access = false;

            }
        );
    }

}]);

