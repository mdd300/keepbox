<div class="width_padrao">
<div class="content-header-duvidas align-center">
    <div class="content-text-header-duvidas">
    <div class="color-text-grey text-title-xl text-font-sans grey-text-duvidas center" style="opacity: 0.6">
        Qual sua dúvida?
    </div>
        <input ng-model="searchPergunta" id="search-duvidas" class="input-duvidas text-1 text-font-sans color-text-grey-light">
    </div>
</div>

<div class="content-duvidas width-content">
<div ng-repeat="duvida in perguntas | filter:searchPergunta  | limitTo: limitPerguntas track by $index">
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
        <button class="btn-config-2 color-background-roxo color-text-white" ng-click="limitplus()" ng-show="limitPerguntas < 43"> Carregar Mais</button>
    </div>
</div>
</div>
<script>
    document.getElementById("search-duvidas").focus();
</script>
</body>
</html>


