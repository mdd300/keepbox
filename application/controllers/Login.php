<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('metronic/login/login');
    }

    public function do_login () {

        $this->load->library(['fashon/fo_login']);

        $post = $this->input->post();

        $Response = Fo_login::do_login($post);

        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($Response));

    }

}
