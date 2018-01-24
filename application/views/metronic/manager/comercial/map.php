 <div class="m-grid__item m-grid__item--fluid m-wrapper" ng-controller="Lista_map">
    <div class="m-subheader-search">
        <h2 class="m-subheader-search__title">
            MAP
            <span class="m-subheader-search__desc">Material de Apoio</span>
        </h2>
        <form class="m-form">
            <div class="m-input-icon m-input-icon--fixed m-input-icon--fixed-large m-input-icon--right">
                <input type="text" class="form-control form-control-lg m-input m-input--pill"
                       placeholder="Pesquisar" ng-model="mysearch" ng-keyup="$event.keyCode == 13 ? search(mysearch) : null" >
                <span class="m-input-icon__icon m-input-icon__icon--right">
									<span>
										<i class="la la-search"></i>
									</span>
								</span>
            </div>
            <div class="m--margin-top-20 m--visible-tablet-and-mobile"></div>
            <button type="button" class="btn m-btn--pill m-subheader-search__submit-btn"  ng-click="search(mysearch)">
                Buscar
            </button>

            <div class="btn-add-file-content">
                <button type="button" class="btn btn-add-file m-subheader-search__submit-btn" data-toggle="modal"
                        data-target="#m_modal_file_cadastrar"">
                    <i class="m-subheader-search__title font-add-more">+</i>
                </button>
            </div>
            <div class="btn-add-file-content">
                <button type="button" class="btn btn-add-file m-subheader-search__submit-btn" data-toggle="modal"
                        data-target="#m_modal_folder_cadastrar" style="width: auto ; height: auto;     margin: 10px; border-radius: 0%">
                    <i class="m-subheader-search__title" style="padding: 10px; font-size: 1.5rem">Nova Pasta</i>
                </button>
            </div>
        </form>
    </div>
    <div class="m-content content-list-files">

        <div >
            <img ng-click="folderBack()" src="https://cdn3.iconfinder.com/data/icons/line/36/arrow_left-512.png" style="    max-height: 70px;
    max-width: 70px;     margin: 12px;">
        </div>
        <!--Listagem de documentos-->
        <div class="row">



            <!-- pastas -->
            <div class="col-md-2 content-list-folder" ng-repeat=" pasta in pastas" >
                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height "  id='{{pasta.id_pasta}}'>
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
                                <img class="img-file-icon" src="<?= base_url('public/assets/metronic/')?>app/media/img/icons/pasta.png" alt=""/>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



            <!--    Documento-->
            <div class="col-md-2" ng-repeat=" file in list_files" >
                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height " id='{{file.file_id}}'>
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
                                <img class="img-file-icon" src="<?= base_url('public/assets/metronic/')?>app/media/img/icons/{{file.file_icon}}" alt=""/>
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
                             <input type="text" class="form-control" id="nome-pasta"
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

