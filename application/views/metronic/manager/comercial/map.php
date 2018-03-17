 <div class="m-grid__item m-grid__item--fluid m-wrapper" ng-controller="Lista_map">
    <div class="m-subheader-search " id="header-map">

        <form class="m-form">

            <div class="content-data-cliente">
                <div class="content-nome">{{dataCliente.cliente_nomefantasia}}</div>
                <div class="content-tipo">Empresa: {{dataCliente.cliente_plano}}</div>
                <div class="content-data">
                        Status: {{status[dataCliente.cliente_status]}}
                    </div>
                <div class="content-status"></div>
            </div>
<div id="content-btn">
            <div class="btn-add-file-content" style="padding: 0px 5px;">
                <button type="button" class="btn btn-add-file m-subheader-search__submit-btn"   data-toggle="modal"
                        data-target="#m_modal_file_cadastrar"">
                <img class="content-img-user" src="<?= base_url('public/assets/metronic/')?>app/media/img/icons/save.png">

                </button>
            </div>
            <div class="btn-add-file-content" style="padding: 0px 5px;">
                <button type="button" class="btn btn-add-file m-subheader-search__submit-btn" data-toggle="modal"
                        data-target="#m_modal_folder_cadastrar"">
                <img class="content-img-user" src="<?= base_url('public/assets/metronic/')?>app/media/img/icons/folder.png">

                </button>
            </div>
</div>
        </form>
    </div>
    <div class="m-content content-list-files">

        <div ng-hide="firstPage == false" style="cursor: pointer">
            <img ng-click="folderBack()" src="<?= base_url('public/assets/metronic/')?>app/media/img/icons/back.png" style="    max-height: 70px;
    max-width: 70px;     margin: 12px;">
        </div>
        <!--Listagem de documentos-->
        <div class="row">



            <!-- pastas -->
            <div class="col-md-2 content-list-folder" ng-repeat=" pasta in list_folders" id='{{pasta.id_pasta}}'>
                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height content-map"  >
                    <!--          Head documento-->
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text text-header-text-color" ng-click="folder(pasta.id_pasta)">
                                    {{pasta.nome_pasta}}
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav" >
                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                    data-dropdown-toggle="hover">
                                    <a
                                       class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                        <i class="la la-ellipsis-h m--font-dark"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first">
                                                            <span class="m-nav__section-text">Ações</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link" ng-click="deleteFolder(pasta.id_pasta)">
                                                                <i class="m-nav__link-icon flaticon-circle"></i>
                                                                <span class="m-nav__link-text">Excluir</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <!--            Corpo documento-->
                    <div class="m-portlet__body" ng-click="folder(pasta.id_pasta)">
                        <div class="m-card-profile__pic img-align-icon">
                            <div class="m-card-profile__pic-wrapper">
                                <img class="img-file-icon" style="cursor:pointer;" src="<?= base_url('public/assets/metronic/')?>app/media/img/icons/folder.png" alt=""/>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



            <!--    Documento-->
            <div class="col-md-2" ng-repeat=" file in list_files" id='{{file.file_id}}'>
                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height content-map" >
                    <!--          Head documento-->
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text text-header-text-color">
                                    {{file.file_nome}}
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                    data-dropdown-toggle="hover">
                                    <a href="#"
                                       class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                        <i class="la la-ellipsis-h m--font-dark"></i>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav">
                                                        <li class="m-nav__section m-nav__section--first">
                                                            <span class="m-nav__section-text">Ações</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="<?=base_url('public/assets/metronic/') . "app/media/img/uploads/"?>{{file.file_link}}" class="m-nav__link" target="_blank">
                                                                <i class="m-nav__link-icon flaticon-file-1"></i>
                                                                <span class="m-nav__link-text">Abrir</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="<?=base_url('public/assets/metronic/') . "app/media/img/uploads/"?>{{file.link_file}}" class="m-nav__link" download="<?=base_url('public/assets/metronic/') . "app/media/img/uploads/"?>{{file.file_link}}">
                                                                <i class="m-nav__link-icon flaticon-download"></i>
                                                                <span class="m-nav__link-text">Baixar</span>
                                                            </a>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="" class="m-nav__link" ng-click="deleteFile(file.file_id)">
                                                                <i class="m-nav__link-icon flaticon-circle"></i>
                                                                <span class="m-nav__link-text">Excluir</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <!--            Corpo documento-->
                    <div class="m-portlet__body">
                        <div class="m-card-profile__pic img-align-icon">
                            <div class="m-card-profile__pic-wrapper">
                                <a href="<?=base_url('public/assets/metronic/') . "app/media/img/uploads/"?>{{file.file_link}}" >
                                <img class="img-file-icon" src="<?= base_url('public/assets/metronic/')?>app/media/img/icons/{{file.file_icon}}" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

     <!--Modal de Cadastras arquivo-->
     <div class="modal fade" id="m_modal_file_cadastrar" tabindex="-1" role="dialog"
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
                             <input type="text" class="form-control" id="nome-file"
                                    name="file_nome">
                         </div>
                         <div class="form-group">
                             <label for="recipient-name" class="form-control-label">
                                 Arquivo:
                             </label>
                             <input type="file" class="form-control" id="file"
                                    name="file" file-input="files">

                         </div>


                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">
                         Fechar
                     </button>
                     <button type="button" class="btn btn-primary" ng-click="save_file()"
                             data-dismiss="modal">
                         Salvar
                     </button>
                 </div>
             </div>
         </div>
     </div>
     <!--end::Modal-->


     <!--Modal de Cadastras arquivo-->
     <div class="modal fade" id="m_modal_folder_cadastrar" tabindex="-1" role="dialog"
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
                     <form class="form-cadastro-folder">
                         <div class="form-group">
                             <label for="recipient-name" class="form-control-label">
                                 Nome da Pasta:
                             </label>
                             <input type="text" class="form-control" ng-model="newFolder" id="nome-pasta"
                                    name="nome-pasta">
                         </div>


                     </form>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">
                         Fechar
                     </button>
                     <button type="button" class="btn btn-primary" ng-click="save_folder()"
                             data-dismiss="modal">
                         Salvar
                     </button>
                 </div>
             </div>
         </div>
     </div>
     <!--end::Modal-->
</div>

