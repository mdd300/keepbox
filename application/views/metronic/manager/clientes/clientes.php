<div class="m-grid__item m-grid__item--fluid m-wrapper content-all" ng-controller="Clientes_crud">
    <input type="hidden" value="<?= base_url() ?>" class="baseUrl">


    <div class="m-content " id="content-clientes">
        <div class="m-portlet">

            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30 content-pesquisa">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center" style="padding: 19px;">
                            <div class="col-md-4">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input m-input--solid" ng-model="mysearch"
                                           ng-keyup="$event.keyCode == 13 ? search(mysearch) : null"
                                           placeholder="Pesquisar" id="generalSearch">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="agrupamento-drop">
                        <div class="btn m-btn--pill m-btn--air btn-warning circ-button" data-toggle="modal"
                             data-target="#m_modal_cadastro" style="margin-right: 45px">
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-row--no-padding m-row--col-separator-xl">

                <!-- lista clientes -->
                <div style="    flex: 100%;">
                    <div class="col-xl-12 col-md-12">
                        <div class="titulo-maior-cabecalho">
                            {{titulo_open}}

                        </div>
                    </div>
                    <div class="m-widget1">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-th">
                                        Nome
                                    </th>
                                    <th class="text-th">
                                        CNPJ
                                    </th>
                                    <th class="text-th">
                                        Plano
                                    </th>
                                    <th class="text-th">
                                        Status
                                    </th>
                                    <th class="text-th">
                                        Editar
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="dados in list_clientes ">
                                    <td class="text-td">
                                        {{dados.cliente_nomefantasia}}
                                    </td>
                                    <td>
                                        <input type="text" class="text-td" value="{{dados.cliente_cnpj}}"
                                               style="border-width:0px;border:none; width: 100%" disabled>
                                    </td>
                                    <td class="text-td">
                                        {{dados.cliente_plano}}
                                    </td>
                                    <td class="text-td"
                                        ng-class="{'m--font-success' : dados.cliente_status == 1 ,'m--font-warning' : dados.cliente_status == 0 }">
                                        {{status[dados.cliente_status]}}

                                    </td>
                                    <td>
                                                <span style="overflow: visible; width: 110px;">

                                                          <a href="<?= base_url() ?>manager/comercial/map?id={{dados.cliente_id}}"

                                                             title="Edit details">
                                                              <img class="content-img-user"
                                                                   src="<?= base_url('public/assets/metronic/') ?>app/media/img/icons/vertical-grid-layout.png">
                                                          </a>
                                                </span>
                                        <span style="overflow: visible; width: 110px; padding: 0px 2px">

                                                          <a ng-click="edit(dados.cliente_id)"
                                                             data-toggle="modal"
                                                             data-target="#m_modal_editar"
                                                             title="Edit details">
                                                              <img class="content-img-user"
                                                                   src="<?= base_url('public/assets/metronic/') ?>app/media/img/icons/edit.png">
                                                          </a>
                                                </span>
                                    </td>

                                </tr>
                                </tbody>
                                <tr>
                                    <td colspan="7">
                                        <!--paginação de indice-->
                                        <ul class="pagination sem-bottom">
                                            <li href="" ng-click="moveIndice(false)"><a class="indice-s left"
                                                                                        ng-click="backPage()"><i
                                                            class="fa fa-angle-left"></i></a></li>

                                            <li style="display: flex;"
                                                ng-repeat="indice  in listadeIndices | limitTo: limiteDeIndice : inicioDoIndice"
                                                ng-click="changepage(indice.indice)" class="indice-{{indice.indice}}"><a
                                                        class="indice"
                                                >{{indice.indice}}</a>
                                            </li>

                                            <li href="" ng-click="moveIndice(true)"><a class="indice-s right"
                                                                                       ng-click="nextPage()"><i
                                                            class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- Fim lista clientes-->


                <!--Modal de Esqueci minha senha-->
                <div class="modal fade" id="m_modal_cadastro" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Adicionar novo cliente
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-cadastro">
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Nome:
                                        </label>
                                        <input type="text" class="form-control" id="nome-cliente"
                                               name="cliente_nomefantasia" required="true" ng-required="required">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            E-mail:
                                        </label>
                                        <input type="text" class="form-control" id="email-cliente"
                                               name="cliente_email" required="true" ng-required="required">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Telefone:
                                        </label>
                                        <input type="text" class="form-control" id="telefone-cliente"
                                               name="cliente_telefone">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            CNPJ:
                                        </label>
                                        <input type="text" maxlength="18" class="form-control" id="cnpj-cliente"
                                               name="cliente_cnpj" onkeypress='mascaraMutuario(this,cpfCnpj)'
                                               onblur='clearTimeout()' required="true" ng-required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Endereço:
                                        </label>
                                        <input type="text" class="form-control" id="endereco-cliente"
                                               name="cliente_endereco">

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Numero:
                                        </label>
                                        <input type="text" class="form-control" id="numero-cliente"
                                               name="cliente_numero">

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Complemento:
                                        </label>
                                        <input type="text" class="form-control" id="complemento-cliente"
                                               name="cliente_complemento">

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Estado:
                                        </label>
                                        <input type="text" class="form-control" id="estado-cliente"
                                               name="cliente_estado">

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Status:
                                        </label>
                                        <select id="status-cliente" name="cliente_plano">
                                            <option value="MEI"> MEI</option>
                                            <option value="Micro_Empresa"> Micro Empresa</option>
                                            <option value="Pequeno_Porte"> Pequeno Porte</option>
                                            <option value="Lucro_Presumido"> Lucro Presumido</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Status:
                                        </label>
                                        <select id="status-cliente" name="cliente_status">
                                            <option value="1"> Ativo</option>
                                            <option value="0"> Inativo</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Fechar
                                </button>
                                <button type="button" class="btn btn-primary" ng-click="cadastro_cliente()"
                                        data-dismiss="modal">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Modal-->


                <div class="modal fade" id="m_modal_editar" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    Adicionar novo cliente
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form-cadastro">
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Nome:
                                        </label>
                                        <input type="text" value="{{editArray.cliente_nomefantasia}}" class="form-control" id="nome-cliente"
                                               name="cliente_nomefantasia" required="true" ng-required="required">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            E-mail:
                                        </label>
                                        <input type="text" value="{{editArray.cliente_email}}" class="form-control" id="email-cliente"
                                               name="cliente_email" required="true" ng-required="required">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Telefone:
                                        </label>
                                        <input type="text" value="{{editArray.cliente_telefone}}" class="form-control" id="telefone-cliente"
                                               name="cliente_telefone">
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            CNPJ:
                                        </label>
                                        <input type="text" value="{{editArray.cliente_cnpj}}" maxlength="18" class="form-control" id="cnpj-cliente"
                                               name="cliente_cnpj" onkeypress='mascaraMutuario(this,cpfCnpj)'
                                               onblur='clearTimeout()' required="true" ng-required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Endereço:
                                        </label>
                                        <input type="text" value="{{editArray.cliente_endereco}}" class="form-control" id="endereco-cliente"
                                               name="cliente_endereco">

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Numero:
                                        </label>
                                        <input type="text" value="{{editArray.cliente_numero}}" class="form-control" id="numero-cliente"
                                               name="cliente_numero">

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Complemento:
                                        </label>
                                        <input type="text" value="{{editArray.cliente_complemento}}" class="form-control" id="complemento-cliente"
                                               name="cliente_complemento">

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Estado:
                                        </label>
                                        <input type="text" value="{{editArray.cliente_estado}}" class="form-control" id="estado-cliente"
                                               name="cliente_estado">

                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Status:
                                        </label>
                                        <select id="status-cliente" value="{{editArray.cliente_plano}}" name="cliente_plano">
                                            <option value="MEI"> MEI</option>
                                            <option value="Micro_Empresa"> Micro Empresa</option>
                                            <option value="Pequeno_Porte"> Pequeno Porte</option>
                                            <option value="Lucro_Presumido"> Lucro Presumido</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">
                                            Status:
                                        </label>
                                        <select id="status-cliente" value="{{editArray.cliente_status}}" name="cliente_status">
                                            <option value="1"> Ativo</option>
                                            <option value="0"> Inativo</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Fechar
                                </button>
                                <button type="button" class="btn btn-primary" ng-click="editar_cliente()"
                                        data-dismiss="modal">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Modal-->
            </div>
        </div>
    </div>
</div>

<script>
    function mascaraMutuario(o, f) {
        v_obj = o
        v_fun = f
        setTimeout('execmascara()', 1)
    }

    function execmascara() {
        v_obj.value = v_fun(v_obj.value)
    }

    function cpfCnpj(v) {

        //Remove tudo o que não é dígito
        v = v.replace(/\D/g, "")


        //Coloca ponto entre o segundo e o terceiro dígitos
        v = v.replace(/^(\d{2})(\d)/, "$1.$2")

        //Coloca ponto entre o quinto e o sexto dígitos
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")

        //Coloca uma barra entre o oitavo e o nono dígitos
        v = v.replace(/\.(\d{3})(\d)/, ".$1/$2")

        //Coloca um hífen depois do bloco de quatro dígitos
        v = v.replace(/(\d{4})(\d)/, "$1-$2")


        return v

    }
</script>
