<div class="width_padrao">

<div class="content-header-duvidas align-center" style="    background-image: url('<?= base_url()?>public/assets/metronic/custom/img/photo/banner_duvidas.jpeg') ;">
    <div class="content-text-header-duvidas">
    <div class="color-text-white text-title-xl text-font-sans center" >
        Qual sua dúvida?
    </div>
        <form autocomplete="off">
        <input type="text" style="display:none" />
        <input ng-keydown="inputSearch()" value=""  ng-model="searchPergunta" id="search-duvidas" class="input-duvidas text-1 text-font-sans color-text-white">

        </form></div>
</div>
    <div class="align-x-center" ng-show="loaderPesquisa" style="padding-top: 50px">
    <div class="loader"></div>
    </div>
    <div class="align-x-center" ng-show="numRowsDuvidas.length == 0 && loaderPesquisa == false" style="padding-top: 50px">
        <div class=" content-error-duvidas justify text-font-sans " style="    display: initial;
"> <div class="text-title-xl color-text-grey" style="    display: initial;
">Não encontramos um resultado</div><div style="    display: initial;
" class="text-title color-text-grey"> para a pesquisa '{{searchPergunta}}' :( <br> Procure digitar uma palavra por vez para ver o resultado e tente usar palavras chave para otimizar o resultado da sua busca. Caso não tenha encontrado mande um email para nós e retornaremos sua dúvida:</div>
            <div class="text-title color-text-green text-bold" style="    display: initial;
"> yannrodrigues20@gmail.com</div></div>
    </div>

    <div class="content-duvidas width-content">
<div ng-repeat="duvida in numRowsDuvidas = (perguntas | filter:searchPergunta : false) | limitTo: limitPerguntas track by $index" ng-show="loaderPesquisa == false">


    <div ng-mouseenter="hovering = true"
         ng-mouseleave="hovering = false"
         class="content-pergunta-duvidas text-title-sm color-text-grey text-font-sans text-bold " ng-click="openDuvida(duvida.id)">
        {{duvida.pergunta}}
        <span class="seta-baixo" ng-show="!duvidas[duvida.id]" ng-class="{'seta-baixo-green':hovering}"></span>
        <span class="seta-cima" ng-show="duvidas[duvida.id]" ng-class="{'seta-cima-green':hovering}"
              ></span>
    </div>
    <div class="content-resposta-duvida text-1-sm color-text-grey-light color-text-grey text-font-sans " ng-show="duvidas[duvida.id]">
        {{duvida.resposta}}
    </div>


</div>
    <div class="align-center" style="padding-top: 50px">
        <button class="btn-config color-background-roxo color-text-white text-1" ng-click="limitplus()" ng-show="limitPerguntas < 43 && numRowsDuvidas.length > 0 && loaderPesquisa == false"> Carregar Mais</button>
    </div>
</div>
</div>
<script>
    document.getElementById("search-duvidas").focus();
</script>
</body>
</html>


