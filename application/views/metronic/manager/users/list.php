<!-- END: Subheader -->
<div class="m-content content-users" ng-controller="UserList">

    <div class="row">
        <div class="col-xl-12">
            <div class="m-portlet m-portlet--mobile">
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
                <div style="    flex: 100%;">
                    <div class="col-xl-12 col-md-12">
                        <div class="titulo-maior-cabecalho">
                            USUÁRIOS

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
                                        E-mail
                                    </th>
                                    <th class="text-th">
                                        Editar
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="dados in list ">
                                    <td class="text-td">
                                        {{dados.user_name }}
                                    </td>
                                    <td class="text-td">
                                        {{dados.user_email
                                        }}
                                    </td>
                                    <td>
                                                <span style="overflow: visible; width: 110px;">
<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Remover" data-toggle="modal" data-target="#m_modal_3" ng-click="getData(dados.user_id)">
                                 <i class="la la-trash"></i>
                             </a>

                                                         <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Exibir" data-toggle="modal" data-target="#m_modal_2" ng-click="getData(dados.user_id)">
                                <i class="la la-ellipsis-h"></i>
                             </a>
                             <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Editar" data-toggle="modal" data-target="#m_modal_1" ng-click="getData(dados.user_id)">
                                 <i class="la la-edit"></i>
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
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="m_modal_cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form name="usersForm" class='form-horizontal m-form'>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            {{acao}} usuário<br/>
                            <small>* os campos com asterisco são obrigatórios</small>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                    &times;
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" ng-model="user.user_id">
                        
                        <div class="form-group m-form__group">
                            <label for="user_name">Nome*: </label> 
                            <input type="text" name="user_name" class="form-control m-input" ng-model="user.user_name" ng-required="true">
                            <br>
                            <div class="alert alert-danger" ng-show="usersForm.user_name.$invalid && usersForm.user_name.$dirty">
                                O campo nome é obrigatório
                            </div>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="user_email">Email*: </label> 
                            <input type="email" name="user_email" class="form-control m-input" ng-model="user.user_email" ng-required="true" ng-disabled="acao=='Editar'">
                            <br>
                            <div class="alert alert-danger" ng-show="usersForm.user_email.$invalid && usersForm.user_email.$dirty">
                                O campo email é obrigatório
                            </div>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="user_login">Login*: </label> 
                            <input type="text" name="user_login" class="form-control m-input" ng-model="user.user_login" ng-required="true" ng-disabled="acao=='Editar'">
                            <br>
                            <div class="alert alert-danger" ng-show="usersForm.user_login.$invalid && usersForm.user_login.$dirty">
                                O campo login é obrigatório
                            </div>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="user_pass">Senha<span ng-show="acao=='Cadastrar'">*</span>: </label> 
                            <span ng-if="acao == 'Cadastrar'">
                                <input type="password" name="user_pass" class="form-control m-input" ng-model="user.user_pass" ng-required="acao != 'Editar'">
                            </span>
                            <span ng-if="acao == 'Editar'">
                                <input type="password" name="user_pass" class="form-control m-input" ng-model="user.user_pass" placeholder="********" ng-required="acao == 'Cadastrar'">
                            </span>
                            <br>
                            <div class="alert alert-danger" ng-show="usersForm.user_pass.$invalid && usersForm.user_pass.$dirty && acao == 'Cadastrar'">
                                O campo senha é obrigatório e deve possuir no mínimo 6 caracteres
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Fechar
                        </button>
                        <button type="button" class="btn btn-primary" ng-class="spinner" ng-disabled="usersForm.user_name.$invalid || usersForm.user_email.$invalid || usersForm.user_login.$invalid || usersForm.user_pass.$invalid" ng-click="save(user)">
                            Salvar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="modal fade" id="m_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Visualizar usuário
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                                &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="col-md-6">
                        <tr>
                            <td>
                                <b>Nome:</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{user.user_name}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Email:</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{user.user_email}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Login:</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{user.user_login}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Tipo:</b>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{user.user_type}}
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Fechar
                    </button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">
                        Voltar
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="m_modal_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Exclusão de usuário
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                                &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir o usuário {{user.user_name}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="button" class="btn btn-danger" ng-class="spinner" ng-click="remove(user)">
                        Confirmar
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>