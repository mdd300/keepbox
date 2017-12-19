angular.module("app_fashon").controller("Clientes_crud", function ($scope, $http, $window) {

    var base_url = $(".baseUrl").val();


    $scope.titulo_open = "Clientes";

    $scope.pesquisa = "";

    $scope.list_clientes = [];
    /*paginação*/
    //
    $scope.dls = 1;
//numero de registros da paginação inicial
    $scope.pagina = 10;
    //limite de indices a mostra
    $scope.limiteDeIndice = 5;
    //inicio Do Indice nos numeros
    $scope.inicioDoIndice = 0;
    //indices da paginação
    $scope.listadeIndices = [];
    $scope.status=["Inativo","Ativo"];


    $http({

        method: 'POST',
        url: base_url + "manager/clientes/clientes/getClientes",
        data: $.param({limite: $scope.limiteDeIndice, pagina: $scope.dls, like: $scope.pesquisa}),
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

    }).then(function (response) {

        console.log(response.data['clientes']);

            $scope.list_clientes = response.data['clientes'];

            var deu = $scope.dls;

            if (deu % $scope.pagina) {
                deu = deu + $scope.pagina;
            }
            for (var i = 1; i <= response.data['numPages']; i++) {
                $scope.listadeIndices.push({indice: i});
            }


        }
    );

    $scope.changepage = function (page) {

        $scope.dls = page;

        $http({

            method: 'POST',
            url: base_url + "manager/clientes/clientes/getClientes",
            data: $.param({limite: $scope.limiteDeIndice, pagina: page, like: $scope.pesquisa}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

                console.log(response.data);

                $scope.list_clientes = response.data['clientes'];

            }
        );

    }

    $scope.nextPage = function () {

        $scope.dls += 1;

        $http({

            method: 'POST',
            url: base_url + "manager/clientes/clientes/getClientes",
            data: $.param({limite: $scope.limiteDeIndice, pagina: $scope.dls, like: $scope.pesquisa}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

                console.log(response.data);

                $scope.list_clientes = response.data['clientes'];

            }
        );

    }

    $scope.backPage = function () {

        $scope.dls -= 1;

        if ($scope.dls > 0) {
            $http({

                method: 'POST',
                url: base_url + "manager/clientes/clientes/getClientes",
                data:
                    $.param({limite: $scope.limiteDeIndice, pagina: $scope.dls, like: $scope.pesquisa}),
                headers:
                    {
                        'Content-Type':
                            'application/x-www-form-urlencoded; charset=UTF-8'
                    }

            }).then(function (response) {

                    console.log(response.data);

                    $scope.list_clientes = response.data['clientes'];

                }
            );
        }else{
            $scope.dls = 1;
        }
    }

    $scope.cadastro_cliente = function () {

        var formulario = $('.form-cadastro');
        var empresacnpj = formulario.find($('#cnpj-cliente')).val();
        var email = formulario.find($('#email-cliente')).val();
        var cnpj = empresacnpj.replace(".", "");
        var cnpj = cnpj.replace(".", "");
        var cnpj = cnpj.replace("/", "");
        var cnpj = cnpj.replace("-", "");
        formulario.find($('#cnpj-cliente')).val(cnpj);

        var formularioCadastro = $('.form-cadastro');

        if(cnpj !== "" && email !== ''){

        $http({
            method: 'POST',
            url: base_url + "manager/clientes/clientes/create",
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            data: formularioCadastro.serialize()
        }).then(function (response) {


            }
        );}

    }

    $scope.search = function (search) {

        $scope.pesquisa = search;

        $scope.list_clientes = [];
        $scope.listadeIndices = [];

        $http({

            method: 'POST',
            url: base_url + "manager/clientes/clientes/getClientes",
            data: $.param({limite: $scope.limiteDeIndice, pagina: $scope.dls, like: search}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

            console.log(response.data);

                $scope.list_clientes = response.data['clientes'];

                var deu = $scope.dls;

                if (deu % $scope.pagina) {
                    deu = deu + $scope.pagina;
                }
                for (var i = 1; i <= response.data['numPages']; i++) {
                    $scope.listadeIndices.push({indice: i});
                }


            }
        );

    }


});