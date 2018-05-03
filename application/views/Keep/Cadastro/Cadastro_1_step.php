<div>
    <div class="content-left-cad color-background-grey">
        <div class="content-logo-cad "
             style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/LOGOTIPO.png')">

        </div>
        <div class="content-text-cad">

        </div>
    </div>
    <div class="content-right-cad">
        <form style="padding-left: 100px; padding-top: 100px" ng-show="step1">
            <div class="content-two-inputs-cad">
                <input class="input-mini color-text-roxo text-font-sans " ng-model="dataCad.user_nome"
                       placeholder="Nome">
                <input class="input-mini  color-text-roxo text-font-sans " ng-model="dataCad.user_sobrenome"
                       placeholder="Sobrenome">
            </div>
            <input class="input color-text-roxo text-font-sans" placeholder="E-mail" type="email" ng-model="dataCad.user_email">
            <div class="content-btn-cad">
                <button class="btn-config color-background-roxo color-text-white text-font-sans text-bold btn-cad-config"
                        ng-click="cadastro()">Criar sua conta
                </button>
            </div>
        </form>
        <form style="padding-left: 100px; padding-top: 100px" ng-show="step2">

            <input class="input color-text-roxo text-font-sans" placeholder="Seu endereço" ng-model="dataCad.user_endereco">
            <div class="content-two-inputs-cad">
                <input class="input-mini color-text-roxo text-font-sans " ng-model="dataCad.user_numero"
                       placeholder="Numero">
                <input class="input-mini  color-text-roxo text-font-sans " ng-model="dataCad.user_complemento"
                       placeholder="Complemento">
            </div>

            <div class="content-two-inputs-cad">
                <input class="input-mini color-text-roxo text-font-sans " ng-model="dataCad.user_cidade"
                       placeholder="Cidade">
                <input class="input-mini  color-text-roxo text-font-sans " ng-model="dataCad.user_estado"
                       placeholder="Estado">
            </div>

            <input class="input color-text-roxo text-font-sans" placeholder="Telefone" type="tel" ng-model="dataCad.user_telefone">

            <input class="input color-text-roxo text-font-sans" placeholder="Nome de usuário" ng-model="dataCad.user_login">

            <input class="input color-text-roxo text-font-sans" placeholder="Senha ( Mínimo de 6 caracteres )" type="password" ng-model="dataCad.user_senha">

            <input class="input color-text-roxo text-font-sans" placeholder="Confirmar senha" type="password" ng-model="dataCad.user_confirmar_senha">


            <button class="btn-config color-background-roxo color-text-white text-font-sans text-bold btn-cad-config"
                        ng-click="cadastro()">Finalizar cadastro
                </button>
            </div>
        </form>
    </div>
</div>