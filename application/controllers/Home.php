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

        $retorno['success'] = $this->Home_model->Cadastro_model($Data['Data']);

        if ($Output == true) {
            echo json_encode($retorno);
        } else {
            return $retorno;
        }

    }

    public function EnviarEmail()
    {
        // the message
        $msg = "
        
        <html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <title>Enviando emails com a library nativa do CodeIgniter</title>
</head>
<body>
<table cellspacing='0' cellpadding='0' border='0' width='100%'>
    <tr>
        <td class='navbar navbar-inverse' align='center'>
            <!-- This setup makes the nav background stretch the whole width of the screen. -->
            <table width='650px' cellspacing='0' cellpadding='3' class='container'>
                <tr class='navbar navbar-inverse'>
                    <td>teste</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor='#FFFFFF' align='center'>
            <table width='650px' cellspacing='0' cellpadding='3' class='container'>
                <tr>
                    <td><Teste</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor='#FFFFFF' align='center'>
            <table width='650px' cellspacing='0' cellpadding='3' class='container'>
                <tr>
                    <td>
                        <hr>
                        <p>&copy; Universidade CodeIgniter - 2016</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
        
        ";

// use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

// send email
        mail("victor.za.oshiro5@gmail.com","My subject",$msg);
    }

}

