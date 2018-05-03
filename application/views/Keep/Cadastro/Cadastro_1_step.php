<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: 5.0.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html class="width_padrao" lang="en" ng-app="app_landing">
<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>
        KeepBox
    </title>
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->


    <title>KeepBox</title>
    <!-- css -->
    <meta name="viewport" content="width=1024px, initial-scale=1.0, maximum-scale=1.0">

    <link href="<?= base_url() ?>public/assets/metronic/custom/css/lib/font-awesome/font-awesome.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Home/HomePage.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Como_Funciona/Como_Funciona.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Servicos/Servicos.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Home/responsive_home.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Global/global.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Cadastro/Cadastro.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Duvidas/Duvidas.css" rel="stylesheet"
          type="text/css"/>
    <base_url value="<?= base_url() ?>"></base_url>

</head>
<!-- end::Head -->
<body ng-controller="landing_ctrl">


<head>
    <nav class="content-header topnav" id="myTopnav">
        <ul class="header-ul "  id="header-li-id">
            <li class="header-li"><a href="">Compra Assistida</a></li>
            <li class="header-li" ><a href="">Calculadora de Envio</a></li>
            <li class="header-li" ><a href="">Ganhe Dinheiro</a></li>
        </ul>
    </nav>
    <div class="content-header-menu width_padrao">
        <div class="content-align-menu">
            <a href="<?= base_url()?>">

                <div class="content-logo-header"
                     style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/LOGOTIPO.png')"></div>
            </a>
            <div class="content-right-menu">
                <div class="content-btn-header-menu">
                    <button class="btn-header-menu color-background-green" ng-click="login_press = true"><img class="content-img-icon-menu"
                                                                                                              src="<?= base_url() ?>public/assets/metronic/custom/img/icon/user_icon.png">Meu
                        Acesso
                    </button>
                </div>
                <nav class="content-menu">
                    <ul class="menu-ul">
                        <li class="menu-li " ><a   href="<?= base_url()?>">Inicial</a></li>
                        <li class="menu-li " ><a   href="<?= base_url('home/servico')?>">Serviços</a></li>
                        <li class="menu-li " ><a   href="<?= base_url('home/funcionamento')?>">Como Funciona</a></li>
                        <li class="menu-li " ><a   href="<?= base_url('home/duvidas')?>">Dúvidas</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>

    <div class="modal-login" ng-show="login_press">
        <div class="text-font-sans text-title-sm color-text-green text-bold " style="float: left; width: 70%;margin: 20px;">Meu Acesso</div>
        <div class="color-text-roxo text-bold, text-font-sans" style="float: right;   cursor: pointer;  margin: 35px;" ng-click="closeModal()">X</div>
        <div class="content-login">
            <div class="text-bold text-font-sans color-text-grey-light text-2">Usuário</div>
            <input class="input" type="text" ng-model="singIn.user_login" style="margin-top: 10px !important;" placeholder="Digite seu usuário ou E-mail">
        </div>
        <div class="content-login">
            <div class="text-bold text-font-sans color-text-grey-light text-2">Senha</div>
            <input class="input" type="password" ng-model="singIn.user_senha" style="margin-top: 10px !important;" placeholder="Digite sua senha">
        </div>
        <button class="btn-config-login color-background-green color-text-white text-bold text-font-sans text-2" ng-click="login()"><div class="loader-roxo" ng-show="loader_login"></div> Entrar </button>
        <a href="<?= base_url('home/cadastroPage' )?>">
            <button class="btn-config-new color-background-roxo color-text-white text-bold text-font-sans text-2"> Novo acesso </button>
        </a>
    </div>


</head>

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


<script src="<?= base_url('public/assets/metronic/custom/js/lib/jquery-3.3.1.min.js')?>"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/lib/angular.min.js')?>"></script>


<script src="<?= base_url('public/assets/metronic/custom/js/angular/modules/Keepbox.module.js') ?>"
        type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/angular/constants/config.constant.js') ?>"
        type="text/javascript"></script>


<!--angular pré cadastro -->
<script src="<?= base_url('public/assets/metronic/custom/js/angular/modules/landing_pages/pre_cadastro.module.js') ?>"
        type="text/javascript"></script>
<!--angular pré cadastro -->
<script src="<?= base_url('public/assets/metronic/custom/js/angular/services/pre_cadastro.service.js') ?>"
        type="text/javascript"></script>

<!--angular pré cadastro -->
<script src="<?= base_url('public/assets/metronic/custom/js/angular/controllers/landing_pages/pre_cadastro.controller.js') ?>"
        type="text/javascript"></script>
</body>
</html>