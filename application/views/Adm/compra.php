<!DOCTYPE html>
<html lang="en" ng-app="app_landing">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Keepbox</title>


  <!-- Bootstrap core CSS-->
  <link href="<?=base_url()?>public/assets/metronic/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url()?>public/assets/metronic/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?=base_url()?>public/assets/metronic/vendors/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?=base_url()?>public/assets/metronic/custom/Adm/css/sb-admin.css" rel="stylesheet">

</head>

<body ng-controller="compra_adm_ctrl" class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="admIndex">Keepbox</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Início">
          <a class="nav-link" href="admIndex">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Início</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="easypost">
          <a class="nav-link" href="easyPost">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Easypost</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="admProd">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Produtos</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
              <a class="nav-link" href="CompraAssistida">
                  <i class="fa fa-fw fa-table"></i>
                  <span class="nav-link-text">Compra assistida</span>
              </a>
          </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Compra Assistida</div>
        <div class="card-body">
          <div class="table-responsive">
            <table datatable="ng" dt-options="dtOptions" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nome</th>
                    <th>E-mail</th>
                    <th>Link</th>
                  <th>Quantidade</th>
                    <th>Status</th>
                    <th>Data</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Link</th>
                    <th>Quantidade</th>
                    <th>Status</th>
                    <th>Data</th>
                </tr>
              </tfoot>
              <tbody>
                <tr style="cursor: pointer" class="pointer" ng-repeat="link in compra" data-toggle="modal" data-target="#CompraAssistida" ng-click="selectUser(link.user_id, link.link_id)">
                  <td class="pointer">{{link.user_suite+" "+link.user_nome + " " + link.user_sobrenome}}</td>
                  <td class="pointer">{{link.user_email}}</td>
                  <td class="pointer">{{link.link_enviado}}</td>
                  <td class="pointer">{{link.link_quantidade}}</td>
                    <td class="pointer">{{link.link_status}}</td>
                    <td class="pointer">{{link.link_data}}</td>

                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
            <div class="modal-body">Tem certeza que deseja sair?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="adm">Sim</a>
            </div>
        </div>
      </div>
    </div>

      <div class="modal fade" id="CompraAssistida" tabindex="-1" role="dialog" aria-labelledby="CompraAssistida" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
          <form class="form-horizontal">
              <fieldset>

                  <!-- Form Name -->
                  <legend>Compra Assistida</legend>

                  <!-- Text input-->
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="compra_produto">Nome do Produto</label>
                      <div class="col-md-6">
                          <input ng-model="compraSet.compra_produto" name="compra_produto" type="text" placeholder="Nome" class="form-control input-md" required="">
                      </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="compra_taxas_cambiais">Taxas Cambiais</label>
                      <div class="col-md-6">
                          <input ng-model="compraSet.compra_taxas_cambiais" name="compra_taxas_cambiais" type="text" placeholder="Taxas" class="form-control input-md">

                      </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="compra_taxa">Taxa de Compra</label>
                      <div class="col-md-6">
                          <input ng-model="compraSet.compra_taxa" name="compra_taxa" type="text" placeholder="Compra" class="form-control input-md">

                      </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="compra_frete_keep">Frete Keepbox</label>
                      <div class="col-md-6">
                          <input ng-model="compraSet.compra_frete_keep" name="compra_frete_keep" type="text" placeholder="Frete" class="form-control input-md">

                      </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="compra_total">Total</label>
                      <div class="col-md-6">
                          <input ng-model="compraSet.compra_total" name="compra_total" type="text" placeholder="Total" class="form-control input-md" required="">

                      </div>
                  </div>

                  <!-- Button -->
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="EnviarCompra"></label>
                      <div class="col-md-4">
                          <button id="EnviarCompra" ng-click="sendCompra()" name="EnviarCompra" class="btn btn-success">Enviar</button>
                      </div>
                  </div>

              </fieldset>
          </form>
              </div>
          </div>
      </div>
      <script src="<?= base_url('public/assets/metronic/custom/js/lib/jquery-3.3.1.min.js')?>"></script>
      <script src="<?= base_url('public/assets/metronic/custom/js/lib/angular.min.js')?>"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>public/assets/metronic/vendors/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>public/assets/metronic/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?=base_url()?>public/assets/metronic/vendors/angular-datatables.min.js"></script>

      <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>public/assets/metronic/vendors/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?=base_url()?>public/assets/metronic/vendors/chart.js/Chart.min.js"></script>
    <script src="<?=base_url()?>public/assets/metronic/vendors/datatables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>public/assets/metronic/vendors/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>public/assets/metronic/custom/js/Adm/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?=base_url()?>public/assets/metronic/custom/js/Adm/sb-admin-charts.min.js"></script>
      <!--angular pré cadastro -->
      <script src="<?= base_url('public/assets/metronic/custom/js/angular/modules/landing_pages/pre_cadastro.module.js') ?>"
              type="text/javascript"></script>
      <!--angular pré cadastro -->
      <script src="<?= base_url('public/assets/metronic/custom/js/angular/services/pre_cadastro.service.js') ?>"
              type="text/javascript"></script>
      <!--angular pré cadastro -->
      <script src="<?= base_url('public/assets/metronic/custom/js/angular/controllers/Adm/admInicio.controller.js') ?>"
              type="text/javascript"></script>
  </div>
</body>

</html>
