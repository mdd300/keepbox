angular.module('app_landing').service('precadastroService', [ "$http", function( $http ){

    var $base_element = angular.element('base_url');
    var base_url = $base_element.attr('value');

    /**
     * Função utilizada para precadastrar um usuário no sistema
     * @param data
     * @returns {HttpPromise}
     */
    var __precadastrar = function( data ){

        /* Verifica o tipo de dado que está sendo passado como parâmetro */
        if( typeof data === "object" ){
            /* Se a "data" for do tipo objeto, converte-o para string */
            data = $.param(data);
        }/* Fim da verificação  */
        /* Retorna a requisição */
        return $http.post( base_url + 'cadastro/pre/create', data );

    }/* End of __precadastrar */
    
    /* Retorno das funções do service */
    return{
        precadastrar: __precadastrar
    }/* End of return */

}]);/* End of service */