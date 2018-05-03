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
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <base_url value="<?= base_url() ?>"></base_url>

</head>
<!-- end::Head -->
<body ng-controller="landing_ctrl">


<head>
    <nav class="content-header topnav" id="myTopnav">
        <div class="header-li icon-responsive" style="font-size:15px;" onclick="myFunction()"><a href="javascript:void(0);">&#9776;</a></div>
        <ul class="header-ul "  id="header-li-id">
            <li class="header-li"><a href="">Compra Assistida</a></li>
            <li class="header-li" ><a href="">Calculadora de Envio</a></li>
            <li class="header-li" ><a href="">Ganhe Dinheiro</a></li>
        </ul>
    </nav>
    <div class="content-header-menu">
        <div class="content-align-menu">
            <div class="content-logo-header"
                 style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/LOGOTIPO.png')"></div>
            <div class="content-right-menu">
                <div class="content-btn-header-menu">
                    <button class="btn-header-menu color-background-green" ng-click="login_press = true"><img class="content-img-icon-menu"
                                                                                src="<?= base_url() ?>public/assets/metronic/custom/img/icon/user_icon.png">Meu
                        Acesso
                    </button>
                </div>
                <nav class="content-menu">
                    <ul class="menu-ul">
                        <li class="menu-li color-text-green">Inicial</li>
                        <li class="menu-li color-text-grey">Serviços</li>
                        <li class="menu-li color-text-grey">Como Funciona</li>
                        <li class="menu-li color-text-grey">Dúvidas</li>
                        <li class="menu-li color-text-grey">Blog</li>
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
            <input class="input" type="text" ng-model="singIn.user_login" style="margin-top: 10px !important;" placeholder="Usuário">
        </div>
        <div class="content-login">
            <div class="text-bold text-font-sans color-text-grey-light text-2">Senha</div>
            <input class="input" type="password" ng-model="singIn.user_senha" style="margin-top: 10px !important;" placeholder="Senha">
        </div>
        <button class="btn-config-login color-background-green color-text-white text-bold text-font-sans text-2" ng-click="login()"> Entrar </button>
        <button class="btn-config-new color-background-roxo color-text-white text-bold text-font-sans text-2"> Novo acesso </button>
    </div>


</head>





