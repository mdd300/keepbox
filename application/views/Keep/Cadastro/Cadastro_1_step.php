<div>
    <div class="content-left-cad color-background-grey">
        <div class="content-logo-cad "
             style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/LOGOTIPO.png')">

        </div>
        <div class="content-text-cad">

        </div>
    </div>
    <div class="content-right-cad">
        <div class="text-font-sans text-bold text-title color-text-green" style="margin: 80px" ng-show="finishCad">Obrigado por se cadastre, olhe seu E-mail para verificar suas informações!</div>
        <form style=" padding-top: 100px" ng-show="step1">
            <div class="content-two-inputs-cad">
                <input class="input-mini color-text-roxo text-font-sans " ng-class="{'error_cad': dataCadError.user_nome_error }" ng-model="dataCad.user_nome"
                       placeholder="Nome" >
                <input class="input-mini  color-text-roxo text-font-sans " ng-class="{'error_cad': dataCadError.user_sobrenome_error  }" ng-model="dataCad.user_sobrenome"
                       placeholder="Sobrenome">
            </div>
            <input class="input color-text-roxo text-font-sans" placeholder="E-mail" ng-class="{'error_cad': dataCadError.user_email_error }" type="email" ng-model="dataCad.user_email">
            <div ng-show="dataCad_error.user_email_exist" style="color: red;">Esse E-mail já esta cadastro!</div>
        <div class="content-btn-cad">
                <button class="btn-config color-background-roxo color-text-white text-font-sans text-bold btn-cad-config"
                        ng-click="cadastro()"><div class="loader-green" ng-show="loader_cad1"></div><div ng-show="!loader_cad"> Criar sua conta</div>
                </button>
            </div>
        </form>
        <form style=" padding-top: 100px" ng-show="step2">

            <input class="input color-text-roxo text-font-sans" placeholder="Seu endereço" ng-class="{'error_cad': dataCadError.user_endereco_error }"  ng-model="dataCad.user_endereco">
            <div class="content-two-inputs-cad">
                <input class="input-mini color-text-roxo text-font-sans "  ng-class="{'error_cad': dataCadError.user_numero_error }" ng-model="dataCad.user_numero"
                       placeholder="Numero">
                <input class="input-mini  color-text-roxo text-font-sans " ng-model="dataCad.user_complemento"
                       placeholder="Complemento">
            </div>

            <div class="content-two-inputs-cad">
                <input class="input-mini color-text-roxo text-font-sans " ng-class="{'error_cad': dataCadError.user_cidade_error }" ng-model="dataCad.user_cidade"
                       placeholder="Cidade">
                <input class="input-mini  color-text-roxo text-font-sans " ng-class="{'error_cad': dataCadError.user_estado_error }" ng-model="dataCad.user_estado"
                       placeholder="Estado">
            </div>

            <input class="input color-text-roxo text-font-sans" placeholder="Telefone" type="tel" ng-model="dataCad.user_telefone">

            <input class="input color-text-roxo text-font-sans" placeholder="Nome de usuário" ng-class="{'error_cad': dataCadError.user_login_error }" ng-model="dataCad.user_login">

            <input class="input color-text-roxo text-font-sans" placeholder="Senha ( Mínimo de 6 caracteres )" ng-class="{'error_cad': dataCadError.user_senha_error}" type="password" ng-model="dataCad.user_senha">
            <div ng-show="dataCadError.user_senha_length" style="color: red">Senha tem menos de 6 caracteres</div>
            <input class="input color-text-roxo text-font-sans" placeholder="Confirmar senha" type="password" ng-class="{'error_cad': dataCadError.user_senha_conf }" ng-model="dataCad.user_confirmar_senha">
            <div ng-show="dataCadError.user_senha_conf" style="color: red">As senhas estão difentes</div>

            <button class="btn-config color-background-roxo color-text-white text-font-sans text-bold btn-cad-config"
                    ng-click="cadastro()"><div class="loader-green" ng-show="loader_cad2"></div><div ng-show="!loader_cad2">Finalizar cadastro</div>
                </button>
            </div>
        </form>
    </div>
</div>