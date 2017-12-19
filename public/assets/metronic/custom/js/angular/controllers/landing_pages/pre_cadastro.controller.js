angular.module('app_pre_cadastro').controller('pre_cadastro_ctrl', ['$scope', 'precadastroService', function ($scope, precadastroService) {

    var $phone_mask = angular.element('[phone-mask]');
    $phone_mask.inputmask({mask: ['(99) 9999-9999', '(99) 99999-9999']}); //mask with dynamic syntax

    var $base_element = angular.element('base_url');
    var base_url = $base_element.attr('value');

    $scope.precadastro = {telefone: []};
    $scope.request = false;


    /** Função utilizada para realizar o pré-cadastro do usuário */
    $scope.precadastrar = function (precadastro) {

        /* Verifica se o Request está bloqueado para novas requisições */
        if (!$scope.request) {
            /* Bloquei novas requisições até que esta seja finalizada */
            $scope.request = true;


            var precad = angular.copy(precadastro);
            delete precad.telefone;

            /* Leitura sequencial dos telefones encontrados */
            angular.forEach(precadastro.telefone, function (telefone, key) {
                /* Tratamento dos dados do telefone */
                var regexp = /[(-)\ \-]/g;
                var tel = telefone.replace(regexp, "");
                /* Remove os caracteres inúteis */
                /* Re-define o valor do telefone */
                precadastro.telefone[key] = tel;
            });

            var data = {
                'precadastro': precad,
                'telefones': precadastro.telefone
            };
            /* End of data to send */
            precadastroService.precadastrar(data).then(function (response) {

                /* Desbloqueia as requisições */
                $scope.request = false;
                $scope.precadastro = {telefone: []};

                /* Verifica Se o sucesso da requisição é verdadeiro */
                if (response.data.success === true) {
                    alert("Seu pré cadastro foi realizado com sucesso!");
                } else {
                    /* Caso o success da requisição não seja verdadeiro */
                    alert("Não foi possivel realizar o seu pré-cadastro. Por favor tente novamente, ou contate a nossa equipe de suporte.");
                }
                /* Fim da verificação do sucesso da requisiçao */

            });
            /* Fim da função de pre-cadastro no service */

        }/* Fim da verificação de bloqueio de requisições */

    };
    /* fim da função de precadastrar */

    /**
     * Função que verifica se os campos do formulário de pré-cadastro estão preenchidos corretamente
     * @param precadastro - Object com os campos
     * @returns {boolean} Retorna TRUE se os campos estiverem Inválidos, e FALSE se validos */
    $scope.check_fields = function (precadastro) {
        /* Verifica se o elemento está definido corretamente */
        if (!angular.isUndefined(precadastro)) {

            var telefones = false;
            var email = false;
            /* Verifica se os Telefones estão definidos no escopo */
            if (!angular.isUndefined(precadastro.telefone)) {
                /* Caso definidos */

                /* Fim da verificação de tipagem dos telefones */

                /* Verifica se ALGUM (some) está com o valor preenchido */
                telefones = precadastro.telefone.some(function (tel) {

                    var number = angular.copy(tel);
                    var replace = number.replace(/[(-)_\-\ ]/g, '');
                    var length = replace.length;
                    return ( tel.trim() !== "" && ( length === 10 || length === 11 ) );

                });
                /* Fim do filtro de definição dos valores de telefone */

            }
            /* Fim da verificação de definição dos telefones no escopo */

            /* Verifica se o Email está definido no escopo */
            if (!angular.isUndefined(precadastro.precad_email)) {
                /* Se o email estiver definido corretamente no escopo */
                /* Verifica se o email foi preenchido */
                if (precadastro.precad_email.trim() !== "") {
                    /* Caso o email esteja preenchido */
                    var reg = new RegExp(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/);
                    email = reg.test(precadastro.precad_email);
                }
                /* Fim da verificação de preenchimento do campo de email */
            }
            /* Fim da verificação de definição do Email */

            var $return = telefones || email;
            return !$return;

        } else {
            /*  */
            return true;
        }
        /* Fim da verificação de definição do elemento de precadastro */

    };
    /* check_fields */

    /**
     *
     *
     */
    $scope.doLogin = function(){
        window.location.href = base_url + "login";
    }

}]);