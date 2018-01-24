<!-- END: Subheader -->
<div class="m-content" ng-controller="UserList">

    <div class="row">
        <div class="col-xl-12">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Listagem de usuários
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <div class="agrupamento-drop" data-toggle="modal" data-target="#m_modal_1" ng-click="getData()">
                            <div class="btn m-btn--pill m-btn--air btn-warning circ-button">
                                <i class="fa fa-plus"></i>
                            </div>
                            <div class="btn m-btn--pill m-btn--air btn-warning menu-button-circ">
                                Novo usuário
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Datatable -->
                    <div class="m_datatable" id="m_datatable_users"></div>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="password" name="user_pass" class="form-control m-input" ng-model="user.user_pass" ng-required="acao == 'Cadastrar'">
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