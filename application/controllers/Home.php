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

        $this->load->view('Keep/structure/header_default');
        $this->load->view('Keep/Servicos/Servicos');
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

}
