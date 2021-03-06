<!DOCTYPE html>
<html lang="en" ng-app="app_landing">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>KeepBox</title>
    <!-- Bootstrap core CSS-->
    <link href="<?=base_url()?>public/assets/metronic/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>public/assets/metronic/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?=base_url()?>public/assets/metronic/vendors/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?=base_url()?>public/assets/metronic/custom/Adm/css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top" ng-controller="easypost_adm_ctrl">
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
  <div class="content-wrapper" style="    margin-top: 130px;">

      <div class="card mb-3 p-2">
      <!-- Text input-->
      <div class="form-group ">
          <label class="col-md-4 control-label" for="Tracking code">Tracking Code</label>
          <div class="col-md-4">
              <input ng-model="TrackingCode" name="Tracking code" type="text" placeholder="Code" class="form-control input-md" required="">

          </div>
      </div>
          <div class="form-group ">
              <div class="col-md-4">
                  <button id="sendTracking" ng-click="sendTracking()" name="sendTracking" class="btn btn-success">Enviar</button>
              </div>
          </div>
      </div>
      <!-- Button -->

      <div class="card mb-3">
          <div class="card-header">
              <i class="fa fa-table"></i> Codigos Enviados</div>
          <div class="card-body">
              <div class="table-responsive">
                  <table datatable="ng" dt-options="dtOptions" class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th>Usuario</th>
                          <th>Codigo</th>
                          <th>Data</th>
                      </tr>
                      </thead>
                      <tfoot>
                      <th>Usuario</th>
                      <th>Codigo</th>
                      <th>Data</th>
                      </tfoot>
                      <tbody>
                      <tr ng-repeat="code in Codes">
                          <td>{{code.user_suite + " " + code.user_nome + " "+ code.user_sobrenome}}</td>
                          <td>{{code.codigo}}</td>
                          <td>{{code.codigo_data}}</td>
                      </tr>

                      </tbody>
                  </table>
              </div>
          </div>
      </div>

      <div class="card mb-3">
          <div class="card-header">
              <i class="fa fa-table"></i> Easypost</div>
          <div class="card-body">
              <div class="table-responsive">
                  <table datatable="ng" dt-options="dtOptions" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th>Codigo</th>
                          <th>Empresa</th>
                          <th>Atualizado Em</th>
                          <th>Status</th>
                          <th>Criado em</th>
                          <th>Data estimada</th>
                      </tr>
                      </thead>
                      <tfoot>
                      <tr>
                          <th>Codigo</th>
                          <th>Empresa</th>
                          <th>Atualizado Em</th>
                          <th>Status</th>
                          <th>Criado em</th>
                          <th>Data estimada</th>
                      </tr>
                      </tfoot>
                      <tbody>
                      <tr ng-repeat="track in tracking">
                          <td>{{track.tracking_code}}</td>
                          <td>{{track.carrier}}</td>
                          <td>{{track.updated_at | date:'yyyy-MM-dd HH:mm '}}</td>
                          <td>{{track.status}}</td>
                          <td>{{track.created_at | date:'yyyy-MM-dd HH:mm '}}</td>
                          <td>{{track.est_delivery_date | date:'yyyy-MM-dd HH:mm '}}</td>
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
  <script src="<?= base_url('public/assets/metronic/custom/js/angular/constants/config.constant.js') ?>"
          type="text/javascript"></script>
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
