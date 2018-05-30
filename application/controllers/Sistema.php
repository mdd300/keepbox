<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function system()
    {

        $this->load->model('Home_model');


        if(isset($_SESSION['fashon_session']['user_id']))
        $data = $this->Home_model->getData_model($_SESSION['fashon_session']['user_id']);
        else{
            $data['selection'] = 1;


            $this->load->view('Keep/structure/header_default', $data);
            $this->load->view('Keep/Home/Home');
            $this->load->view('Keep/structure/footer_default');
        }

        $this->load->view('Keep/Sistema/Sistema_home',$data);
    }

    public function getData($Data = null)
    {
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->helper('url');
        redirect('/Sistema/system/', $Data['id']);


    }
    public function getProdutos($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model('Home_model');
        $retorno = $this->Home_model->getProdutos_model($_SESSION['fashon_session']['user_id']);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

    public function getCompra($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model('Home_model');

        $retorno = $this->Home_model->getCompra_model($_SESSION['fashon_session']['user_id'] );

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

    public function FinalizarPedidoEnvio($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model('Home_model');

        $retorno = $this->Home_model->finalizarEnvio($_SESSION['fashon_session']['user_id'],$Data );

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

    public function MandarLink($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }


        $this->load->model('Home_model');

        $retorno = $this->Home_model->setLink($_SESSION['fashon_session']['user_id'],$Data['compra'] );

        $this->load->library('Fo_api');
        if (Fo_api::sendEmail_compra($retorno->user_nome,$retorno->user_email, $Data['compra']))
            $retorno['success'] = true;

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

    public function CodigoRastreamento($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model('Home_model');

        $retorno = $this->Home_model->RastreamentoModel($_SESSION['fashon_session']['user_id'],$Data );

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

    public function SolicitacaoEstoque($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model('Home_model');

        $retorno = $this->Home_model->SolicitacaoEstoqueModel($_SESSION['fashon_session']['user_id']);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }
}