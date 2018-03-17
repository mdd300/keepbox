angular.module("app_fashon").directive("fileInput", function ($parse) {
    return {
        link: function ($scope, element, attrs) {
            element.on("change", function (event) {
                var files = event.target.files;
                //console.log(files[0].name);
                $parse(attrs.fileInput).assign($scope, element[0].files);
                $scope.$apply();
            });
        }
    }
})
    .controller("Lista_map", function ($scope, $http) {

        $scope.pesquisa = "";

        $scope.list_files = [];
        $scope.list_folders = [];
        $scope.dataCliente;
        $scope.status=["Inativo","Ativo"];
        $scope.firstPage = false;
        $scope.folderKnow = 0;
        $scope.newFolder;


        $scope.dls = 1;
//numero de registros da paginação inicial
        $scope.pagina = 10;
        //limite de indices a mostra
        $scope.limiteDeIndice = 5;

        var url = new URL(window.location.href );

        $scope.idCliente = url.searchParams.get("id");


        $http({

            method: 'POST',
            url: base_url + "manager/clientes/clientes/getClientes",
            data: $.param({limite: $scope.limiteDeIndice, pagina: $scope.dls, like: $scope.pesquisa, where :{'cliente_id': $scope.idCliente}}),
            headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

        }).then(function (response) {

                console.log(response.data['clientes'][0]);
                $scope.dataCliente = response.data['clientes'][0];

            }
        );


        $http({

            method: 'POST',
            url: base_url + "manager/comercial/map/getFiles",
            data: $.param({like: $scope.pesquisa, id: $scope.idCliente})


        }).then(function (response) {

                console.log(response.data)

                $scope.list_files = response.data.files;
                $scope.idCliente = response.data.cliente;

            }
        );

        $http({

            method: 'POST',
            url: base_url + "manager/comercial/map/getPasta",
            data: $.param({like: $scope.pesquisa, id: $scope.idCliente})


        }).then(function (response) {

                console.log(response.data)

                $scope.list_folders = response.data;

            }
        );

        $scope.save_file = function () {

            var formCadastro = $(".form-cadastro");
            var form = new FormData();

            angular.forEach($scope.files, function (file) {
                form.append('file', file);
            });


            form.append('nome', formCadastro.find($("#nome-file")).val());
            form.append('link', formCadastro.find($("#link-file")).val());
            form.append('id', $scope.idCliente);

            $http({

                method: 'POST',
                url: base_url + "manager/comercial/map/saveFiles",
                data: form,
                transformRequest: angular.identity,
                headers: {'Content-Type': undefined}


            }).then(function (response) {

                    $scope.list_files.push(response.data);

                }
            );

        }

        // Função de excluir file
        $scope.deleteFile = function (id) {

            $http({

                method: 'POST',
                url: base_url + "manager/comercial/map/deleteProd",
                data: $.param({id: id}),


            }).then(function (response) {

                    var file = $(".content-list-files").find("#" + id);


                    file.fadeOut(1000);
                }
            );

        }

        $scope.deleteFolder = function (id) {

            $http({

                method: 'POST',
                url: base_url + "manager/comercial/map/deleteFolder",
                data: $.param({id: id}),


            }).then(function (response) {

                    var file = $(".content-list-files").find("#" + id);


                    file.fadeOut(1000);
                }
            );

        }

        $scope.search = function (search) {

            $scope.pesquisa = search;

            $scope.list_files = [];

            $http({

                method: 'POST',
                url: base_url + "manager/comercial/map/getFiles",
                data: $.param({like: $scope.pesquisa, id: $scope.idCliente}),


            }).then(function (response) {


                    $scope.list_files = response.data;

                }
            );


        }

        $scope.folder = function (id) {

            $scope.list_files = [];
            $scope.list_folders = [];
            $scope.firstPage = true;
            $scope.folderKnow = id;

            $http({

                method: 'POST',
                url: base_url + "manager/comercial/map/getFiles",
                data: $.param({pasta: id, id: $scope.idCliente, like: $scope.pesquisa,}),


            }).then(function (response) {


                    $scope.list_files = response.data.files;

                }
            );

            $http({

                method: 'POST',
                url: base_url + "manager/comercial/map/getPasta",
                data: $.param({pasta: id, id: $scope.idCliente})


            }).then(function (response) {

                    $scope.list_folders = response.data;

                }
            );

        }

        $scope.folderBack = function(){

            $scope.list_files = [];
            $scope.list_folders = [];
            $scope.firstPage = false;
            $scope.folderKnow = 0;

            $http({

                method: 'POST',
                url: base_url + "manager/comercial/map/getFiles",
                data: $.param({id: $scope.idCliente, like: $scope.pesquisa,}),


            }).then(function (response) {


                    $scope.list_files = response.data.files;

                }
            );

            $http({

                method: 'POST',
                url: base_url + "manager/comercial/map/getPasta",
                data: $.param({id: $scope.idCliente})


            }).then(function (response) {

                    $scope.list_folders = response.data;

                }
            );

        }

        $scope.save_folder = function(){

            $http({

                method: 'POST',
                url: base_url + "manager/comercial/map/saveFolder",
                data: $.param({folder: $scope.folderKnow,nome: $scope.newFolder, id: $scope.idCliente}),


            }).then(function (response) {

                    $scope.list_folders.push(response.data);

                }
            );

        }
    });