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


        $data = $this->Home_model->getData_model($_SESSION['fashon_session']['user_id']);

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

}