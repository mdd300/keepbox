<html  ng-app="app_landing">
<head>
    <title>
        KeepBox
    </title>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Global/global.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Sistema/SistemaHome.css" rel="stylesheet"
          type="text/css"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <base_url value="<?= base_url() ?>"></base_url>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @font-face {
            font-family: Circe;
            src: url('<?=base_url()?>CirceRounded-ExtraLight.otf') format("opentype");
        }
    </style>
</head>

<div class="width-content" ng-controller="sistem_ctrl">
    <div class="row">
        <div class="wrapper">
            <div class="fixed-sis">

                <input type="checkbox" id="control-nav" style="    position: absolute;visibility: hidden"/>
                <div class="color-background-roxo content-control-nax">
                <label for="control-nav" class="control-nav"></label>
                </div>
                <label for="control-nav" class="control-nav-close"></label>
            <div class="content-menu-superior">
                <div class="content-logo-header"
                     style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/photo/KEEPBOX.png')"></div>
                <div class="content-icon-sair color-background-green pointer" ng-click="logout()" style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/sair.png')">

                </div>
            </div>
            <div class=" font-text content-menu-text-superior text-bold width-content text-font-sans color-background-green color-text-roxo align-center center">
                Aviso aos recém chegados,<br>
                Devido ao nosso recente lançamento, informamos que nossa área administrativa (sua conta Keepbox)
                ainda não está 100% finalizada. Em breve, muitas novidades chegando para você
            </div>
            <nav class="side-bar color-background-roxo hide-on-med-and-down">
                <ul>
                    <li class="menu-head text-font-sans text-1-sm">
                       <div class="text-nome-sis text-font-sans"> Olá <?=$user_nome?></div>
                        <div class="text-nome-sis-conta text-font-sans"> Minha Conta</div>
                        <a ng-click="openMenu()" class="push_menu pointer align-center">
                            <span ng-show="menuOpen == true" class="glyphicon glyphicon-chevron-left pull-right"></span>
                            <span ng-show="menuOpen == false" class="glyphicon glyphicon-chevron-right pull-right"></span>
                        </a>
                    </li>
                    <div class="menu font-text-info">
                        <li>
                            <a href="#" class="active">Inicio <span class="glyphicon pull-right"></span></a>
                        </li>
                        <li>
                            <a href="#">Meus Endereços <span class="glyphicon pull-right "><img width="20" height="20" src="<?= base_url()?>public/assets/metronic/custom/img/icon/endereco.png"></span></a>
                        </li>

                        <li >
                            <a href="#">Produtos Recebidos<span class="glyphicon pull-right"><img width="20" height="20" src="<?= base_url()?>public/assets/metronic/custom/img/icon/prod.png"></span></a>
                        </li>
                        <li >
                            <a href="#">Envios <span class="glyphicon  pull-right"><img width="20" height="20" src="<?= base_url()?>public/assets/metronic/custom/img/icon/envio.png"></span></a>
                        </li>

                        <li >
                            <a href="#">Compra Assistida <span class="glyphicon pull-right"><img width="20" height="20" src="<?= base_url()?>public/assets/metronic/custom/img/icon/compra-assistida.png"></span></a>
                        </li>
                        <li>
                            <a href="#">Ganhe Dinheiro <span class="glyphicon  pull-right"><img width="20" height="20" src="<?= base_url()?>public/assets/metronic/custom/img/icon/ganhe-dinheiro.png"></span></a>
                        </li>
                        <li >
                            <a href="#">Afiliados <span class="glyphicon  pull-right"><img width="20" height="20" src="<?= base_url()?>public/assets/metronic/custom/img/icon/afiliados.png"></span></a>
                        </li>
                        <li >
                            <a href="#">Créditos <span class="glyphicon  pull-right"><img width="20" height="20" src="<?= base_url()?>public/assets/metronic/custom/img/icon/creditos.png"></span></a>
                        </li>
                        <li>
                            <a href="#">Histórico <span class="glyphicon  pull-right"><img width="20" height="20" src="<?= base_url()?>public/assets/metronic/custom/img/icon/historico.png"></span></a>
                        </li>
                    </div>

                </ul>
            </nav>
</div>
            <div class="content">

                <div class="text-page-sis">
                <div class=" text-1 margin-top-1 margin-left-2 color-text-grey-light">
                    Inicio
                </div>
                </div>
                <div class="content-title-welcome">
                    <div class="text-title margin-left-2 color-text-grey">
                       Olá <b class="color-text-green">Keeper</b>, por onde vamos começar?
                    </div>
                </div>

                <ul class="content-ul-ini-sis margin-top-1">
                    <li class="content-li-ini-sis">
                        <ul class="ul-data" style="
    margin:  0;
    padding:  0;
">
                            <li class="li-data color-text-grey-light"     style=" padding: 10px 0px 10px 0px;"><div style="display: -webkit-inline-box" class="text-font-sans text-1 text-bold">Esses são seus dados</div>
                                </li>
                            <li class="li-data text-font-sans text-1-sm"><b>Name: </b><div class="color-text-grey-light" style="display: inline-block"><?= $user_suite." ".$user_nome." ".$user_sobrenome ?></div><div class="popup" style="    margin-left: 5px;" onclick="myFunction1()"><img width="15" height="15" src="<?= base_url('public/assets/metronic/custom/img/icon/info.png') ?>">
                                    <span class="popuptext" id="myPopup1">Ao realizar suas compras, insira seu endereço exatamente assim.</span>
                                </div></li>
                            <li class="li-data text-font-sans text-1-sm"><b>Street: </b><div class="color-text-grey-light" style="display: inline-block">591 Lakeview Drive</div></li>
                            <li class="li-data text-font-sans text-1-sm"><b>City: </b><div class="color-text-grey-light" style="display: inline-block">Coral Springs</div></li>
                            <li class="li-data text-font-sans text-1-sm"><b>State: </b><div class="color-text-grey-light" style="display: inline-block">Florida (FL)</div></li>
                            <li class="li-data text-font-sans text-1-sm"><b>Zip Code: </b><div class="color-text-grey-light" style="display: inline-block">33071</div></li>
                            <li class="li-data  text-font-sans color-text-green">Sempre inclua seu numero de registro Keepbox antes de seu nome na hora de preencher o Shipping Address (endereço de entrega) nas lojas online dos EUA. Somente assim, teremos comos identificar suas encomendas</li>
                        </ul>
                    </li>
                    <li class="content-li-ini-sis border-ini-sis shadow-li-sis">
                        <div class="text-1 color-text-grey">
                            <span class="glyphicon glyphicon-search" style="width: 40px; height: 40px; margin-right: 10px"></span> Rastreando suas compras
                        </div>
                        <div class="font-text-info justify color-text-grey-light">
                            Sempre que realizar uma compra online nos sites americanos, você receberá um número ou código de rastreio (Tracking Number) para acompanhar suas compras até o nosso armazém, insira aqui todos os códigos que receber das lojas, para que a Keepbox te atualize sobre suas compras
                        </div>
                        <div class="margin-top-1">
                            <input ng-model="rastreamento.codigo" class="input-sis-ini center color=text-grey-light" placeholder="Digite o código de rastreamento (tracking number)">
                        </div>
                        <div class="margin-top-1 content-btn-sis">
                            <button  ng-click="setCodigoRast()" class="btn-config-3 color-background-green color-text-white text-1-sm">Enviar Codigo</button>
                        </div>
                        <div style="float: left;" class="justify font-text color-text-green" ng-show="ras_enviado">
                            O codigo foi enviado, entraremos em contato em breve.
                        </div>
                    </li>
                </ul>

                <ul class="content-ul-ini-sis margin-top-2">
                    <li class="content-li-ini-sis border-ini-sis shadow-li-sis" style="    height: 200px;">
                        <div class="text-1 color-text-grey align-y-center">
                            <span ><img width="25" height="25" src="<?= base_url()?>public/assets/metronic/custom/img/icon/armazenar.png"></span>
                            <div class="margin-left-1" style="margin-top: 5px">Produtos em Estoque</div>
                        </div>
                        <div class="font-text-info justify color-text-grey-light">
                            Essa é a quantidade de produtos que você tem em seu estoque Keepbox. Ou seja, itens que você comprou online e já chegaram em nosso armazém. Seus itens serão armazenados pela Keepbox até que você decida criar um envio para o Brasil. Confira seu estoque para mais informações.</div>
                        <div class="margin-top-1 content-btn-sis">
                            <button ng-click="setSolici()" class="btn-config-3 color-background-green color-text-white text-1-sm">Consultar Estoque</button>
                        </div>
                        <div style="    float: left;" class="justify font-text color-text-green" ng-show="prod_enviado">
                            A solicitação, entraremos em contato em breve.
                        </div>
                    </li>
                    <li class="content-li-ini-sis border-ini-sis shadow-li-sis">
                        <div class="text-1 color-text-grey align-y-center">
                            <span><img width="25" height="25" src="<?= base_url()?>public/assets/metronic/custom/img/icon/compra-assistida.png"></span>
                            <div class="margin-left-1" style="margin-top: 5px; display: flex">Compra Assistida</div>
                        </div>
                        <div class="font-text-info justify color-text-grey-light">
                            Quer fazer uma Compra Assistida? Insira aqui o link de cada produto que você deseja. Lembrando que você pode enviar quantos links de produtos quiser, nós iremos te enviar um orçamento com todos o produtos solicitados e depois de sua confirmação, compraremos tudo para você.</div>
                        <div class="two-inputs-inline margin-top-1">
                            <input ng-model="compraAssistida.link_enviado" class="input-sis-ini-compra center color=text-grey-light" placeholder="Digite o link do produto">
                            <input ng-model="compraAssistida.link_quantidade" class="input-sis-ini-compra-2 margin-left-1 center color=text-grey-light" placeholder="Quant">
                        </div>
                        <div class="margin-top-1 content-btn-sis">
                            <button ng-click="enviarLink()" class="btn-config-3 color-background-green color-text-white text-1-sm">Enviar Link</button>
                        </div>
                        <div style="    float: left;" class="justify font-text color-text-green" ng-show="link_enviado">
                            O link foi enviado, entraremos em contato em breve.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction1() {
        var popup = document.getElementById("myPopup1");
        popup.classList.toggle("show");
    }
</script>

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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>