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
		/*$this->load->view('metronic/structure/header_default');
		$this->load->view('metronic/examples/dashboard');
		$this->load->view('metronic/structure/footer_default');*/

		$data['selection'] = 1;

        $this->load->view('Keep/structure/header_default',$data);
        $this->load->view('Keep/Home/Home');
        $this->load->view('Keep/structure/footer_default');

<<<<<<< HEAD
        $this->load->view('Keep/Servicos/Servicos');
=======
    }

    public function cadastroPage(){

        $data['selection'] = 0;

        $this->load->view('Keep/structure/header_default', $data);
        $this->load->view('Keep/Cadastro/Cadastro_1_step');
        $this->load->view('Keep/structure/footer_default');

    }

    public function duvidas(){
>>>>>>> 1d352a327e0700dff9c181cc9c26fc393df1d836

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
            if (Fo_api::sendEmail($Data['Data']['user_email'], $retorno['code'], $retorno['id']))
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

        $this->load->view('Keep/structure/header_default');
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

        $this->load->library('Keepbox/Fo_login');

        $retorno = Fo_login::do_login($Data);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }

    }

}
