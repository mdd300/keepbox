<!DOCTYPE html>
<html lang="pt-br" ng-app="app_pre_cadastro">
<head>
    <meta charset="utf-8">
    <title>Pré-cadastro</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Efetue o seu Pré-cadastro em nosso sistema" name="description"/>
    <meta content="" name="author"/>

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- end::Page Vendors -->

    <link href="<?= base_url('public/assets/metronic/') ?>vendors/base/vendors.bundle.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url('public/assets/metronic/') ?>demo/demo6/base/style.bundle.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url('public/assets/metronic/') ?>custom/css/landing_pages/pre_cadastro.css" rel="stylesheet"
          type="text/css"/>

</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white" ng-controller="pre_cadastro_ctrl">
<base_url value="<?= base_url() ?>"></base_url>
<div class="page-wrapper">
    <div class="page-container">

        <div class="container-fluid">
            <div class="page-content">

                <div class="row justify-center">
                    <span class="page-title">Pré-cadastro</span>
                </div> <!-- row -->

                <div class="row justify-center">
                    <div class="col-lg-5 col-xs-12 col-sm-12">
                        <div class="m-portlet m-portlet--bordered m-portlet--unair">

                            <form action="javascript:;" name="fm_precadastro" ng-submit="precadastrar( precadastro )">
                                <div class="m-portlet__body">

                                    <div class="form-group m-form__group m--margin-top-10">
                                        <div class="alert m-alert m-alert--default" role="alert">
                                            <p>Por favor, insira as suas informações de contato para realizar um
                                                pré-cadastro em nosso sistema.</p>
                                            <p class="obs-title"> OBS: campos com <span class="required">*</span> são
                                                obrigatórios. </p>
                                            <p class="obs-title"> OBS: campos com <span class="one-required">*</span>
                                                requer pelo menos um preenchido. </p>
                                        </div><!-- alert -->
                                    </div><!-- form-group -->

                                    <div class="form-group m-form__group m--margin-top-10">

                                        <div class="row">

                                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                                <label>
                                                    <span class="required">*</span>
                                                    Nome:
                                                </label>
                                                <div class="input-group m-input-group m-input-group--square">
                                                    <span class="input-group-addon"> <i class="la la-user"></i> </span>
                                                    <input type="text" class="form-control m-input" required placeholder="" ng-model="precadastro.precad_nome">
                                                </div>
                                                <span class="m-form__help">
                                                        Por favor, insira o seu Nome completo.
                                                    </span>
                                            </div> <!-- col-lg-6 -->
                                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                                <label>
                                                    <span class="one-required">*</span>
                                                    Email:
                                                </label>
                                                <div class="input-group m-input-group m-input-group--square">
                                                    <span class="input-group-addon"> <i class="la la-link"></i> </span>
                                                    <input type="email" class="form-control m-input" placeholder="" ng-model="precadastro.precad_email">
                                                </div>
                                                <span class="m-form__help">
                                                        Por favor, insira o seu E-mail.
                                                    </span>
                                            </div> <!-- col-lg-6 -->

                                        </div> <!-- row -->
                                    </div> <!-- form-group  -->

                                    <div class="form-group m-form__group m--margin-top-10">
                                        <div class="row">

                                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                                <label>
                                                    <span class="one-required">*</span>
                                                    Telefone 1:
                                                </label>
                                                <div class="input-group m-input-group m-input-group--square">
                                                    <span class="input-group-addon"> <i class="la la-phone"></i> </span>
                                                    <input type="text" class="form-control m-input" placeholder="" ng-model="precadastro.telefone[0]" phone-mask>
                                                </div>
                                                <span class="m-form__help">
                                                    Insira um telefone de contato.
                                                </span>
                                            </div> <!-- col-lg-6 -->

                                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                                <label>
                                                    <span class="one-required">*</span>
                                                    Telefone 2:
                                                </label>
                                                <div class="input-group m-input-group m-input-group--square">
                                                    <span class="input-group-addon"> <i class="la la-mobile-phone"></i> </span>
                                                    <input type="text" class="form-control m-input" placeholder="" ng-model="precadastro.telefone[1]" phone-mask>
                                                </div>
                                                <span class="m-form__help"> Insira um telefone alternativo. </span>
                                            </div> <!-- col-lg-6 -->

                                        </div> <!-- row -->
                                    </div> <!-- form-group  -->
                                    <div class="form-group m-form__group m--margin-top-10">
                                        <div class="row">

                                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                                <label>
                                                    CNPJ:
                                                </label>
                                                <div class="input-group m-input-group m-input-group--square">
                                                    <span class="input-group-addon"> <i class="la la-university"></i> </span>
                                                    <input type="text" class="form-control m-input" placeholder="" ng-model="precadastro.precad_cnpj">
                                                </div>
                                                <span class="m-form__help"> Por favor, informe o CNPJ da sua empresa. </span>
                                            </div> <!-- col-lg-6 -->

                                        </div> <!-- row -->
                                    </div> <!-- form-group  -->

                                </div> <!-- m-portlet__body -->
                                <div class="m-portlet__foot">
                                    <div class="row align-items-center">

                                        <div class="col-lg-12 m--align-right">

                                            <button type="button" class="btn btn-link">
                                                Cancelar
                                            </button>
                                            <button type="submit"
                                                    class="btn btn-outline-primary"
                                                    ng-class=" { 'm-loader m-loader--primary m-loader--right': request } "
                                                    ng-disabled=" !fm_precadastro.$valid || check_fields( precadastro ) || request">
                                                Cadastrar
                                            </button>
                                        </div><!-- col-lg-12 -->

                                    </div><!-- row -->
                                </div><!-- m-portlet__foot -->

                            </form> <!-- form precadastro -->

                        </div> <!-- m-portlet m-portlet--bordered m-portlet--unair  -->
                    </div> <!-- col-lg-6 col-xs-12 col-sm-12 -->
                </div> <!-- row -->

            </div> <!-- page-content -->
        </div><!-- container-fluid -->

    </div><!-- page-container -->
</div>
<!-- Linkagem de Scripts JS -->
<!-- Lib's -->
<script src="<?= base_url('public/assets/metronic/') ?>vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/demo/demo6/base/scripts.bundle.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/lib/angular.min.js') ?>" type="text/javascript"></script>
<!-- End of Lib's -->
<!-- Page Scripts -->
<script src="<?= base_url('public/assets/metronic/custom/js/angular/modules/landing_pages/pre_cadastro.module.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/angular/controllers/landing_pages/pre_cadastro.controller.js') ?>" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/angular/services/pre_cadastro.service.js') ?>" type="text/javascript"></script>
<!-- / Page Scripts -->

<!-- End of Link Scripts JS -->
</body>
</html>