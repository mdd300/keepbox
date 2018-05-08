
<div class="content-img-top-home width_padrao">
    <div class="img-top-home" data-parallax="scroll" data-image-src="<?= base_url() ?>public/assets/metronic/custom/img/photo/banner-principal-keep.png""></div>
</div>

<div class="content-text-banner width_padrao">
    <div class="color-text-green text-title-xl text-font-sans " style="position: relative; text-align: center;     width: 80x%;">
        COMPRE NAS LOJAS ONLINE DOS <b>ESTADOS UNIDOS</b>
    </div>
</div>

<div class="content-text-banner-2 width_padrao align-x-center">
    <div class="color-text-white text-font-sans text-title-xl align-x-center" style="position: relative; text-align: center; display: inline-flex">
        A<div class="color-text-green" >&nbsp;KeepBox&nbsp;</div>envia para você no Brasil
    </div>
</div>

<div class="content-text-banner-3 width_padrao">
    <a href="<?= base_url('home/cadastroPage' )?>">
    <button class="color-background-roxo color-text-white text-1-sm btn-config text-font-sans shadow"  style="position: relative">
        Clique para garantir seu endereço nos EUA
    </button>
    </a>
</div>

<div class="content-module-2 color-background-green width_padrao" style="    background-repeat: no-repeat;
    background-size: 500px 2300px;
    background-position-y: -850px;
     background-image: url('public/assets/metronic/custom/img/photo/aviao_verde.png')"">

</div>

<div class="content-more-about-text ">
    <div class="text-1-sm text-font-sans color-text-grey-light padding-text" style="    text-align: justify;">
        Pesquisas apontam o crescente desejo dos brasileiros em comprar em lojas online dos EUA. Prova disso é que os turistas do Brasil já ocupam o 3. lugar na lista dos países que mais consumem na América.
        O fato é que muitas lojas online dos EUA não entregam compras no Brasil.
        A KeepBox surge para solucionar esta questão!
        Viabilizamos para quem mora no Brasil a oportunidade de aproveitar todas as vantagens do mercado americano e receber suas compras onde quiser com amplo conforto, economia e segurança.
        Compre o que desejar em qualquer loja online dos EUA.
        A KeepBox recebe e envia tudo para você!
    </div>
    <div class="content-btn-more-about">
        <a href="<?= base_url('home/funcionamento' )?>">

        <button class="btn-config color-background-green  color-text-white text-1-sm">
            Veja mais sobre nós
        </button>
        </a>
    </div>
</div>

    <iframe class="content-video-module2 " src="https://www.youtube.com/embed/BT3z50zcA-g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<div class="content-text-module2">
    <div class="color-text-roxo text-font-sans text-bold text-title-xl" >
        Como a Keepbox funciona?
    </div>
</div>

<ul class="ul-step-module2 width_padrao" style="padding: 0;">
    <li class="li-step-module2">
        <div class="step-icon"
             style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/online-shop.png')"></div>
        <div class="step-text color-text-roxo text-font-sans text-1-sm "><b>1.</b>Crie sua conta KeepBox gratuitamente e compre nas lojas online dos EUA.
        </div>
    </li>
    <li class="li-step-module2">
        <div class="step-icon"
             style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/packages.png')"></div>
        <div class="step-text color-text-roxo text-font-sans text-1-sm"><b>2.</b>Mande entregar suas compras no endereço da sua conta KeepBox
        </div>
    </li>
    <li class="li-step-module2">
        <div class="step-icon"
             style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/package.png')"></div>
        <div class="step-text  color-text-roxo text-font-sans text-1-sm "><b>3.</b>Recebemos e juntamos suas encomendas em uma única caixa, sem custo adicional
        </div>
    </li>

    <li class="li-step-module2">
        <div class="step-icon"
             style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/aviao_entrega.png')"></div>
        <div class="step-text  color-text-roxo text-font-sans text-1-sm "><b>4.</b>Enviamos para você, onde quiser, pelos melhores preços
            lojas online dos EUA
        </div>
    </li>
    
</ul>

<div class="content-cadastro-space-modulo2">

</div>
<div style="width: auto; height: auto;  background-image: url('public/assets/metronic/custom/img/photo/aviao_branco.png')">
<div class="content-cadastro-email-modulo3" style="     background-repeat: no-repeat;
        background-size: cover;
            background-color: white;
        background-position-x: right; background-image: url('public/assets/metronic/custom/img/photo/banner.png')">
<!--  style="     background-repeat: no-repeat;
        background-size: 900px 900px;
        background-position-x: right; background-image: url('public/assets/metronic/custom/img/photo/img_back_cad.png')"  -->
    <div class="text-font-sans text-bold text-title color-text-green" style="margin: 80px" ng-show="finishCad">Obrigado por se cadastre, olhe seu E-mail para verificar suas informações!</div>

    <div class="content-text-cadastro-module3" ng-show="step1">
        <div class="limit-text-cadastro text-bold color-text-roxo text-font-sans text-title">Pronto para
            obter seu endereço nos EUA?
        </div>
        <div style="    padding-top: 20px;
    width: 420px;" class="text-font-sans text-1-sm color-text-grey-light">Apenas com os dados
            abaixo você já garante seu endereço e o primeiro passo para economizar!
        </div>
        <div class="content-two-inputs">
            <input class="input-cadastro-mini text-1-sm text-font-sans" ng-class="{'error_cad': dataCadError.user_nome_error }" placeholder="Nome" ng-model="dataCad.user_nome"
                   >
            <input class="input-cadastro-mini text-1-sm text-font-sans" ng-class="{'error_cad': dataCadError.user_sobrenome_error  }" ng-model="dataCad.user_sobrenome"
                    placeholder="Sobrenome">
        </div>
        <input class="input-cadastro text-1-sm text-font-sans" placeholder="Digite seu e-mail" ng-class="{'error_cad': dataCadError.user_email_error }" type="email" ng-model="dataCad.user_email">
        <div ng-show="dataCad_error.user_email_exist" style="color: red;">Esse E-mail já esta cadastro!</div>

        <div class="content-btn-more-about">
            <button class="btn-config-2 color-background-roxo color-text-white text-1-sm" ng-click="cadastro()"><div class="loader-green" ng-show="loader_cad1"></div><div ng-show="!loader_cad">
                    Garanta seu endereço!</div>
            </button>
        </div>
    </div>
</div>

<div class="content-tutorial-module3">
    <div class="content-align-tutorial-module3">
        <div class="title-tutorial-module3 color-text-grey text-title">
            Sabemos que
            <div class="color-text-green" style="    display: initial;">Economizar Dinheiro</div>
            é o principal motivo para você usar os serviços KeepBox
        </div>
    </div>
    <div class="content-step-tutorial-module3">

        <ul class="ul-tutorial">
            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/icon/wallet.png'>
                    <div class="content-text-tutorial text-1-sm text-font-sans color-text-grey-light">Economize até
                        <div class="color-text-green" style="    display: initial;">80%</div>
                        em
                        fretes. Junte suas compras em um único volume e economize ainda mais dinheiro
                    </div>
                </div>
            </li>
            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/icon/armazenar.png'>
                    <div class="content-text-tutorial text-1-sm text-font-sans color-text-grey-light">Armazene suas compras
                        por até 60 dias e aproveite todas as
                        oportunidades de
                        comprar nos EUA
                    </div>
                </div>
            </li>
            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/icon/atendimento_em_pt.png'>
                    <div class="content-text-tutorial text-1-sm text-font-sans color-text-grey-light">Suporte de
                        atendimento ao cliente em
                        <div class="color-text-green" style="    display: initial;"><b>português</b></div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="ul-tutorial">

            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/icon/fotos.png'>
                    <div class="content-text-tutorial text-1-sm text-font-sans color-text-grey-light">Fotos gratuitas de
                        pacotes recebidos
                    </div>
                </div>
            </li>
            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/icon/agillidade_de_envio.png'>
                    <div class="content-text-tutorial text-1-sm text-font-sans color-text-grey-light">Agilidade de
                        Entrega
                    </div>
                </div>
            </li>


            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/icon/cartao_taxa_unica.png'>
                    <div class="content-text-tutorial text-1-sm text-font-sans color-text-grey-light">Pague uma taxa única
                        de serviço:
                        <div class="color-text-green" style="    display: initial;">Apenas U$12,90</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="content-btn-more-about align-center">
        <a href="<?= base_url('home/servico' )?>">
        <button class="btn-config color-background-roxo color-text-white text-1-sm">
            Confira nossos Serviços
        </button>
        </a>
    </div>
</div>

<div class="content-sm-btn-call color-background-roxo align-center">
    <div class="content-text-and-btn-call ">
        <div class="text-title-sm text-font-sans color-text-white text-bold" style="    float: left;
    margin-right: 50px;">
            Comece a economizar hoje!
        </div>
        <div>
            <a href="<?= base_url('home/cadastroPage' )?>">
            <button class="btn-config shadow color-background-green color-text-white text-1-sm">
                Inscrever-se hoje gratuitamente
            </button>
            </a>
        </div>
    </div>
</div>

<div class="content-simulator-module4 align-x-center">
    <div class="content-simulator">
        <div class="content-left-simulator">
            <div class="color-text-roxo text-title-xl  text-font-sans">Simulador de Preços</div>
            <div style="    margin-top: 50px;">
            <div class="styled-select select-mini align-y-center background-select-roxo rounded" style=" margin-right: 40px;background: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/icon-select.jpeg') no-repeat ;">
                <select>
                    <option>Lbs</option>
                </select>
            </div>
            <div class="styled-select align-y-center background-select-roxo rounded" style="background: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/icon-select.jpeg') no-repeat 96% 0;">
                <select>
                    <option>Brasil</option>

                </select>
            </div>
            </div>
        </div>
        <div class="content-right-simulator ">
            <div style="    margin-top: 38px; " class="color-text-roxo text-1-sm text-font-sans">Em baixo de cada modalidade de frete:</div>
            <div class="slider-margin" >
                <li class="li-step-tutorial" style="padding: 0px 0px; width: auto"> {{range_simulator_home}}</li>
                <li class="li-step-tutorial" style="float: right; padding: 0px 0px; width: auto"> 66</li>
                 <input type="range" max="66" ng-model="range_simulator_home" ng-change="changeValue()" class="slider"></input>
               
            </div>

           

        </div>
    </div>
</div>
<div class="content-simulator-data-module4 align-center">
    <div class="content-border-simulator-shadow">
        <ul class="content-ul-simulator-data">
            <li class="content-li-simulator-data">
                <div class="text-1-sm text-font-sans text-bold color-text-grey">
                    Priority Mail Express International™
                </div>
<!--                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
<!--                </div>-->
                <div class="text-1 color-text-green color-text-green text-bold text-font-sans">
                    <b>TOTAL:</b>R$ {{valor_plano_1}}
                </div>
            </li>
            <li class="content-li-simulator-data">
                <div class="text-1-sm text-font-sans text-bold color-text-grey"">
                    LPriority Mail International®
                </div>
<!--                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
<!--                </div>-->
                <div class="text-1 color-text-green color-text-green text-bold text-font-sans">
                    <b>Total:</b>R$ {{valor_plano_2}}
                </div>
            </li>
            <li class="content-li-simulator-data">
                <div  ng-show="range_simulator_home < 5">
                <div class="text-1-sm text-font-sans text-bold color-text-grey"">
                    First-Class Package International Service™
                </div>
<!--                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
<!--                </div>-->
                <div class="text-1 color-text-green color-text-green text-bold text-font-sans">
                    <b>Total:</b>R$ {{valor_plano_3}}
                </div>
</div>
            </li>
        </ul>
    </div>
</div>

<div style="       padding-top: 75px;">
    <div class="text-bold step-text color-text-roxo text-font-sans text-title content-align-tutorial-module3">Alguma dúvida?</div>
        

        <div class="content-align-tutorial-module3 step-text" style="    height: auto;">
          <span style="background: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/arrow-left.png');
                  " class="step-icon-2" onclick="plusDivs(-1)" ></span>

          
          <div class="mySlides slide-content-width" style="    display: flex;
    justify-content: center;">
               <li class="content-li-info-data">
                 <div class=" color-text-green color-text-green text-bold text-font-sans text-1">
                     O endereço KeepBox é um P.O. box (similar a caixa postal do Brasil)?
                </div>
                <div class=" text-font-sans color-text-grey text-1-sm" style="    padding-top: 50px;">
                    O “seu endereço KeepBox” é uma suíte física e real em nosso armazém dedicada às suas encomendas, ou seja, o seu endereço KeepBox não é um P.O. box.
                    Observação: Muitas lojas não enviam para P.O. box, por isso o seu endereço KeepBox não poderia ser um P.O. box.


                </div>
               
            </li>
            <li class="content-li-info-data">
                <div class=" color-text-green color-text-green text-bold text-font-sans text-1">
                    O método utilizado pela KeepBox é legal?
                </div>
                <div class=" text-font-sans color-text-grey text-1-sm" style="    padding-top: 50px;">
                    Sim! A KeepBox funciona como um amigo ou parente que mora nos EUA e envia encomendas para você — ou seja, é totalmente legal. Utilizamos o Serviço Postal Nacional dos Estados Unidos (USPS) para o frete das mercadorias ao Brasil por serem extremamente seguros e por praticarem as melhores tarifas de envio do mercado americano.
                </div>
                
            </li>
          </div>
          
           <div class="mySlides slide-content-width" style="        display: flex;
    justify-content: center;">
               <li class="content-li-info-data">
                <div class=" color-text-green color-text-green text-bold text-font-sans text-1">
                        <b>Como efetuo meu cadastro na KeepBox?</b>
                    </div>
                    
                    <div class=" text-font-sans color-text-grey text-1-sm" style="    padding-top: 50px;">
                        Para se cadastrar gratuitamente na KeepBox é muito fácil. Clique aqui e preencha seu Nome, Sobrenome e e-mail. Simples assim!
                    </div>
                    
                </li>
                <li class="content-li-info-data">
                    <div class=" color-text-green color-text-green text-bold text-font-sans text-1 text-font-sans">
                        <b>Pago alguma taxa para me cadastrar na KeepBox?</b>
                    </div>
                    
                    <div class="text-font-sans color-text-grey text-1-sm" style="    padding-top: 50px;">
                        O cadastro é totalmente gratuito! Registre-se agora e receba seu endereço KeepBox nos EUA imediatamente!
                    </div>
                    
                </li>
          </div>
           <div class="mySlides slide-content-width" style="     display: flex;
    justify-content: center;">
               <li class="content-li-info-data">
                 <div class=" color-text-green color-text-green text-bold text-font-sans text-1">
                    <b>Tenho que pagar alguma taxa mensal ou anual à KeepBox depois que me inscrevo?
                    </b>
                </div>
                
                <div class="text-font-sans color-text-grey text-1-sm" style="    padding-top: 50px;">
                    Não! Não cobramos taxa de inscrição, mensalidade ou anuidade.
                    Além disso, seus dados de cartão de crédito não são exigidos para sua inscrição. Quando decidir enviar suas encomendas ao Brasil, você pagará apenas uma taxa única e reduzida pelos serviços da KeepBox.
                </div>
               
            </li>
            <li class="content-li-info-data">
                <div class=" color-text-green color-text-green text-bold text-font-sans text-1" >
                    <b>Como funciona os serviços da KeepBox?</b>
                </div>
                
                <div class="text-font-sans color-text-grey text-1-sm" style="    padding-top: 50px;">
                    A KeepBox disponibiliza um endereço nos EUA para você armazenar suas compras realizadas nas lojas online do EUA. Posteriormente juntamos tudo e enviamos suas encomendas para o endereço que você nos indicar.
                    Tudo isso sem que você precise sair da sua casa e por uma taxa KeepBox única e reduzida.
                </div>
                
            </li>
          </div>
          <span style="background: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/arrow-left.png');
                  -moz-transform: scaleX(-1);
                  -o-transform: scaleX(-1);
                  -webkit-transform: scaleX(-1);
                  transform: scaleX(-1);
                  filter: FlipH;
                  -ms-filter: FlipH;" class="step-icon-2" onclick="plusDivs(1)"></span>
        </div>
    </div>

          

<div class="content-outras-duvidas" >
    <div style="padding-right: 30px" class="color-text-grey-light text-font-sans text-title-sm" >Outras Dúvidas?  &nbsp;
    </div> <button class="btn-config-2 color-background-roxo color-text-white text-1-sm">Confira Aqui</button>
</div>
<div >
          
        <div class="content-module-2-sm width_padrao color-background-green ">

        </div>

        <div class="content-news-banner " style="padding-top: 92px" >
            <div  class="color-text-green text-title text-bold text-font-san"> FIQUE POR DENTRO! </div><br>
            <div  class="text-1 color-text-white"  style="    padding-top: 50px;
        width: 700px;" > Veja as últimas notícias sobre os segredos das importações no Youtube da KeepBox </div>

            <button style="    margin-top: 40px;" class="btn-config-2 color-background-roxo color-text-white text-1-sm" >Venha conhecer </button>
        </div>


    <iframe  class="content-video-module2-2 " src="https://www.youtube.com/embed/BT3z50zcA-g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

</div>
</div>
<!---->
<!--<div style="padding-top: 45%">-->
<!--    -->
<!--    <div class="content-simulator-data-module4 align-center">-->
<!--   -->
<!--        <ul class="content-ul-simulator-data">-->
<!--            <li class="content-li-simulator-data">-->
<!--                <div class="text-1 text-font-sans text-bold">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
<!--                </div>-->
<!--                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
<!--                </div>-->
<!--                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">-->
<!--                    Ler mais-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="content-li-simulator-data">-->
<!--                <div class="text-1 text-font-sans text-bold">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
<!--                </div>-->
<!--                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
<!--                </div>-->
<!--                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">-->
<!--                    Ler mais-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="content-li-simulator-data">-->
<!--                <div class="text-1 text-font-sans text-bold">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
<!--                </div>-->
<!--                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">-->
<!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
<!--                </div>-->
<!--                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">-->
<!--                    Ler mais-->
<!--                </div>-->
<!--            </li>-->
<!--        </ul>-->
<!---->
<!--</div >-->
<!--<br>-->
<!--<div class="align-x-center" >-->
<!--    <button class="btn-config-2 color-background-green color-text-white text-1 " >Mais dicas Keepbox</button>-->
<!--</div>-->
<!--<br>-->
<!---->
<!--</div>-->

<script>
//Slider Alguma duvida
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "flex";
}
</script>

</body>
</html>