<!DOCTYPE html>
<html lang="en" ng-app="app_pre_cadastro">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fash.on Welcome</title>
    <!-- css -->

    <link href="<?= base_url() ?>public/assets/metronic/custom/css/lib/font-awesome/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/landing_pages/home/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/landing_pages/home/nivo-lightbox.css" rel="stylesheet" />
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/landing_pages/home/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/landing_pages/home/animate.css" rel="stylesheet" />
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/landing_pages/home/style.css" rel="stylesheet" />

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" ng-controller="pre_cadastro_ctrl">
<base_url value="<?= base_url() ?>"></base_url>

<div id="wrapper">

    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">

                            <img src="<?= base_url('public/assets/metronic/custom/img/landing_pages/iphone.png') ?>" class="img-responsive" alt=""/>

                        </div> <!-- wow fadeInDown -->
                    </div> <!-- col-md-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6 slogan">

                        <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="col-md-12" >

                                <div class="form-group" >

                                    <h2 style="font-weight: 300"> Tenha o controle da suas vendas na palma da mão! </h2>
                                    <p class="no-margin"> Aplicativo para atendimento e venda de roupas presencial e online com controle de estoque em tempo real. </p>
                                    <p class="no-margin"> Para encontrar uma peça o aplicativo conta com um sistema de busca inteligente ou escaneamento via QR Code. </p>
                                    <p class="no-margin"> Atualmente o aplicativo é utilizado exclusivamente pela marca Unique Chic e após as fases de testes será permitido o uso por outras marcas que tiverem interesse. </p>
                                    <p class="no-margin"> <strong>QRGO</strong> apresenta o diferencial que sua marca precisa para ampliar suas vendas de maneira fácil e ágil, com uma consultoria customizada e exclusiva. </p>
                                    <p class="no-margin"> Suporte: gabriel.sanabria@uniquechic.com.br </p>
                                    <p class="no-margin"> Download Exclusivo para os funcionários da marca <a href="http://www.uniquechic.com.br">Unique Chic</a> </p>

                                </div> <!-- form-group -->

                                <form action="javascript:;" name="fm_precadastro" ng-submit="precadastrar( precadastro )">
                                    <div class="form-group">
                                        <div class="row" >
                                            <div class="col-md-6" >
                                                <label class="form-label-ldpg" > * Nome
                                                    <input type="text" class="form-control" required placeholder="Nome" ng-model="precadastro.precad_nome">
                                                </label>
                                            </div> <!-- col-md-6 -->
                                            <div class="col-md-6" >
                                                <label class="form-label-ldpg" > Email
                                                    <input type="email" class="form-control" placeholder="exemple@exemple.com" ng-model="precadastro.precad_email">
                                                </label>
                                            </div> <!-- col-md-6 -->
                                        </div> <!-- row -->
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <div class="row" >
                                            <div class="col-md-6" >
                                                <label class="form-label-ldpg" > Telefone
                                                    <input type="text" class="form-control m-input" placeholder="(xx) x xxxx-xxxx" ng-model="precadastro.telefone[0]" phone-mask>
                                                </label>
                                            </div> <!-- col-md-6 -->
                                            <div class="col-md-6" >
                                                <label class="form-label-ldpg" > Telefone
                                                    <input type="text" class="form-control m-input" placeholder="(xx) x xxxx-xxxx" ng-model="precadastro.telefone[1]" phone-mask>
                                                </label>
                                            </div> <!-- col-md-6 -->
                                        </div> <!-- row -->
                                    </div><!-- form-group -->

                                    <div class="form-group">
                                        <div class="row" >
                                            <div class="col-md-6" >
                                                <label class="form-label-ldpg" > CNPJ
                                                    <input type="text" class="form-control m-input" placeholder="xx.xxx.xxx/xxxx-xx" ng-model="precadastro.precad_cnpj">
                                                </label>
                                            </div> <!-- col-md-6 -->
                                        </div> <!-- row -->
                                    </div><!-- form-group -->

                                    <div class="form-group" >
                                        <div class="row" >
                                            <div class="col-md-12" >

                                                <div class="align-me-right" >
                                                    <button type="submit"
                                                            class="btn btn-info btn-custom"
                                                            ng-class=" { 'm-loader m-loader--primary m-loader--right': request } "
                                                            ng-disabled=" !fm_precadastro.$valid || check_fields( precadastro ) || request">
                                                        Cadastrar
                                                    </button>
                                                    ou
                                                    <button type="button" class="btn btn-default btn-custom" ng-click="doLogin()">
                                                        Efetuar Login
                                                    </button><!-- btn-cancel -->
                                                </div> <!-- align-me-right -->

                                            </div> <!-- col-md-12 -->
                                        </div> <!-- row -->
                                    </div> <!-- form-group -->
                                </form>

                            </div> <!-- col-12 -->
                        </div> <!-- wow fadeInUp -->

                    </div> <!-- col-md-6  -->
                </div> <!-- row -->
            </div><!-- container -->
        </div><!-- intro-content -->
    </section><!-- #Intro -->


    <footer class="footer-page">
        <div class="sub-footer">
            <div class="container">
                <div class="row flex-end-align">
                    <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">

                        <ul class="social">
                            <li>
                                <a href="https://pt-br.facebook.com/uniquesysweb/"> <i class="fa fa-facebook"></i> </a>
                            </li>
                        </ul>

                        <div class="wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="text-left">

                                <p class="no-margin"> &copy; Copyright 2017 - Fash.On All rights reserved. </p>

                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div class="text-right">

                                <p class="no-margin">Designed by <a href="http://uniquesys.com.br">Uniquesys</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- footer-page -->

</div>

    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Core JavaScript Files -->
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/jquery.min.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/bootstrap.min.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/wow.min.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/jquery.scrollTo.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/nivo-lightbox.min.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/custom.js"></script>

<script src="<?= base_url('public/assets/metronic/') ?>vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/demo/demo6/base/scripts.bundle.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/lib/angular.min.js') ?>" type="text/javascript"></script>
<!-- Page-scripts -->
<script src="<?= base_url('public/assets/metronic/custom/js/angular/modules/landing_pages/pre_cadastro.module.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/angular/controllers/landing_pages/pre_cadastro.controller.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/angular/services/pre_cadastro.service.js') ?>" type="text/javascript"></script>

</body>

</html>
