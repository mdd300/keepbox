
<div class="content-img-top-home">
    <img class="img-top-home" src="<?= base_url() ?>public/assets/metronic/custom/img/photo/1567603064.jpg">
</div>

<div class="content-text-banner">
    <div class="color-text-green text-title text-font-sans" style="position: relative; text-align: center;">
        COMPRE NAS LOJAS ONLINE DOS <b>ESTADOS UNIDOS</b>
    </div>
</div>

<div class="content-text-banner-2">
    <div class="color-text-white  text-font-sans" style="position: relative; font-size: 2.4em; text-align: center">
        A KeepBox envia para você no Brasil
    </div>
</div>

<div class="content-text-banner-3">
    <a href="<?= base_url('home/cadastroPage' )?>">
    <button class="color-background-roxo color-text-white text-2 btn-config text-font-sans"  style="position: relative">
        Clique para garantir seu endereço nos EUA
    </button>
    </a>
</div>

<div class="content-module-2 color-background-green">

</div>

<div class="content-more-about-text ">
    <div class="text-2 text-font-sans color-text-grey-light padding-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum
    </div>
    <div class="content-btn-more-about">
        <button class="btn-config color-background-green color-text-white text-1">
            Veja mais sobre nós
        </button>
    </div>
</div>

<div class="content-video-module2 color-background-white" style="background-color: red">
    <!---->
    <!--Video aqui-->
    <!---->
</div>

<div class="content-text-module2">
    <div class="color-text-roxo text-title text-font-sans text-bold">
        Como a Keepbox funciona?
    </div>
</div>

<ul class="ul-step-module2">
    <li class="li-step-module2">
        <div class="step-icon"
             style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/user_icon.png')"></div>
        <div class="step-text color-text-roxo text-font-sans text-1 "><b>1.</b>Crie sua conta KeepBox e compre nas lojas
            online dos EUA
        </div>
    </li>
    <li class="li-step-module2">
        <div class="step-icon"
             style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/user_icon.png')"></div>
        <div class="step-text color-text-roxo text-font-sans text-1"><b>2.</b>Mande entregar suas compras no seu
            endereço KeepBox
    </li>
    <li class="li-step-module2">
        <div class="step-icon"
             style="background-image: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/user_icon.png')"></div>
        <div class="step-text  color-text-roxo text-font-sans text-1 "><b>3.</b>Crie sua conta KeepBox e compre nas
            lojas online dos EUA
    </li>
    
</ul>

<div class="content-cadastro-space-modulo2">

</div>
<div class="content-cadastro-email-modulo3">
    <div class="text-font-sans text-bold text-title color-text-green" style="margin: 80px" ng-show="finishCad">Obrigado por se cadastre, olhe seu E-mail para verificar suas informações!</div>

    <div class="content-text-cadastro-module3" ng-show="step1">
        <div class="limit-text-cadastro text-bold step-text color-text-roxo text-font-sans text-title-md">Pronto Para
            Obter Seu endereço nos EUA?
        </div>
        <div class="limit-text-cadastro2 step-text text-font-sans text-2 color-text-grey-light">Apenas com os dados
            abaixo você já garante seu endereço e o primeiro passo para economizar!
        </div>
        <div class="content-two-inputs">
            <input class="input-cadastro-mini text-2 text-font-sans" ng-class="{'error_cad': dataCadError.user_nome_error }" placeholder="Nome" ng-model="dataCad.user_nome"
                   >
            <input class="input-cadastro-mini text-2 text-font-sans" ng-class="{'error_cad': dataCadError.user_sobrenome_error  }" ng-model="dataCad.user_sobrenome"
                    placeholder="Sobrenome">
        </div>
        <input class="input-cadastro text-2 text-font-sans" placeholder="Digite seu e-mail" ng-class="{'error_cad': dataCadError.user_email_error }" type="email" ng-model="dataCad.user_email">
        <div ng-show="dataCad_error.user_email_exist" style="color: red;">Esse E-mail já esta cadastro!</div>

        <div class="content-btn-more-about">
            <button class="btn-config-2 color-background-roxo color-text-white text-1" ng-click="cadastro()"><div class="loader-green" ng-show="loader_cad1"></div><div ng-show="!loader_cad">
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
                         src='<?= base_url() ?>public/assets/metronic/custom/img/photo/1567603064.jpg'>
                    <div class="content-text-tutorial text-1 text-font-sans color-text-grey-light">Economize até
                        <div class="color-text-green" style="    display: initial;">80%</div>
                        em
                        fretes. Junte suas compras em um único volume e economize ainda mais dinheiro
                    </div>
                </div>
            </li>
            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/photo/1567603064.jpg'>
                    <div class="content-text-tutorial text-1 text-font-sans color-text-grey-light">Pague uma taxa única
                        de serviço:
                        <div class="color-text-green" style="    display: initial;">Apenas U$12,90</div>
                    </div>
                </div>
            </li>
            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/photo/1567603064.jpg'>
                    <div class="content-text-tutorial text-1 text-font-sans color-text-grey-light">Armazene suas compras
                        por até 60 dias e aproveite todas as
                        oportunidades de
                        comprar nos EUA
                    </div>
                </div>
            </li>
        </ul>
        <ul class="ul-tutorial">
            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/photo/1567603064.jpg'>
                    <div class="content-text-tutorial text-1 text-font-sans color-text-grey-light">Suporte de
                        atendimento ao cliente em
                        <div class="color-text-green" style="    display: initial;"><b>português</b></div>
                    </div>
                </div>
            </li>
            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/photo/1567603064.jpg'>
                    <div class="content-text-tutorial text-1 text-font-sans color-text-grey-light">Fotos gratuitas de
                        pacotes recebidos
                    </div>
                </div>
            </li>
            <li class="li-step-tutorial">
                <div class="content-border-shadow-li-tutorial">
                    <img class="content-icon-tutorial"
                         src='<?= base_url() ?>public/assets/metronic/custom/img/photo/1567603064.jpg'>
                    <div class="content-text-tutorial text-1 text-font-sans color-text-grey-light">Agilidade de
                        Entrega
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="content-btn-more-about align-center">
        <button class="btn-config-2 color-background-roxo color-text-white text-1">
            Confira nossos Serviços
        </button>
    </div>
</div>

<div class="content-sm-btn-call color-background-roxo align-center">
    <div class="content-text-and-btn-call ">
        <div class="text-title-sm text-font-sans color-text-white text-bold" style="float: left;">
            Comece a economizar hoje!
        </div>
        <div style="float: right">
            <button class="btn-config shadow color-background-green color-text-white text-1">
                Inscrever-se hoje gratuitamente
            </button>
        </div>
    </div>
</div>

<div class="content-simulator-module4 align-x-center">
    <div class="content-simulator">
        <div class="content-left-simulator">
            <div class="color-text-roxo text-title text-bold text-font-sans">Simulador de Preços</div>
            <div style="margin-top: 30px;">
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
            <div style="margin-top: 18%" class="color-text-roxo align-x-center text-1 text-font-sans">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
            <div class="slider-margin" >
                <li class="li-step-tutorial"> {{range_simulator_home}}</li>
                <li class="li-step-tutorial" style="margin-left: 29%"> 66</li>
                 <input type="range" max="66" ng-model="range_simulator_home" ng-change="changeValue()" class="slider"></input>
               
            </div>

           

        </div>
    </div>
</div>
<div class="content-simulator-data-module4 align-center">
    <div class="content-border-simulator-shadow">
        <ul class="content-ul-simulator-data">
            <li class="content-li-simulator-data">
                <div class="text-1 text-font-sans text-bold">
                    Priority Mail Express International™
                </div>
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    <b>Total:</b>R$ {{valor_plano_1}}
                </div>
            </li>
            <li class="content-li-simulator-data">
                <div class="text-1 text-font-sans text-bold">
                    LPriority Mail International®
                </div>
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    <b>Total:</b>R$ {{valor_plano_2}}
                </div>
            </li>
            <li class="content-li-simulator-data" ng-show="range_simulator_home < 5">
                <div class="text-1 text-font-sans text-bold">
                    First-Class Package International Service™
                </div>
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    <b>Total:</b>R$ {{valor_plano_3}}
                </div>
            </li>
        </ul>
    </div>
</div>

<div>
    <div class="text-bold step-text color-text-roxo text-font-sans text-title-md content-align-tutorial-module3">Alguma dúvida?</div>
        

        <div class="content-align-tutorial-module3 step-text" style="height: 300px">
          <span style="background: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/arrow-left.png')" class="step-icon-2" onclick="plusDivs(-1)"></span>

          
          <div class="mySlides slide-content-width" >
               <li class="content-li-info-data">
                 <div class=" color-text-green color-text-green text-bold text-font-sans">
                    Como saber se vocês receberam minha compra?
                </div>
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    A loja que você comprou deverá lhe enviar a comprovação de envio assim como o número de rastreamento. Você pode acompanhar e saberá quando recebemos. Após recebermos cada cauxa sua lhe enviaremos um e-mail informando sobre o recebimento, vai ser pesado, tirado uma foto e adicionado a sua suíte, não se preocupe, avisamos no mesmo dia que sua caixa chegar.
                </div>
               
            </li>
            <li class="content-li-info-data">
                <div class=" color-text-green color-text-green text-bold text-font-sans">
                    Como eu pago pelo serviço e o frete?
                </div>
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    Após as encomendas serem recebidas ficarão à disposição do cliente em seu estoque para fazer o envio, o valor do frete com nossa taxa de serviço fica a disposição do cliente diretamente no procedimento do envio pelo site. Esse valor pode ser pago por depósito / trasnferência  no Banco do Brasil ou PayPal, após pago sua caixa é enviada em até 24 horas úteis.
                </div>
                
            </li>
          </div>
          
           <div class="mySlides slide-content-width">
               <li class="content-li-info-data">
                <div class=" color-text-green color-text-green text-bold text-font-sans">
                        <b>Slide 2</b>
                    </div>
                    
                    <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    </div>
                    
                </li>
                <li class="content-li-info-data">
                    <div class=" color-text-green color-text-green text-bold text-font-sans">
                        <b>Slide 2</b>
                    </div>
                    
                    <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    </div>
                    
                </li>
          </div>
           <div class="mySlides slide-content-width">
               <li class="content-li-info-data">
                 <div class=" color-text-green color-text-green text-bold text-font-sans">
                    <b>Slide 3</b>
                </div>
                
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
               
            </li>
            <li class="content-li-info-data">
                <div class=" color-text-green color-text-green text-bold text-font-sans">
                    <b>Slide 3</b>
                </div>
                
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                
            </li>
          </div>
          <span style="background: url('<?= base_url() ?>public/assets/metronic/custom/img/icon/arrow-right.png')" class="step-icon-2" onclick="plusDivs(1)"></span>
        </div>
    </div>

          
 </div>

<div class="step-text">
    <div class="limit-text-cadastro step-text color-text-grey-light text-font-sans text-title-sm content-align-tutorial-module3">Outras Dúvidas?  &nbsp;  
        <button class="btn-config-2 color-background-roxo color-text-white text-1">Confira Aqui</button>
    </div> <br>
</div>
<div >
          
        <div class="content-module-2-sm color-background-green ">  
        </div>

        <div class="content-news-banner " style="padding-top: 7%" >
            <div  class="color-text-green text-title text-font-san"> FIQUE POR DENTRO! </div><br>
            <div  class="text-title-sm color-text-white"  > Veja as últimas notícias sobre os segredos </div>
            <div  class="text-title-sm color-text-white"  >das importações no Youtube da KeepBox </div>
            <br>
            <button class="btn-config-2 color-background-roxo color-text-white text-1" >Venha conhecer </button>
        </div>

        <div class="content-video-module2-2 color-background-white" style="background-color: red">
            <!---->
            <!--Video aqui-->
            <!---->
        </div>              
</div>


<div style="padding-top: 45%">
    
    <div class="content-simulator-data-module4 align-center">
   
        <ul class="content-ul-simulator-data">
            <li class="content-li-simulator-data">
                <div class="text-1 text-font-sans text-bold">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    Ler mais
                </div>
            </li>
            <li class="content-li-simulator-data">
                <div class="text-1 text-font-sans text-bold">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    Ler mais
                </div>
            </li>
            <li class="content-li-simulator-data">
                <div class="text-1 text-font-sans text-bold">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                </div>
                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    Ler mais
                </div>
            </li>
        </ul>

</div >
<br>
<div class="align-x-center" >
    <button class="btn-config-2 color-background-green color-text-white text-1 " >Mais dicas Keepbox</button>
</div>
<br>

</div>


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
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>