angular.module("app_fashon").controller("cadastro", function ($scope,$http,$timeout){
    $scope.id_clicado=0;
    
    $scope.paginacao_indices = true;
    
    // load na tabela
    $('#m_bl ockui_1_5').click(function() {
        mApp.block('#m_blockui_1_content', {
            overlayColor: '#2c2c2c',
            type: 'loader',
            state: 'primary',
            message: 'Carregando...'
        });

        setTimeout(function() {
            mApp.unblock('#m_blockui_1_content');
        }, 700);
    });

    //load na pagina inteira
    $('#abre_load_na_pagina').click(function() {
        mApp.block('#m_blockui_pagina', {
            overlayColor: '#2c2c2c',
            type: 'loader',
            state: 'primary',
            message: 'Carregando...'
        });

        setTimeout(function() {
            mApp.unblock('#m_blockui_pagina');
        }, 700);
    });
        
    //status de agendamento
    $scope.status_agenda=["Pendente","Agendado"];
    
    //agendamento sem pré cadastro
    $scope.agendar_cadastro = function (){
       
        $scope.data_get={
            nome:$scope.nomes,
            email:$scope.emails,
            telefone:$scope.telefones,
            cnpj:$scope.cnpjs
        };
        //salva os registros no banco
        var config_ajax = {
            method: 'POST',
            url: window.base_url + 'manager/comercial/pre_cadastro/novo_cadastro/',
            data: $.param({
                    dadosT:$scope.data_get
                })
        };
        $http(config_ajax).then(function (Response){
            //fazer alert e reload da pagina
            $timeout(function () {
                window.location.href = window.base_url + 'manager/comercial/pre_cadastro';
            }, 300); 
        }, function () {
            console.log("erro");
        });
    };
    //agendar com pré cadastro
    $scope.agendar_visita = function (){
        if($scope.date_agendamento && $scope.date_agendamento !== undefined){
        var config_ajax = {
            method: 'POST',
            url: window.base_url + 'manager/comercial/pre_cadastro/data_agendamento/',
            data: $.param({
                data_agenda:$scope.date_agendamento,
                precad:$scope.listadeObjetos[$scope.id_clicado]
                })
        };
        $http(config_ajax).then(function (Response){
            //fazer alert e reload da pagina
            $timeout(function () {
                window.location.href = window.base_url + 'manager/comercial/pre_cadastro';
            }, 300); 
        }, function () {
            console.log("erro");
        });
        }else{
            alert("Selecione a data para agendamento");
        }
    };
    
    $('#m_form_status, #m_form_type').selectpicker();
    
    /*paginação*/
    //
    $scope.dls=[];
    //numero de registros da paginação inicial as 2 var devem obter o mesmo valor
    $scope.pagina=10;
    
    //limite de indices a mostra
    $scope.limiteDeIndice = 5;
    //inicio Do Indice nos numeros
    $scope.inicioDoIndice=0;
    //guarda as pesquisas que ja foram realizadas
    $scope.listadeBuscas=[];
    //array principal com os dados exibidos
    $scope.listadeObjetos=[];
    //indices da paginação
    $scope.listadeIndices =[];
    
    //retorna o numero de resultados do banco e chama a função para paginar
    var config_ajax = {
        method: 'POST',
        url: window.base_url + 'manager/comercial/pre_cadastro/get_cadastros/'+0+'/'+0+'/'+true 
    };
    $http(config_ajax).then(function (Response){
        $scope.caregarInd(Response.data.numero_resultados);
    }, function () {
                console.log("erro");
    });
    //carrega os indices da pagina
    $scope.caregarInd = function (num){
       
        for(var i=0; i< (num/$scope.pagina) ;i++) {
            i++;
            $scope.listadeIndices.push({indice: i, link: (i*$scope.pagina)});
            i--;
        }
    }
    /**
    * @param pos = true/false
    * true move o indice para direita
    * false move o indice para esquerda
    */
    $scope.moveIndice = function (pos) {
        if(pos) {
            if ($scope.listadeIndices.length !== ($scope.inicioDoIndice + $scope.limiteDeIndice) && $scope.listadeIndices.length > $scope.limiteDeIndice) {
               $scope.inicioDoIndice++;
            }
        }else{
            if($scope.inicioDoIndice > 0) {
               $scope.inicioDoIndice--;
            }
        }
    };
    /**
    * @param ultimo = true/false
    *  move o indice para a ultima posição ou para primeira
    *  true move a paginação para os ultimos indices
    *  false move a paginação para o primeiro indice
    */
    $scope.ultimoindice = function (ultimo){
        if(ultimo){
            if(deu % $scope.pagina != 0) {
               $scope.inicioDoIndice = (deu/$scope.pagina) - ((deu % $scope.pagina) / 10)  - $scope.limiteDeIndice;
            }else{
               $scope.inicioDoIndice = (deu/$scope.pagina) - $scope.limiteDeIndice ;
            }
        }else{
            $scope.inicioDoIndice = 0 ;
        }
    };
    /**
     * @param numero = 'numero_da_pagina_*_numero_de_listas'
     * @param indice = 'numero_da_pagina'
     * realizar as consultas no banco confirme os indices que o usuario solicita
     * filtra os resultados ja existente
     */
    $scope.indicadorDeIndex = function (numero, indice) {
        $scope.paginacao_indices = true;
         //indice é o numero da pagina
         //numero é o indice * pagina
        indice --;
        //se for o primeiro indice ele adiciona o array
        if($scope.listadeBuscas.length === 0){
            $scope.listadeBuscas.push(numero);
            //função para retornar os dados do banco
            var config_ajax = {
                method: 'POST',
                url: window.base_url + 'manager/comercial/pre_cadastro/get_cadastros/'+indice+'/'+$scope.pagina+'/'+false 
            };
            $http(config_ajax).then(function (Response){
                for(var i =0;i<Response.data.precadastro.length;i++){
                    $scope.listadeObjetos.push(Response.data.precadastro[i]);
                }
            }, function () {
                    console.log("erro");
            });
            //filtro da pagina de receber o seu indice
            $scope.nPagina = indice;
        }
        //se não for o primeiro indice ele verifica se o indice ja existe
        else{
            for (var i = 0; i < $scope.listadeBuscas.length; i++) {
                if($scope.listadeBuscas[i] === numero) {
                    var validacao = false;
                }
            }
            //se existe ele posiciona a lista conforme o indice selecionado pelo usuario
            if(validacao === false){
            //filtro da pagina de receber o seu indice
            $scope.nPagina = indice;
            }else{
                //função para retornar os dados do banco
                var config_ajax = {
                    method: 'POST',
                    url: window.base_url + 'manager/comercial/pre_cadastro/get_cadastros/'+indice+'/'+$scope.pagina+'/'+false
                };
                $http(config_ajax).then(function (Response){
                    for(var i =0;i<Response.data.precadastro.length;i++){
                        $scope.listadeObjetos.push(Response.data.precadastro[i]);
                    }    
                }, function () {
                    console.log("erro");
                });
                //adiciona na lista o indice pesquisado
                $scope.listadeBuscas.push(numero);
                
                //filtro da pagina de receber o seu indice
                $scope.nPagina = indice;
            }
        }
   };
   //evento para o change
   $scope.indicadorDeIndex_change = function (change_latters,indice) {
       $scope.paginacao_indices = false;
         //indice é o numero da pagina
         //numero é o indice * pagina

        indice = change_latters;
        if(indice !== "" && indice !== undefined){
            if($scope.listadeBuscas.length === 0){
                $scope.listadeBuscas.push(change_latters);
                //função para retornar os dados do banco
                var config_ajax = {
                    method: 'POST',
                    url: window.base_url + 'manager/comercial/pre_cadastro/get_cadastros_change/'+change_latters+'/'+$scope.pagina 
                };
                $http(config_ajax).then(function (Response){
                    for(var i =0;i<Response.data.length;i++){
                        $scope.listadeObjetos.push(Response.data[i]);
                    }
                }, function () {
                        console.log("erro");
                });
                //filtro da pagina de receber o seu indice
                $scope.nPagina = indice;
            }
            //se não for o primeiro indice ele verifica se o indice ja existe
            else{
                for (var i = 0; i < $scope.listadeBuscas.length; i++) {
                    if($scope.listadeBuscas[i] === change_latters) {
                        var validacao = false;
                    }
                }
                //se existe ele posiciona a lista conforme o indice selecionado pelo usuario
                if(validacao === false){
                //filtro da pagina de receber o seu indice
                $scope.nPagina = indice;
                }else{
                    mApp.block('#m_blockui_1_content', {
                    overlayColor: '#2c2c2c',
                    type: 'loader',
                    state: 'primary',
                    message: 'Carregando...'
                    });

                    setTimeout(function() {
                        mApp.unblock('#m_blockui_1_content');
                    }, 200);
                    
                    //função para retornar os dados do banco
                    var config_ajax = {
                        method: 'POST',
                        url: window.base_url + 'manager/comercial/pre_cadastro/get_cadastros_change/'+change_latters+'/'+$scope.pagina
                    };
                    $http(config_ajax).then(function (Response){

                        for(var i =0;i<Response.data.length;i++){
                            $scope.listadeObjetos.push(Response.data[i]);
                        }
                    }, function () {
                        console.log("erro");
                    });
                    //adiciona na lista o indice pesquisado
                    $scope.listadeBuscas.push(change_latters);

                    //filtro da pagina de receber o seu indice
                    $scope.nPagina = indice;
                }
            }
        }else{
            $scope.indicadorDeIndex($scope.pagina,1);
        }
   };
   
   $scope.indexSelect= function(valor){
       
       if(valor && valor !== undefined){
           
       }
       
   };
   
   $scope.indicadorDeIndex($scope.pagina,1);
   
   //id da reserva selecionado
    $scope.set_id = function(id){
        $scope.id_clicado = id;
        
    };
    
});