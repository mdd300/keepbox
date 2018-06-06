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
    <link href="<?= base_url() ?>public/assets/metronic/custom/css/Website/Global/global.css" rel="stylesheet"
          type="text/css"/>
</head>

<body ng-controller="login_adm_ctrl" class="color-background-green">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" ng-model="login.user_login" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Digite o email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" ng-model="login.user_senha" id="exampleInputPassword1" type="password" placeholder="Digite a senha">
          </div>
          <a ng-click="doLogin()" class="btn color-background-roxo btn-block color-text-white" style="color: white !important;">Entrar</a>
        </form>
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
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url()?>public/assets/metronic/vendors/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level plugin JavaScript-->
  <script src="<?=base_url()?>public/assets/metronic/vendors/chart.js/Chart.min.js"></script>
  <script src="<?=base_url()?>public/assets/metronic/vendors/datatables/jquery.dataTables.js"></script>
  <script src="<?=base_url()?>public/assets/metronic/vendors/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?=base_url()?>public/assets/metronic/custom/js/Adm/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  <script src="<?=base_url()?>public/assets/metronic/custom/js/Adm/sb-admin-datatables.min.js"></script>
  <script src="<?=base_url()?>public/assets/metronic/custom/js/Adm/sb-admin-charts.min.js"></script>
  <!--angular pré cadastro -->
  <script src="<?= base_url('public/assets/metronic/custom/js/angular/modules/landing_pages/pre_cadastro.module.js') ?>"
          type="text/javascript"></script>
  <!--angular pré cadastro -->
  <script src="<?= base_url('public/assets/metronic/custom/js/angular/services/pre_cadastro.service.js') ?>"
          type="text/javascript"></script>

  <!--angular pré cadastro -->
  <script src="<?= base_url('public/assets/metronic/custom/js/angular/controllers/Adm/login.controller.js') ?>"
          type="text/javascript"></script>
</body>

</html>
