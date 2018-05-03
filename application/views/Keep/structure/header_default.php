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
<html lang="en" ng-app="app_landing">
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
    <div class="content-header-menu">
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
                        <li class="menu-li " ><a  ng-class="{'color-text-green': <?=$selection?> == 1, 'color-text-grey': <?=$selection?> !== 1} " href="<?= base_url()?>">Inicial</a></li>
                        <li class="menu-li " ><a  ng-class="{'color-text-green': <?=$selection?> == 2, 'color-text-grey': <?=$selection?> !== 2}"  href="<?= base_url('home/servico')?>">Serviços</a></li>
                        <li class="menu-li " ><a  ng-class="{'color-text-green': <?=$selection?> == 3, 'color-text-grey': <?=$selection?> !== 3}"  href="<?= base_url('home/funcionamento')?>">Como Funciona</a></li>
                        <li class="menu-li " ><a  ng-class="{'color-text-green': <?=$selection?> == 4, 'color-text-grey': <?=$selection?> !== 4}"  href="<?= base_url('home/duvidas')?>">Dúvidas</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>

    <div class="modal-login" ng-show="login_press">
        <div class="text-font-sans text-title-sm color-text-green text-bold " style="margin: 20px;">Meu Acesso</div>
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





