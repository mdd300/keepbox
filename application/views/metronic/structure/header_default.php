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
    <link href="<?= base_url('public/assets/metronic/custom/css/manager/comercial/pre_cad.css') ?>" rel="stylesheet"
          type="text/css"/>
    <!-- map css-->
    <link href="<?= base_url('public/assets/metronic/custom/css/manager/comercial/map.css') ?>" rel="stylesheet"
          type="text/css"/>
    <!-- Usuários -->
    <link href="<?= base_url('public/assets/metronic/custom/css/manager/users/users.css') ?>" rel="stylesheet"
          type="text/css"/>
    <base_url value="<?= base_url() ?>"></base_url>

</head>
<!-- end::Head -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->

<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- BEGIN: Header -->
    <header class="m-grid__item    m-header " data-minimize-offset="200" data-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">
                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-light ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="<?= base_url() ?>" class="m-brand__logo-wrapper">

                            </a>
                            <h3 class="m-header__title">
                                Apps
                            </h3>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">
                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                               class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>
                            <!-- END -->
                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                               class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>
                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>
                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                    <div class="m-header__title">
                        <h3 class="m-header__title-text">
                            NC Cinco
                        </h3>
                    </div>
                    <!-- BEGIN: Horizontal Menu -->
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light "
                            id="m_aside_header_menu_mobile_close_btn">
                        <i class="la la-close"></i>
                    </button>
                    <div id="m_header_menu"
                         class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
                        <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                            <li class="m-menu__item">
                                <a href="<?= base_url('manager/clientes/clientes') ?>" class="m-menu__link">
                                    <span class="m-menu__item-here"></span>
                                    <span class="m-menu__link-text">
                                                Clientes
                                            </span>
                                </a>
                            </li>
                            <li class="m-menu__item">
                                <a href="<?= base_url('manager/users') ?>" class="m-menu__link">
                                    <span class="m-menu__item-here"></span>
                                    <span class="m-menu__link-text">
                                                Usuários
                                            </span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- END: Horizontal Menu -->
                    <!-- BEGIN: Topbar -->

                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>
    <!-- END: Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
            <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
            <!-- BEGIN: Aside Menu -->
            <di
            <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">



