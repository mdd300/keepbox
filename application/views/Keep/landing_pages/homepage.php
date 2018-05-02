<!DOCTYPE html>
<html lang="en" ng-app="app_landing">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KeepBox</title>
    <!-- css -->

    <link href="<?= base_url() ?>public/assets/metronic/custom/css/lib/font-awesome/font-awesome.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/landing_pages/landing_style.css" rel="stylesheet"
          type="text/css"/>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" ng-controller="landing_ctrl">
<input style="display: none" class="base_url"  value="<?= base_url() ?>"></input>


<div class="content-landing">
    <div class="content-img-background"
         style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/landing_pages/backgroung_landing.png'); ">
        <div class="content-modal-pre-cad">
            <div class="content-pre-cad">
                <div class="content-text-comming">Em Breve</div>
                <div class="content-text-title"><b>Estamos Desempacotando</b></div>
                <div class="content-text">A KeepBox está se preparando para seu lançamento, aproveite essa curiosidade
                    para cadastrar seu email e ser notificado das próximas atualizações
                </div>
                <div class="content-input">
                    <input type="text" class="inpu-email" ng-model="email" placeholder="Seu email aqui">
                </div>
                <div class="content-text cad-text" ng-show="success" ng-class="{'cad-success': success == true}">
                    Parabéns, seu e-mail cadastrado com sucesso!
                </div>
                <div class="content-btn">
                    <button class="btn-send-email-pre-cad" ng-click="cadastro()"><b>Cadastrar</b></button>
                </div>
            </div>

        </div>


        <div class="content-logo">
            <div class="logo-background"
                 style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/landing_pages/keepbox.png')">
            </div>
        </div>
    </div>
</div>


<!-- Core JavaScript Files -->
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/jquery.min.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/bootstrap.min.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/wow.min.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/jquery.scrollTo.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/nivo-lightbox.min.js"></script>
<script src="<?= base_url() ?>public/assets/metronic/custom/js/landing_pages/home/custom.js"></script>

<script src="<?= base_url('public/assets/metronic/') ?>vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/demo/demo6/base/scripts.bundle.js') ?>"
        type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/lib/angular.min.js') ?>" type="text/javascript"></script>
<!-- Page-scripts -->
<script src="<?= base_url('public/assets/metronic/custom/js/angular/modules/landing_pages/pre_cadastro.module.js') ?>"
        type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/angular/controllers/landing_pages/pre_cadastro.controller.js') ?>"
        type="text/javascript"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/angular/services/pre_cadastro.service.js') ?>"
        type="text/javascript"></script>

</body>

</html>
