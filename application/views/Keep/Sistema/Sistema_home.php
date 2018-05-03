<html ng-app="app_landing">
<head>
    <title>
        KeepBox
    </title>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Global/global.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Sistema/SistemaHome.css" rel="stylesheet"
          type="text/css"/>
    <base_url value="<?= base_url() ?>"></base_url>

</head>
<body ng-controller="landing_ctrl">

<div class="content-geral-sistema">
    <div class="content-header-sistema shadow">
        <div class="content-logo">
            <div class="content-logo-header"
                 style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/LOGOTIPO.png')">

            </div>
        </div>
        <div class="content-data-user">
            <div class="content-data-name-user text-font-sans text-2 color-text-grey-light text-bold">Victor oshiro
            </div>
            <div class="content-data-exit text-font-sans text-2 color-text-roxo" ng-click="logout()"><div class="loader-roxo" ng-show="loader_exit"></div>Sair</div>
        </div>
    </div>

    <div class="content-sistema-left">

        <div class="content-bem-vindo text-font-sans text-title color-text-grey-light">
            Olá
            <div class="color-text-green" style="display: -webkit-inline-box;">Victor</div>
        </div>

        <div class="content-text-produtos text-font-sans text-title color-text-roxo">
            Seus Produtos
        </div>
        <div class="content-table-produtos">
            <table>
                <thead class="color-background-roxo">
                <tr>
                <th class=" content-header-table text-bold text-font-sans text-2 color-text-white">
                    Data
                </th>
                <th class="content-header-table text-bold text-font-sans text-2 color-text-white">
                    Nr.Pedido
                </th>
                <th class="content-header-table text-bold text-font-sans text-2 color-text-white">
                    Status do Pedido
                </th>
                    <th class="content-header-table text-bold text-font-sans text-2 color-text-white">
                        Produto
                    </th>
                    <th class="content-header-table text-bold text-font-sans text-2 color-text-white">
                        Loja
                    </th>
                    <th class="content-header-table text-bold text-font-sans text-2 color-text-white">
                        Peso
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
<!---->
<!--                    <td class="text-bold text-font-sans text-2 color-text-grey-light" style="text-align: center; ">29/05/2018</td>-->
<!--                    <td class="text-bold text-font-sans text-2 color-text-grey-light" style="text-align: center; ">04654320</td>-->
<!--                    <td class="text-bold text-font-sans text-2 color-text-grey-light" style="text-align: center; ">Aguardando Pagamento</td>-->
<!--                    <td class="text-bold text-font-sans text-2 color-text-grey-light" style="text-align: center; ">Iphone</td>-->
<!--                    <td class="text-bold text-font-sans text-2 color-text-grey-light" style="text-align: center; ">Best Buy</td>-->
<!--                    <td class="text-bold text-font-sans text-2 color-text-grey-light" style="text-align: center; ">192 gramas</td>-->

                </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div class="content-data-endereco-right">
        <ul class="ul-data">
            <li class="li-data text-font-sans text-2 text-bold color-text-green">Seu endereço nos EUA</li>
            <li class="li-data text-font-sans text-2"><b>Name: </b><div class="color-text-grey-light" style="display: inline-block"><?= $user_suite." ".$user_nome." ".$user_sobrenome ?></div></li>
            <li class="li-data text-font-sans text-2"><b>Street: </b><div class="color-text-grey-light" style="display: inline-block">591 Lakeview Drive</div></li>
            <li class="li-data text-font-sans text-2"><b>City: </b><div class="color-text-grey-light" style="display: inline-block">Coral Springs</div></li>
            <li class="li-data text-font-sans text-2"><b>State: </b><div class="color-text-grey-light" style="display: inline-block">Florida (FL)</div></li>
            <li class="li-data text-font-sans text-2"><b>Zip Code: </b><div class="color-text-grey-light" style="display: inline-block">33071</div></li>
        </ul>
    </div>


</div>
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500"
     data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->            <!-- begin::Quick Nav -->
<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<!--end::Base Scripts -->
<!--begin::Page Vendors -->

<!--end::Page Vendors -->
<!--begin::Page Snippets -->


<script src="<?= base_url('public/assets/metronic/custom/js/lib/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('public/assets/metronic/custom/js/lib/angular.min.js') ?>"></script>


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