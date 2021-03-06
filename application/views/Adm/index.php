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

<body ng-controller="index_adm_ctrl" class="fixed-nav sticky-footer bg-dark" id="page-top">
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
      <div class="row mt-5 pt-2">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">{{users.length}} Usuários</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">

            </a>
          </div>
        </div>
<!--        <div class="col-xl-3 col-sm-6 mb-3">-->
<!--          <div class="card text-white bg-warning o-hidden h-100">-->
<!--            <div class="card-body">-->
<!--              <div class="card-body-icon">-->
<!--                <i class="fa fa-fw fa-list"></i>-->
<!--              </div>-->
<!--              <div class="mr-5">11 New Tasks!</div>-->
<!--            </div>-->
<!--            <a class="card-footer text-white clearfix small z-1" href="#">-->
<!--              <span class="float-left">View Details</span>-->
<!--              <span class="float-right">-->
<!--                <i class="fa fa-angle-right"></i>-->
<!--              </span>-->
<!--            </a>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-xl-3 col-sm-6 mb-3">-->
<!--          <div class="card text-white bg-success o-hidden h-100">-->
<!--            <div class="card-body">-->
<!--              <div class="card-body-icon">-->
<!--                <i class="fa fa-fw fa-shopping-cart"></i>-->
<!--              </div>-->
<!--              <div class="mr-5">123 New Orders!</div>-->
<!--            </div>-->
<!--            <a class="card-footer text-white clearfix small z-1" href="#">-->
<!--              <span class="float-left">View Details</span>-->
<!--              <span class="float-right">-->
<!--                <i class="fa fa-angle-right"></i>-->
<!--              </span>-->
<!--            </a>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-xl-3 col-sm-6 mb-3">-->
<!--          <div class="card text-white bg-danger o-hidden h-100">-->
<!--            <div class="card-body">-->
<!--              <div class="card-body-icon">-->
<!--                <i class="fa fa-fw fa-support"></i>-->
<!--              </div>-->
<!--              <div class="mr-5">13 New Tickets!</div>-->
<!--            </div>-->
<!--            <a class="card-footer text-white clearfix small z-1" href="#">-->
<!--              <span class="float-left">View Details</span>-->
<!--              <span class="float-right">-->
<!--                <i class="fa fa-angle-right"></i>-->
<!--              </span>-->
<!--            </a>-->
<!--          </div>-->
<!--        </div>-->
      </div>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Usuários</div>
        <div class="card-body">
          <div class="table-responsive">
            <table datatable="ng" dt-options="dtOptions" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Numero</th>
                    <th>Telefone</th>

                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Numero</th>
                    <th>Telefone</th>

                </tr>
              </tfoot>
              <tbody>
                <tr ng-repeat="user in users">
                  <td>{{user.user_nome + " " + user.user_sobrenome}}</td>
                  <td>{{user.user_email}}</td>
                  <td>{{user.user_suite}}</td>
                    <td>{{user.user_telefone}}</td>
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
