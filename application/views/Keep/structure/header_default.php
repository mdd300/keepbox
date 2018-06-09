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
    <meta name="viewport" ng-show="screenSizeMob == false" content="width=1960">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="google-site-verification" content="gJupZ3IAxhkzShW-a0VDNkb4MiX9oPps_DgcOYJg_QI" />
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
    <style>
        @font-face {
            font-family: Circe;
            src: url('<?=base_url()?>CirceRounded-ExtraLight.otf') format("opentype");

        }
    </style>

    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->


    <title>KeepBox</title>
    <!-- css -->

    <link href="<?= base_url() ?>public/assets/metronic/custom/css/lib/font-awesome/font-awesome.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Home/HomePage.css?v=1457636631802" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Como_Funciona/Como_Funciona.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Servicos/Servicos.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Servicos/termos.css" rel="stylesheet"
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


<div id="topo"  style="position: fixed; z-index: 1111; width: device-width;">
    <nav class="content-header topnav" id="myTopnav">
        <ul class="header-ul text-font-sans"  id="header-li-id">
            <li class="header-li"><a ng-click="scrollCom()" href=""><img class="img-menu-superior" src="<?= base_url() ?>public/assets/metronic/custom/img/icon/menu_cart.png">Compra Assistida</a></li>
            <li class="header-li" ><a ng-click="scrollSim()" href=""><img class="img-menu-superior" src="<?= base_url() ?>public/assets/metronic/custom/img/icon/menu_calculadora.png">Calculadora de Envio</a></li>
            <!--            <li class="header-li" ><a href=""><img class="img-menu-superior" src="--><?//= base_url() ?><!--public/assets/metronic/custom/img/icon/menu_money.png">Ganhe Dinheiro</a></li>-->
        </ul>
    </nav>
    <div class="content-header-menu width_padrao">
        <div class="content-align-menu">
            <a href="<?= base_url()?>">

                <div class="content-logo-header"
                     style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/photo/KEEPBOX.png')"></div>
            </a>
            <div class="content-right-menu">
                <div class="content-btn-header-menu">
                    <button id="meu_acesso_botao" ng-class="{'btn-opacity': login_press}" class="btn-header-menu color-background-green text-font-sans text-1-sm text-font-sans" ng-click="verifySession()"><div class="loader-roxo" ng-show="loader_access"></div><img ng-show="!loader_access" class="content-img-icon-menu"
                                                                                                                                                                                                                                                                        src="<?= base_url() ?>public/assets/metronic/custom/img/icon/user_icon.png">
                        Meu Acesso
                    </button>
                </div>
                <nav class="content-menu">
                    <ul class="menu-ul">
                        <li class="menu-li text-1-sm text-bold" ><a  ng-class="{'color-text-green': <?=$selection?> == 1,'text-bold': <?=$selection?> == 1 ,  'color-text-grey-light': <?=$selection?> !== 1} " href="<?= base_url()?>"> cial</a></li>
                        <li class="menu-li text-1-sm text-bold" ><a  ng-class="{'color-text-green': <?=$selection?> == 2,'text-bold': <?=$selection?> == 2 , 'color-text-grey-light': <?=$selection?> !== 2}"  href="<?= base_url('home/servico')?>">Serviços & Preços</a></li>
                        <!--                        <li class="menu-li text-1-sm text-bold" ><a  ng-class="{'color-text-green': --><?//=$selection?><!-- == 3,'text-bold': --><?//=$selection?><!-- == 3 , 'color-text-grey-light': --><?//=$selection?><!-- !== 3}"  href="--><?//= base_url('home/funcionamento')?><!--">Como Funciona</a></li>-->
                        <li class="menu-li text-1-sm text-bold" ><a  ng-class="{'color-text-green': <?=$selection?> == 4,'text-bold': <?=$selection?> == 4 , 'color-text-grey-light': <?=$selection?> !== 4}"  href="<?= base_url('home/duvidas')?>">Dúvidas</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="modal-login" ng-show="login_press">
    <div class="text-font-sans text-title-sm color-text-green text-bold " style="float: left; width: 66%;    margin: 5px 20px;">Meu Acesso</div>
    <div class="color-text-white text-bold color-background-roxo text-font-sans" style="
    border-radius: 200px;
    float: right;
    cursor: pointer;
    margin: 35px;
    padding: 1% 1.5%;
    display: flex;
    align-items: center;
    justify-content: center;
" ng-click="login_press = false">X</div>
    <div class="content-login">
        <div class="text-bold text-font-sans color-text-grey-light text-1">Usuário</div>
        <input class="input" type="text" ng-model="singIn.user_login" style="margin-top: 10px !important;" placeholder="Digite seu usuário ou E-mail">
    </div>
    <div class="content-login">
        <div class="text-bold text-font-sans color-text-grey-light text-1">Senha</div>
        <input class="input" type="password" ng-model="singIn.user_senha" style="margin-top: 10px !important;" placeholder="Digite sua senha">
        <div ng-show="Error_login">{{TextError_Login}}</div>
    </div>
    <div class="align-y-center">
        <div style="    margin-left: 25px;">
            <a href="<?= base_url('home/cadastroPage' )?>">
                <button style="    padding: 16px 40px;" class="btn-config-2 color-background-roxo color-text-white text-bold text-font-sans text-1-sm" id="botao_1"> Novo acesso </button>
            </a>
        </div>
        <div style="    margin-left: 10px;"><button id="botao_2" style="    padding: 16px 58px !important;" class="btn-config-2 color-background-green color-text-white text-bold text-font-sans text-1-sm" ng-click="login()"><div class="loader-roxo" ng-show="loader_login"></div> Entrar </button>
        </div>
    </div>
</div>

<div class="background-acesso-screen" ng-click="login_press = false" ng-show="login_press">
</div>


</div>

<div class="load-inicial" id="loading">

</div>





<script src="<?= base_url('public/assets/metronic/custom/js/lib/jquery-3.3.1.min.js')?>"></script>


<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




<style type="text/css">
    @media screen and (max-width: 768px){
        #topo{
            display: none;
        }
        .navbar{
            min-height: 80px !important;
        }
        .navbar-inverse{
            position: absolute;
            z-index: 999;
            background-color: #fff !important;
            border-color: #fff !important;
            border-radius: 0px !important;
        }
        .container-fluid {
            margin-top: 14px !important;
        }
        .navbar-toggle:hover{
            background: none !important;
            opacity: .80;
        }
        .navbar-inverse .navbar-nav>li>a {
            text-align: center;
            font-size: 17px !important;
            color: #383838;
        }
        .navbar-inverse .navbar-nav>li>a:hover{
            font-size: 17px !important;
            color: #a9d046;
        }
        .navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form{
            border-color: transparent; !important;
        }
        .navbar-nav{
            margin-top: 20px;
        }
        .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.open>a{
            background: transparent;
            box-shadow: none;
            color: #a9d046 !important;
        }
        .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.open>a:hover{
            background: transparent;
            box-shadow: none;
            color: #a9d046 !important;
        }
    }
</style>


<nav class="navbar navbar-inverse hidden-lg hidden-md hidden-sm col-xs-12" style="background: #fff">
    <div class="container-fluid" style="background: #fff">
        <div class="navbar-header" style="background: #fff">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border:none;">
                <span class="icon-bar" style="background: #000"></span>
                <span class="icon-bar" style="background: #000"></span>
                <span class="icon-bar" style="background: #000"></span>
            </button>
            <a class="navbar-brand" href="#">
                <div class="content-logo-header" style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/photo/KEEPBOX.png')"></div>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" style="margin-top: ">
                <li class="active"><a  href="">
                        Inicio</a>
                </li>
                <li><a ng-click="scrollCom()" href="">
                        Compra Assistida</a>
                </li>
                <li><a ng-click="scrollSim()" href="">
                        Calculadora de Envio</a>
                </li>
                <li class="text-1-sm text-bold" >
                    <a  ng-class="{'color-text-green': <?=$selection?> == 1,'text-bold': <?=$selection?> == 1 ,  'color-text-grey-light': <?=$selection?> !== 1} " href="<?= base_url()?>"> cial</a>
                </li>
                <li class="text-1-sm text-bold" >
                    <a  ng-class="{'color-text-green': <?=$selection?> == 2,'text-bold': <?=$selection?> == 2 , 'color-text-grey-light': <?=$selection?> !== 2}"  href="<?= base_url('home/servico')?>">Serviços & Preços</a>
                </li>

                <li class="text-1-sm text-bold" >
                    <a  ng-class="{'color-text-green': <?=$selection?> == 4,'text-bold': <?=$selection?> == 4 , 'color-text-grey-light': <?=$selection?> !== 4}"  href="<?= base_url('home/duvidas')?>">Dúvidas</a>
                </li>
                <li style="background: #a9d046;border-radius: 30px;margin-bottom: 20px;"><a href="#" style="color: #fff !important"> <span class="glyphicon glyphicon-user"></span> Meu acesso</a></li>
            </ul>
        </div>
    </div>
</nav>






