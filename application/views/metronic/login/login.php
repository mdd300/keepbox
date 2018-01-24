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
        NC Cinco
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base_url value="<?= base_url() ?>"></base_url>
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
    <link href="<?= base_url('public/assets/metronic/') ?>vendors/custom/fullcalendar/fullcalendar.bundle.css"
          rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors -->
    <link href="<?= base_url('public/assets/metronic/') ?>vendors/base/vendors.bundle.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url('public/assets/metronic/') ?>demo/demo6/base/style.bundle.css" rel="stylesheet"
          type="text/css"/>
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="<?= base_url('public/assets/metronic/') ?>demo/demo6/media/img/logo/favicon.ico"/>
    <!-- pre cadastro css-->
    <link rel="stylesheet" href="<?= base_url('public/assets/metronic/custom/css/comercial/pre_cad.css') ?>"
          type="text/css"/>
    <!-- map css-->
    <link href="<?= base_url('public/assets/metronic/') ?>custom/css/comercial/map.css" rel="stylesheet"
          type="text/css"/>
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page" ng-controller="loginCtrl">


    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--singin"
         id="m_login">
        <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
            <div class="m-stack m-stack--hor m-stack--desktop">
                <div class="m-stack__item m-stack__item--fluid">

                    <div class="m-login__wrapper">

                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">Faça seu Login</h3>

                            </div>

                            <!--                            Formulario de Login-->
                            <form class="m-login__form m-form form-login" ng-submit="doLogin()">
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input" type="text" placeholder="Usuário"
                                           ng-model="loginForm.user_login" required="required"
                                           autocomplete="off">
                                </div>
                                <div class="form-group m-form__group">
                                    <input class="form-control m-input m-login__form-input--last" type="password"
                                           ng-model="loginForm.user_pass"
                                           placeholder="Senha" name="password" required="required">
                                </div>
                                <div class="form-group m-form__group has-danger" ng-show="loginForm.msg.error">
                                    <div class="form-control-feedback">{{loginForm.msg.error}}</div>
                                </div>
                                <div class="form-group m-form__group has-success" ng-show="loginForm.msg.success">
                                    <div class="form-control-feedback">{{loginForm.msg.success}}</div>
                                </div>
                                <div class="form-group m-form__group has-warning" ng-show="loginForm.msg.warning">
                                    <div class="form-control-feedback">{{loginForm.msg.warning}}</div>
                                </div>
                                <div class="row m-login__form-sub">
                                    <div class="col m--align-left">
                                        <label class="m-checkbox m-checkbox--focus">
                                            <input type="checkbox" name="remember"> Lembrar
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="col m--align-right" data-toggle="modal" data-target="#m_modal_4">
                                        <a href="javascript:;" id="m_login_forget_password" class="m-link">Esqueceu sua
                                            senha?</a>
                                    </div>
                                </div>
                                <div class="m-login__form-action">
                                    <button type="submit" class="btn m-btn--pill btn-focus"
                                            ng-class="loginForm.loading ? 'm-loader m-loader--light m-loader--left' : ''">
                                        Entrar
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!--Modal de Esqueci minha senha-->
                        <div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Recuperação de senha
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-recuperacao">
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">
                                                    E-mail:
                                                </label>
                                                <input type="text" class="form-control" id="email-recuperacao">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                            Fechar
                                        </button>
                                        <button type="button" class="btn btn-primary" ng-click="Recuperacao()"
                                                data-dismiss="modal">
                                            Enviar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Modal-->
                    </div>

                </div>

            </div>
        </div>

        <!--        Imagem de bem-vindo-->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content"
             style="background-color: #7B68EE;">
            <div class="m-grid__item m-grid__item--middle">
                <h3 class="m-login__welcome">Bem -Vindo</h3>
                <p class="m-login__msg">

                </p>
            </div>
        </div>
    </div>


</div>


<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src="<?= base_url('public/assets/metronic/') ?>vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/') ?>demo/demo6/base/scripts.bundle.js"
        type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="<?= base_url('public/assets/metronic/') ?>vendors/custom/fullcalendar/fullcalendar.bundle.js"
        type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Snippets -->
<script src="<?= base_url('public/assets/metronic/') ?>app/js/dashboard.js" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/lib/angular.min.js') ?>" type="text/javascript"></script>

<script src="<?= base_url('public/assets/metronic/custom/js/angular/modules/fashon.module.js') ?>"
        type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/angular/constants/config.constant.js') ?>"
        type="text/javascript"></script>

<!--angular Login -->
<script src="<?= base_url('public/assets/metronic/custom/js/angular/modules/login/login.js') ?>"
        type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/angular/services/login/loginService.js') ?>"
        type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/angular/controllers/login/login.js') ?>"
        type="text/javascript"></script>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>