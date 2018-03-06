angular.module("app_fashon").controller("UserList", function ($scope, $http, $compile){

    $scope.list_clientes = [];
    $scope.listadeIndices = [
        {
            'indice': '1'
        }
    ]

    // $(function(){
    //     var options = {
    //         data: {
    //             type: 'remote',
    //             source: {
    //                 read: {
    //                     url: window.base_url + 'manager/users/lista',
    //                     method: 'GET'
    //                 }
    //             }
    //         },
    //
    //         layout: {
    //             theme: 'default',
    //             class: 'table table-responsive',
    //             footer: false,
    //             header: true,
    //
    //             spinner: {
    //                 overlayColor: '#000000',
    //                 opacity: 0.4,
    //                 type: 'loader',
    //                 state: 'brand',
    //                 message: true
    //             }
    //         },
    //
    //         pagination: true,
    //
    //         search: {
    //            delay: 400,
    //            input: $('#generalSearch')
    //         },
    //
    //         columns: [
    //             {
    //                 field: "user_id",
    //                 title: "ID",
    //                 locked: {left: 'x1'},
    //                 width: 20,
    //                 sortable: false,
    //                 template: '{{user_id}}'
    //             },
    //             {
    //                 field: "user_name",
    //                 title: "Nome",
    //                 sortable: "ASC",
    //                 filterable: false,
    //                 locked: {left: 'x1'},
    //                 template: '{{user_name}}'
    //             },
    //             {
    //                 field: "user_email",
    //                 title: "E-Mail",
    //                 sortable: "ASC",
    //                 filterable: false,
    //                 locked: {left: 'x1'},
    //                 template: '{{user_email}}'
    //             },{
    //                 field: "Actions",
    //                 title: "Actions",
    //                 sortable: false,
    //                 overflow: 'visible',
    //                 template: function(row) {
    //                     var $el = '\
    //                         <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Exibir" data-toggle="modal" data-target="#m_modal_2" ng-click="getData('+row.user_id+')">\
    //                             <i class="la la-ellipsis-h"></i>\
    //                         </a>\
    //                         <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Editar" data-toggle="modal" data-target="#m_modal_1" ng-click="getData('+row.user_id+')">\
    //                             <i class="la la-edit"></i>\
    //                         </a>\
    //                         <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Remover" data-toggle="modal" data-target="#m_modal_3" ng-click="getData('+row.user_id+')">\
    //                             <i class="la la-trash"></i>\
    //                         </a>\
    //                     ';
    //
    //                     return $compile($el)($scope);
    //                 }
    //             }
    //         ],
    //
    //         translate: {
    //             records: {
    //                 processing: 'Por favor, aguarde...',
    //                 noRecords: 'Nenhum resultado encontrado'
    //             },
    //             toolbar: {
    //                 pagination: {
    //                     items: {
    //                         default: {
    //                             first: 'Primeiro',
    //                             prev: 'Anterior',
    //                             next: 'Próximo',
    //                             last: 'Último',
    //                             more: 'Mais páginas',
    //                             input: 'Número da página',
    //                             select: 'Selecione o tamanho da página'
    //                         },
    //                         info: 'Exibindo {{start}} - {{end}} de {{total}} resultados'
    //                     }
    //                 }
    //             }
    //         }
    //     };
    //     $('#m_datatable_users').mDatatable(options);
    // });


    $http({

        method: 'POST',
        url: base_url + "manager/users/lista",
        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}

    }).then(function (response) {

        console.log(response.data)

        $scope.list = response.data;

        }
    );
    
    $scope.getData = function (id)
    {
        // se tem id retorna os dados existentes, senao array vazio para cadastrar
        if (id) {
            // editar
            $scope.acao = 'Editar';

            // retorna os dados do usuario pelo id
            $http({
                method: 'GET',
                url: window.base_url + 'manager/users/get_one_by_id/' + id
            }).then(function(response){
                $scope.user = response.data;
                $scope.user.user_pass = '';
            }, function(response){
                // mensagem de erro
                toastr.error('erro ao buscar informações do usuario');
            });   
        } else {
            // cadastrar
            $scope.acao = 'Cadastrar';

            delete $scope.user;
        }
    }
    
    $scope.spinner = [];
    
    $scope.save = function (user) {
        // se estiver com id atualiza, senao cadastra
        var url = user.id ? 'update' : 'store';
        $scope.spinner = ['m-loader', 'm-loader--light', 'm-loader--left'];
        
        $http({
            method: 'POST',
            url: window.base_url + 'manager/users/' + url,
            data: $.param(user)
        }).then(function (response) {
            $('#m_modal_1, .modal-backdrop').hide();
            // mensagem de sucesso
            toastr.success('Usuario salvo com sucesso');

            location.href = window.base_url + 'manager/users';
        }, function (response) {
            $('#m_modal_1, .modal-backdrop').hide();
            // mensagem de erro
            toastr.error('Erro ao salvar o usuario');
        });
    }
    
    $scope.remove = function (user) {
        var id = user.user_id;
        $scope.spinner = ['m-loader', 'm-loader--light', 'm-loader--left'];
        
        if (id) {
            $http({
                method: 'POST',
                url: window.base_url + 'manager/users/remove/' + id
            }).then(function (response) {
                $('#m_modal_3, .modal-backdrop').hide();
                // mensagem de sucesso
                toastr.success('Usuario removido com sucesso');

                location.href = window.base_url + 'manager/users';
            }, function (response) {
                $('#m_modal_1, .modal-backdrop').hide();
                // mensagem de erro
                toastr.error('Erro ao remover o usuario');
            });
        } else {
            $('#m_modal_3, .modal-backdrop').hide();
            toastr.error('Usuario nao encontrado');
        }
    }
});
