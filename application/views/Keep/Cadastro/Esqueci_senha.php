
<div style="    padding-top: 8%; height: 300px">
    <div class="content-left-cad color-background-grey">
        <div class="content-logo-cad "
             style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/LOGOTIPO.png')">

        </div>
        <div class="content-text-cad">

        </div>
    </div>
    <div class="content-right-cad">



        <form style=" padding-top: 30px" >
            <div class="text-font-sans text-bold text-title color-text-green" ng-show="step2" style="    margin: 30px;"> Mude sua senha</div>
                <input class="input color-text-roxo text-font-sans text-1-sm" placeholder="Nova senha ( Mínimo de 6 caracteres )" ng-class="{'error_cad': dataCadError.user_senha_error}" type="password" ng-model="dataChangePass.user_senha">
                <div ng-show="dataCadError.user_senha_length" style="color: red">Senha tem menos de 6 caracteres</div>
                <input class="input color-text-roxo text-font-sans text-1-sm" placeholder="Confirmar senha" type="password" ng-class="{'error_cad': dataCadError.user_senha_conf }" ng-model="dataChangePass.user_confirmar_senha">
                <div ng-show="dataCadError.user_senha_conf" style="color: red">As senhas estão difentes</div>

                <button class="btn-config color-background-roxo text-1-sm color-text-white text-font-sans text-bold btn-cad-config-2"
                        ng-click="cadastro()"><div class="loader-green" ng-show="loader_cad2"></div><div ng-show="!loader_cad2">Confirmar</div>
                </button>
            </div>
        </form>
    </div>
</div>

