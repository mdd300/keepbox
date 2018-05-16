<html  ng-app="app_landing">
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
<body class="width_padrao" style="    background-color: #F8F8FF;" ng-controller="sistem_ctrl">

<div id="myModal"  class="modal-jquery align-x-center">

    <div style="position: absolute; width: 100%; height: 100%;  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */" ng-click="closeModal()">

    </div>

    <!-- Modal content -->
    <div class="modal-content-jquery">
        <span style="position: absolute;
    right: 5%; cursor: pointer" class="close pointer" ng-click="closeModal()">&times;</span>

    <img style="width: 90%; height: 800px" src="<?= base_url('upload/produtos/img/') ?>{{img_show}}">

    </div>
</div>

<div class="content-geral-sistema">
    <div class="content-header-sistema shadow">
        <div class="content-logo">
            <div class="content-logo-header"
                 style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/LOGOTIPO.png')">

            </div>
        </div>
        <div class="content-data-user">
            <div class="content-data-name-user text-font-sans text-1-sm color-text-grey-light text-bold">Victor oshiro
            </div>
            <div class=" pointer content-data-exit text-font-sans text-1-sm color-text-roxo" ng-click="logout()"><div class="loader-roxo" ng-show="loader_exit"></div>Sair</div>
        </div>
    </div>

    <div class="content-sistema-left" ng-show="showPage == 1">

        <div class="content-bem-vindo text-font-sans text-title-xl color-text-grey-light">
            Olá
            <div class="color-text-green" style="display: -webkit-inline-box;">Victor</div>
        </div>

        <div class="content-text-produtos text-font-sans text-title color-text-roxo">
            Seus Produtos
        </div>
        <div class="content-table-produtos ">
            <table style="    min-width: 100%;">
                <thead class="color-background-roxo">
                <tr>
                    <th>

                    </th>
                <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                    Cod.Produto
                </th>
                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Produto
                    </th>
                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Quantidade
                    </th>
                    <th class=" content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Data do cadastro
                    </th>
                <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                    Status do Pedido
                </th>

                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Peso
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="tr-content-produtos color-background-white" ng-repeat="produto in produtosList">

                    <td>
                        <input type="checkbox" ng-model="checkboxProd[0][produto.prod_id]"  class="checkbox-sistema">
                    </td>

                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{produto.prod_num_ped}}

                    </td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light " ng-class="{'align-y-center': produto.imgs[0].length > 0}" style="text-align: center; "
                        ng-mouseenter="hovering = true"
                        ng-mouseleave="hovering = false"
                        ng-click="hovering ? true : false"
                    >
                        <img class="img-prod" ng-show="produto.imgs[0][0]"  ng-click="clickPhoto(imgProd.img_link)" src="<?= base_url('upload/produtos/img/') ?>{{produto.imgs[0][0].img_link}}">
                        <div class="pop-up-photo color-background-grey-light-2" ng-show="hovering && produto.imgs[0].length > 0">
                            <div class="img-content-prod" id="myBtn" ng-repeat="imgProd in produto.imgs[0] ">
                                <img class="img-prod"  ng-click="clickPhoto(imgProd.img_link)" src="<?= base_url('upload/produtos/img/') ?>{{imgProd.img_link}}">
                            </div>
                        </div>
                        <div style="margin-left: 5px">{{produto.prod_nome}}</div></td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{produto.prod_quantidade}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{produto.prod_data}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{produto.prod_status}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{produto.prod_peso}} Lbs</td>
                </tr>
                </tbody>
            </table>

            <div class="align-x-center margin-top-3" style="justify-content: flex-end !important;">
                <button class="btn-config-2 text-1 text-font-sans color-background-green color-text-white" ng-click="solicitarEnvio()">Solicitar envio</button>
            </div>
        </div>

        <div class="content-text-produtos text-font-sans text-title color-text-green margin-top-3" style="float: left">
            Compra assistida
        </div>
        <div style="float: right; display: inline-flex" class="align-y-center margin-top-5" >
            <div class="popup margin-top-1" style="    margin-right: 20px;" onclick="myFunction()"><img src="<?= base_url('public/assets/metronic/custom/img/icon/info.png') ?>">
                <span class="popuptext" id="myPopup">Insira o link do produto que deseja comprar e a quantidade</span>
            </div>
            <input class="input text-1 " style="padding-top: 0px !important;" placeholder="Link" ng-model="compraAssistida.link_enviado">
            <input class="input-mini text-1" ng-model="compraAssistida.link_quantidade" style="padding-top: 0px !important;" type="number" placeholder="Quant">
            <button class="btn-config-2 color-background-roxo color-text-white margin-top-1 text-1-sm" ng-click="enviarLink()">Enviar</button>
        </div>
        <div style="    float: left;
    margin-bottom: 40px;
    margin-left: 80px;" class="margin-top-1 align-center text-1 color-text-green" ng-show="link_enviado">
            Seu link foi enviado com sucesso, entraremos em contato em breve.
        </div>
        <div class="content-table-produtos margin-top-3">
            <table class="margin-top-4" style="    min-width: 100%;">
                <thead class="color-background-green">
                <tr>
                    <th class="content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Cod.Produto
                    </th>
                    <th class="content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Produto
                    </th>
                    <th class=" content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Data do cadastro
                    </th>
                    <th class="content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Status do Pedido
                    </th>
                    <th class="content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Total
                    </th>
                    <th class="content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Taxa Cambiais
                    <th class="content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Serviços
                    </th>
                    <th class="content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Taxas
                    </th>
                    <th class="content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Frete
                    </th>
                    <th class="content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Frete p/ KeepBox
                    </th>
                    <th class="content-header-table-2 text-bold text-font-sans text-1-sm color-text-white">
                        Total Geral
                    </th>

                </tr>
                </thead>
                <tbody>
                <tr class="tr-content-produtos color-background-white" ng-repeat="compra in compraList">


                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_cod}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_produto}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_data}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_status}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_total}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_taxas_cambiais}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_servicos}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_taxa}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_frete}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_frete_keep}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{compra.compra_total_geral}}</td>
                </tr>
                </tbody>
            </table>
            <div style="height: 100px; width: 100%">

            </div>
        </div>

    </div>


<!--Cadastro envio-->

    <div class="content-sistema-left" ng-show="showPage == 2">

        <div class="content-envio-caixa">
        <div class="content-step-by-step">
            <div class="text-1-sm color-text-roxo text-bold">Informações dos Produtos&rarr;</div><div class="text-1-sm color-text-grey-light">Envio</div>
        </div>

        <div class="content-table-list-prod">
            <table>
                <thead class="color-background-roxo">
                <tr>

                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Cod.Produto
                    </th>
                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Produto
                    </th>
                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Quantidade
                    </th>
                    <th class=" content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Data do cadastro
                    </th>
                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Status do Pedido
                    </th>

                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Peso Unidade
                    </th>
                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Peso Total
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="tr-content-produtos color-background-white" ng-repeat="produto in EnvioSoli">


                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{produto.prod_num_ped}}

                    </td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light " ng-class="{'align-y-center': produto.imgs[0].length > 0}" style="text-align: center; "
                        ng-mouseenter="hovering = true"
                        ng-mouseleave="hovering = false"
                        ng-click="hovering ? true : false"
                    >
                        <img class="img-prod" ng-show="produto.imgs[0][0]"  ng-click="clickPhoto(imgProd.img_link)" src="<?= base_url('upload/produtos/img/') ?>{{produto.imgs[0][0].img_link}}">
                        <div class="pop-up-photo color-background-grey-light-2" ng-show="hovering && produto.imgs[0].length > 0">
                            <div class="img-content-prod" id="myBtn" ng-repeat="imgProd in produto.imgs[0] ">
                                <img class="img-prod"  ng-click="clickPhoto(imgProd.img_link)" src="<?= base_url('upload/produtos/img/') ?>{{imgProd.img_link}}">
                            </div>
                        </div>
                        <div style="margin-left: 5px">{{produto.prod_nome}}</div></td>
                    <td class="text-bold text-font-sans color-text-grey-light" style="text-align: center; "><input ng-model="EnvioSoli[$index].quantidade_envio" ng-class="{'border-error': produto.errorQuant}"  style="height: 40px;" class="text-1" placeholder="Max: {{produto.prod_quantidade}}" type="number"></td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{produto.prod_data}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{produto.prod_status}}</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; ">{{produto.prod_peso}} Lbs</td>
                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light" style="text-align: center; " > <a ng-show="produto.quantidade_envio">{{(produto.prod_peso * produto.quantidade_envio).toFixed(2)}} Lbs</a></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="content-aduaneira">
            <div class="text-title text-font-sans color-text-roxo">
                Declaração Aduaneira
            </div>
            <table class="margin-top-2">
                <thead class="color-background-roxo">
                <tr>

                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Foto
                    </th>
                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Quantidade Declarada
                    </th>
                    <th class="content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Descrição
                    </th>
                    <th class=" content-header-table text-bold text-font-sans text-1-sm color-text-white">
                        Valor da Unidade
                    </th>

                </tr>
                </thead>
                <tbody>
                <tr class="tr-content-produtos color-background-white" ng-repeat="produto in EnvioSoli">

                    <td class="text-bold text-font-sans text-1-sm color-text-grey-light " ng-class="{'align-y-center': produto.imgs[0].length > 0}" style="text-align: center; "
                        ng-mouseenter="hovering = true"
                        ng-mouseleave="hovering = false"
                        ng-click="hovering ? true : false"
                    >
                        <img class="img-prod" ng-show="produto.imgs[0][0]"  ng-click="clickPhoto(imgProd.img_link)" src="<?= base_url('upload/produtos/img/') ?>{{produto.imgs[0][0].img_link}}">
                    </td>

                    <td class="text-bold text-font-sans color-text-grey-light" style="text-align: center; "><input ng-model="EnvioSoli[$index].quant_decl" ng-class="{'border-error': produto.errorQuantD}" style="height: 40px;" class="text-1" placeholder="Max: {{produto.prod_quantidade}}" type="number"></td>
                    <td class="text-bold text-font-sans color-text-grey-light" style="text-align: center; "><input ng-model="EnvioSoli[$index].desc_decl" ng-class="{'border-error': produto.errorDesc}" style="height: 40px;" class="text-1" type="text" placeholder="Ex: Celular, Computador"></td>
                    <td class="text-bold text-font-sans color-text-grey-light" style="text-align: center; "><input ng-model="EnvioSoli[$index].valor_decl" ng-class="{'border-error': produto.errorValor}" style="height: 40px;" class="text-1" placeholder="Ex: 12.50" type="number"></td>

                </tr>
                </tbody>
            </table>
        </div>
            <div class="back-step-envio margin-top-3 align-y-center pointer" ng-click="goBack()">
                <img
                        style="-moz-transform: scaleX(-1);
                        -o-transform: scaleX(-1);
                        -webkit-transform: scaleX(-1);
                        transform: scaleX(-1);"
                        src="<?= base_url('public/assets/metronic/custom/img/icon/right-arrow.png') ?>">
                <a class="text-1 text-font-sans color-text-green" style="margin-right: 20px">Voltar </a>
            </div>
            <div class="next-step-envio margin-top-3 align-y-center pointer" ng-click="goToStep2()">
                <a class="text-1 text-font-sans color-text-green" style="margin-right: 20px">Próximo </a><img src="<?= base_url('public/assets/metronic/custom/img/icon/right-arrow.png') ?>">
            </div>
        </div>
    </div>
    <!--Fim Cadastro envio-->

<!--  Envio e seguro  -->

    <div class="content-sistema-left" ng-show="showPage == 3" style="height: 1500px">
        <div class="content-envio-caixa">
            <div class="content-step-by-step">
                <div class="text-1-sm color-text-green pointer" ng-click="goBack()">Informações dos Produtos&rarr;</div><div class="text-1-sm color-text-roxo text-bold">Envio</div>
            </div>

            <div class="content-planos">

                <div style="    padding-left: 40px;
" class="text-title color-text-green text-font-sans">
                    Selecione um plano
                </div>

                <div class="content-simulator-data-module4 align-center margin-top-3">

                    <div class="content-border-simulator-shadow" ng-class="{'border-error-1': errorPlano}">
                        <ul class="content-ul-simulator-data">
                            <li class="content-li-simulator-data pointer" ng-click="selectPlano(1)" ng-class="{'plano-selected': PedidoEnvio.pedido_plano == 1}">
                                <div class="text-1-sm text-font-sans text-bold color-text-grey" style="    height: 65px;">
                                    Priority Mail Express International™
                                </div>
                                <div class="text-1-sm text-font-sans color-text-grey" style="">
                                    Taxa Keepbox: <a ng-show="range_simulator_home > 0">US$12,90</a>
                                </div>
                                <div class="text-1-sm text-font-sans color-text-grey" style="padding-top: 5px">
                                    Taxa Paypal: {{valor_plano_1_taxa}}
                                </div>
                                <div class="text-1-sm text-font-sans color-text-grey" style="    padding-left: 1px;padding-top: 5px">
                                    Envio: {{valor_plano_1}}
                                </div>
                                <div class="text-1 color-text-green color-text-green text-bold text-font-sans" style="padding-top: 35px">
                                    <b>Total:</b> {{total1}}
                                </div>
                            </li>
                            <li class="content-li-simulator-data pointer" ng-click="selectPlano(2)" ng-class="{'plano-selected': PedidoEnvio.pedido_plano == 2}">
                                <div class="text-1-sm text-font-sans text-bold color-text-grey"style="    height: 65px;">
                                    Priority Mail International®
                                </div>
                                <div class="text-1-sm text-font-sans color-text-grey" style="">
                                    Taxa Keepbox: <a ng-show="range_simulator_home > 0">US$12,90</a>
                                </div>
                                <div class="text-1-sm text-font-sans color-text-grey" style="padding-top: 5px">
                                    Taxa Paypal: {{valor_plano_2_taxa}}
                                </div>
                                <div class="text-1-sm text-font-sans color-text-grey" style="    padding-left: 1px;padding-top: 5px">
                                    Envio: {{valor_plano_2}}
                                </div>
                                <div class="text-1 color-text-green color-text-green text-bold text-font-sans" style="padding-top: 35px">
                                    <b>Total:</b> {{total2}}
                                </div>
                            </li>
                            <li ng-show="range_simulator_home < 5" class="content-li-simulator-data pointer" ng-click="selectPlano(3)" ng-class="{'plano-selected': PedidoEnvio.pedido_plano == 3}">
                                <div  >
                                    <div class="text-1-sm text-font-sans text-bold color-text-grey"style="    height: 65px;">
                                        First-Class Package International Service™
                                    </div>
                                    <div class="text-1-sm text-font-sans color-text-grey" style="">
                                        Taxa Keepbox: <a ng-show="range_simulator_home > 0">US$12,90</a>
                                    </div>
                                    <div class="text-1-sm text-font-sans color-text-grey" style="padding-top: 5px">
                                        Taxa Paypal: {{valor_plano_3_taxa}}
                                    </div>
                                    <div class="text-1-sm text-font-sans color-text-grey" style="    padding-left: 1px;padding-top: 5px">
                                        Envio: {{valor_plano_3}}
                                    </div>
                                    <div class="text-1 color-text-green color-text-green text-bold text-font-sans" style="padding-top: 35px">
                                        <b>Total:</b> {{total3}}
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="content-adicional-information margin-top-3">
                    <div class="text-title color-text-grey-light text-font-sans">
                        Opções adicionais
                    </div>
                    <div class="content-two-inputs margin-top-2">
                        <div class="content-check-envio align-y-center text-1-sm color-text-grey">
                            <input type="checkbox" class="checkbox-sistema" ng-change="changeValue()" ng-model="PedidoEnvio.pedido_seguro_keep">Seguro KeepBox (3% do valor declarado)
                        </div>
                        <div class="content-check-envio align-y-center text-1-sm color-text-grey">
                            <input type="checkbox" class="checkbox-sistema " ng-change="changeValue()" ng-model="PedidoEnvio.pedido_adesivar">Adesivar Toda  caixa/ Proteção completa (US$2,00)
                        </div>
                        <div class="content-check-envio align-y-center text-1-sm color-text-grey">
                            <input type="checkbox" class="checkbox-sistema" ng-change="changeValue()" ng-model="PedidoEnvio.pedido_acomodar">Acomodar itens frágeis em plástico bolha (US$1,00)
                        </div>
                    </div>
                    <div class="content-two-inputs margin-top-2">
                        <div class="content-check-envio align-y-center text-1-sm color-text-grey">
                            <input type="checkbox" class="checkbox-sistema " ng-model="PedidoEnvio.pedido_etiqueta">Retirar preços das etiquetas (GRÁTIS)
                        </div>
                        <div class="content-check-envio align-y-center text-1-sm color-text-grey">
                            <input type="checkbox" class="checkbox-sistema" ng-model="PedidoEnvio.pedido_anuncios">Remover inserções, anúncios e extras da loja (GRÁTIS)
                        </div>
                        <div class="content-check-envio align-y-center text-1-sm color-text-grey">
                            <input type="checkbox" class="checkbox-sistema " ng-model="PedidoEnvio.pedido_caixa">Retirar caixas originais (GRÁTIS)
                        </div>
                    </div>
                    <div class="content-two-inputs margin-top-2">
                        <div class="content-check-envio align-y-center text-1-sm color-text-grey">
                            <input type="checkbox" class="checkbox-sistema" ng-model="PedidoEnvio.pedido_fatura">Retirar fatura original (Invoice) (GRÁTIS)
                        </div>
                        <div class="content-check-envio align-y-center text-1-sm color-text-grey" ng-show="ValorDecTotal <= 200">
                            <input type="checkbox" class="checkbox-sistema " ng-model="PedidoEnvio.pedido_seguro_basico">Seguro Básico (GRÁTIS)
                        </div>
                    </div>

                    <div class="text-1 color-text-grey text-font-sans margin-top-3">
                        Comentários Extras
                    </div>

                    <textarea class="margin-top-2 text-1-sm text-font-sans color-text-grey textarea-information-envio-caixa" ng-model="PedidoEnvio.pedido_comentario"></textarea>
                </div>
            </div>
            <div class="back-step-envio margin-top-3 align-y-center pointer" style="    margin-bottom: 180px;"ng-click="goBack()">
                <img
                        style="-moz-transform: scaleX(-1);
                        -o-transform: scaleX(-1);
                        -webkit-transform: scaleX(-1);
                        transform: scaleX(-1);"
                        src="<?= base_url('public/assets/metronic/custom/img/icon/right-arrow.png') ?>">
                <a class="text-1 text-font-sans color-text-green" style="margin-right: 20px">Voltar </a>
            </div>
            <div class="next-step-envio margin-top-3 align-y-center pointer" style="    margin-bottom: 180px;" ng-click="goToStep3()">
                <a class="text-1 text-font-sans color-text-green" style="margin-right: 20px">Total: {{TotalFinal}} | Finalizar</a> <img src="<?= base_url('public/assets/metronic/custom/img/icon/right-arrow.png') ?>">
            </div>
        </div>
    </div>
<!-- Fim envio e seguro -->

    <!--  Confirmação  -->
    <div class="content-sistema-left" ng-show="showPage == 4" style="height: 1500px">

    </div>
    <!--  Fim Confirmação  -->

    <div class="content-data-endereco-right">
        <ul class="ul-data">
            <li class="li-data  color-text-green"     style=" padding: 10px 0px;"><a class="text-font-sans text-1 text-bold">Seu endereço nos EUA</a>
                <div class="popup margin-top-2" style="    margin-left: 20px;" onclick="myFunction1()"><img src="<?= base_url('public/assets/metronic/custom/img/icon/info.png') ?>">
                    <span class="popuptext" id="myPopup1">Ao realizar suas compras, insira seu endereço exatamente assim.</span>
                </div></li>
            <li class="li-data text-font-sans text-1-sm"><b>Name: </b><div class="color-text-grey-light" style="display: inline-block"><?= $user_suite." ".$user_nome." ".$user_sobrenome ?></div></li>
            <li class="li-data text-font-sans text-1-sm"><b>Street: </b><div class="color-text-grey-light" style="display: inline-block">591 Lakeview Drive</div></li>
            <li class="li-data text-font-sans text-1-sm"><b>City: </b><div class="color-text-grey-light" style="display: inline-block">Coral Springs</div></li>
            <li class="li-data text-font-sans text-1-sm"><b>State: </b><div class="color-text-grey-light" style="display: inline-block">Florida (FL)</div></li>
            <li class="li-data text-font-sans text-1-sm"><b>Zip Code: </b><div class="color-text-grey-light" style="display: inline-block">33071</div></li>
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

<div id="myModal2" class="modal-jquery">

    <!-- Modal content -->
    <div class="modal-content-jquery">
        <span class="close2 pointer">&times;</span>

        <div class="align-center text-title color-text-green text-font-sans" style="    padding: 1px 250px;">
            Seu Pedido de envio foi solicitado com sucesso, entraremos em contato em breve.
        </div>

    </div>
</div>

<script>

// When the user clicks on <div>, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }
function myFunction1() {
    var popup = document.getElementById("myPopup1");
    popup.classList.toggle("show");
}

    var modal = document.getElementById('myModal2');

    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
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
</body>
</html>