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
<html lang="en" ng-app="app_fashon">
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
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">

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
                    <button class="btn-header-menu color-background-green"><img class="content-img-icon-menu"
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

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            var y = document.getElementById("header-li-id");
            if (x.className === "topnav") {
                x.className += " responsive";
                y.className += " responsive-line";
            } else {
                x.className = "topnav";
                y.className = "header-ul-res";

            }
        }
    </script>
</head>





