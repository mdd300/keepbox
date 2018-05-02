<div ng-controller="landing_ctrl">
    <div class="content-left-cad color-background-grey">
    <div class="content-logo-cad " style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/LOGOTIPO.png')">

    </div>
    <div class="content-text-cad">

    </div>
</div>
<div class="content-right-cad">
    <form style="padding-left: 100px">
        <div class="content-two-inputs-cad">
            <input class="input-mini color-text-roxo text-font-sans " ng-model="dataCad.user_nome" placeholder="Nome">
            <input class="input-mini  color-text-roxo text-font-sans " ng-model="dataCad.user_sobrenome" placeholder="Sobrenome">
        </div>
        <input class="input color-text-roxo text-font-sans" placeholder="E-mail" ng-model="dataCad.user_email">
        <button class="btn-config color-background-roxo color-text-white text-font-sans text-bold btn-cad-config" ng-click="cadastro()">Criar sua conta</button>
    </form>
</div>
</div>