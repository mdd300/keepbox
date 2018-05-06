
<div class="content-img-top-serv width_padrao">
    <img class="img-top-serv width_padrao" src="<?= base_url() ?>public/assets/metronic/custom/img/photo/banner_servicos.jpg">
</div>

<div class="content-text-banner-serv ">
    <div class="color-text-white text-title text-font-sans align-center" style="position: relative">
        SERVIÇOS E PREÇOS
    </div>
</div>
   
        
<div class="text-font-sans content-li-center-vert" >

    <ul class="content-ul-data-serv">
        <li>
           <div class="color-text-green text-title-sm">SERVIÇOS BÁSICOS</div> 
            
        </li>
    </ul>
     <ul class="content-ul-data-serv">
        <li>
           <div class="color-text-green text-bold text-2 text-font-sans">Recebimento de Encomendas (GRÁTIS) </div>
           <div class="color-text-grey-light text-2 text-font-sans" style="padding-top: 10px">A KeepBox nã cobra por pacotes recebidos. Fique à vontade para comprar o quanto quiser nas diversas lojas onlines dos EUA.</div>
        </li>
    </ul>

    <ul class="content-ul-data-serv">
        <li>
           <div class="color-text-green text-bold text-2 text-font-sans" >Armazenamento de Encomendas (GRÁTIS)</div>
           <div class="color-text-grey-light text-2 text-font-sans" style="padding-top: 10px"
>A Keepbox recebe e armazena suas compras por até 60 dias completamente grátis. Se precisar de mais 30 dias, contrate o Armazenamento Extra (Taxa fixa: US$5 + US$1 por dia)
           Após 90 dias, as encomendas serão vendidas, doadas ou descartadas .</div> 
                                        
        
        </li>
    </ul>

    <ul class="content-ul-data-serv">
        <li>
           <div class="color-text-green text-bold text-2 text-font-sans" >Empacotamento de Encomendas (GRÁTIS) </div>
           <div class="color-text-grey-light text-2 text-font-sans"style="padding-top: 10px" >A KeepBox junta as suas compras em um único pacote para você economizar no frete, pagando um único envio.</div>
        </li>
    </ul>


</div>

<div class="align-x-center" style="padding-top: 10%">
    <button class="btn-config-2 color-background-roxo color-text-white text-font-sans text-1">Envio de encomendas &nbsp; &nbsp; Taxa KeepBox: Apenas US$12,90  &nbsp;  &nbsp;Taxa KeepBox: Apenas US$12,90 </button>

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
            <div class="color-text-roxo align-x-center text-1 text-font-sans">Em baixo de cada modalidade de frete:</div>
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
                <!--                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">-->
                <!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
                <!--                </div>-->
                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    <b>Total:</b>R$ {{valor_plano_1}}

                </div>
            </li>
            <li class="content-li-simulator-data">
                <div class="text-1 text-font-sans text-bold">
                    LPriority Mail International®
                </div>
                <!--                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">-->
                <!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
                <!--                </div>-->
                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    <b>Total:</b>R$ {{valor_plano_2}}

                </div>
            </li>
            <li class="content-li-simulator-data" ng-show="range_simulator_home < 5">
                <div class="text-1 text-font-sans text-bold">
                    First-Class Package International Service™

                </div>
                <!--                <div class="text-1 text-font-sans color-text-grey" style="padding-top: 20px">-->
                <!--                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,-->
                <!--                </div>-->
                <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    <b>Total:</b>R$ {{valor_plano_3}}
                </div>
            </li>
        </ul>
    </div>
</div>

<div class="content-simulator-module4-serv ">
  
        <div class="color-text-roxo text-title-md text-font-sans">COMPRA ASSISTIDA / PERSONAL SHOPPER</div>
        <div class="color-text-roxo text-1 text-font-sans" > Vamos às compras para você</div>

</div>
    
    <div class=" align-center">
    <div class="content-border-simulator-shadow">
        <ul class="content-ul-assist-data">
            <li class="content-li-simulator-data">
                 <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    U$7.90
                </div>
                <div class="text-1 color-text-green text-font-sans text-bold">
                    +7% das compras (até US$1.000)
                </div>
                
               
            </li>
            <li class="content-li-simulator-data">
               
            </li>
            <li class="content-li-simulator-data">
                 <div class="text-title-sm color-text-green color-text-green text-bold text-font-sans">
                    U$7.90
                </div>
                <div class="text-1 color-text-green text-font-sans text-bold">
                    +6% das compras (até US$1.000)
                </div>
                
               
            </li>
        </ul>
    </div>
</div>

<div class="align-x-center" >
   <div class="content-li-info-data-serv">
    <div class="text-1 text-font-sans color-text-grey-light text-2 padding-text">
        Pensando em seu conforto, se preferir, realizamos as compras para você! Basta nos enviar os links dos produtos desejados. 
 
    </div>
     <div class="text-1 text-font-sans text-2 color-text-grey-light padding-text step-text">
        A Compra Assistida é o método preferido dos clientes que ainda não possuem cartão de crédito internacional ou têm dificuldades com o inglês e/ou com os sites internacionais ou, simplesmente não querem perder tempo com as pesquisas e burocracias das compras.
        
    </div>
</div>


</div>




</body>
</html>