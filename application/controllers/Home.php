<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['selection'] = 1;


        $this->load->view('Keep/structure/header_default', $data);
        $this->load->view('Keep/Home/Home');
        $this->load->view('Keep/structure/footer_default');
    }
    public function teste()
    {
        $this->load->view('email');
    }

    public function cadastroPage(){

        $data['selection'] = 0;
        $this->load->view('Keep/structure/header_default', $data);
        $this->load->view('Keep/Cadastro/Cadastro_1_step');
        $this->load->view('Keep/structure/footer_default');

    }

    public function duvidas(){

        $data['selection'] = 4;


        $this->load->view('Keep/structure/header_default', $data);
        $this->load->view('Keep/Duvidas/Duvidas');
        $this->load->view('Keep/structure/footer_default');

    }

    public function servico(){

        $data['selection'] = 2;


        $this->load->view('Keep/structure/header_default', $data);
        $this->load->view('Keep/Servicos/Servicos');
        $this->load->view('Keep/structure/footer_default');

    }

    public function termos(){

        $data['selection'] = 0;


        $this->load->view('Keep/structure/header_default', $data);
        $this->load->view('Keep/Servicos/Termos');
        $this->load->view('Keep/structure/footer_default');

    }

    public function funcionamento(){

        $data['selection'] = 3;

        $this->load->view('Keep/structure/header_default', $data);
        $this->load->view('Keep/Como_Funciona/Como_Funciona');
        $this->load->view('Keep/structure/footer_default');

    }

    public function pre_cadastro($Data = null){

        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model('landing/Landing_model');

        $retorno['success'] = $this->Landing_model->pre_cad_email($Data);


        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }

    }

    public function cadastro_email($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model('Home_model');

        $retorno = $this->Home_model->Cadastro_model($Data['Data']);
        if($retorno !== false){

            $this->load->library('Fo_api');
            if (Fo_api::sendEmail($Data['Data']['user_nome'],$Data['Data']['user_email'], $retorno['code'], $retorno['id']))
                $retorno['success'] = true;
        }
            if ($Output == true) {
                echo json_encode($retorno);
            } else {
                return $retorno;
            }

    }


    public function cadastroFinal()
    {
        $data['selection'] = 0;
        $this->load->view('Keep/structure/header_default', $data);
        $this->load->view('Keep/Cadastro/Cadastro_1_step');
        $this->load->view('Keep/structure/footer_default');

    }
    public function cadastroFinalizar($Data = null)
    {

        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model('Home_model');

        $retorno = $this->Home_model->Cadastro_final_model($Data['id'],$Data['Data']);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }

    }

    public function Login($Data = null)
    {

        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        session_set_cookie_params(PHP_INT_MAX);
        $this->load->library('Keepbox/Fo_login');

        $retorno = Fo_login::do_login($Data);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }

    }
    public function verifySession($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        if(isset($_SESSION['fashon_session']['user_id'])){
            $retorno['success'] = true;
        }else{
            $retorno['success'] = false;
        }

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

    public function changePass($Data = null){

    }

    public function Adm (){
        $this->load->view('Adm/login');
    }
    public function admIndex (){
        $this->load->view('Adm/index');
    }
    public function admProd (){
        $this->load->view('Adm/cards');
    }
    public function easyPost (){
        $this->load->view('Adm/easyPost');
    }

    public function LoginAdm($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        session_set_cookie_params(PHP_INT_MAX);
        $this->load->library('Keepbox/Fo_login');

        $retorno = Fo_login::do_login_adm($Data);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }
    public function getUsers($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }


        $this->load->model('Adm_model');

        $retorno = $this->Adm_model->getUsers_model($Data);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }
    }

    public function easypost_setTrack($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }


        require_once("./public/assets/metronic/vendors/easypost/lib/easypost.php");

        \EasyPost\EasyPost::setApiKey("1xY09nysF4aof0ZqqSrvxw");

        $tracker = \EasyPost\Tracker::create(array(
            "tracking_code" => $Data["track"],
            "carrier" => "USPS"
        ));
        if ($Output == true) {
            echo json_encode($tracker);
        } else {
            return $tracker;
        }
    }

    public function easypost_getTrack($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        require_once("./public/assets/metronic/vendors/easypost/lib/easypost.php");

        \EasyPost\EasyPost::setApiKey("1xY09nysF4aof0ZqqSrvxw");

        $trackers = \EasyPost\Tracker::all(array(
            "page_size" => 100,
            "end_datetime" => "2018-06-01T00:00:00Z"
        ));

        if ($Output == true) {
            echo json_encode($trackers);
        } else {
            return $trackers;
        }
    }

    public function setProduto($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        list($type, $Data['img']) = explode(';', $Data['img']);
        list(, $Data['img'])      = explode(',', $Data['img']);
        $Data['img'] = base64_decode($Data['img']);

        $nome = uniqid();

        file_put_contents("./upload/produtos/img/".$nome.'.png', $Data['img']);
        $return = true;

        if ($Output == true) {
            echo json_encode($return);
        } else {
            return $return;
        }
    }
}
