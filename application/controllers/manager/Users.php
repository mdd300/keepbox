<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('tb_users');
    }
    
    /**
     * retorna a view com a listagem dos usuarios
     */
    public function index()
    {
        $this->load->view('metronic/structure/header_default');
        $this->load->view('metronic/manager/users/list');
        $this->load->view('metronic/structure/footer_default');
    }
    
    /**
     * retorna o json para listagem no datatable
     */
    public function lista()
    {      
        $users = $this->tb_users->get_all();
        
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($users));
    }
    
    public function get_one_by_id(int $id)
    {
        $response = $this->tb_users->get_one_by_id($id);
        
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($response));
    }
    
    /**
     * Armazena o usuário no banco de dados
     */
    public function store($data = null)
    {        
        $output = ($data == null);
        
        $response = $this->tb_users->set_user();
        
        if ($output == true) {
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($response));
        } else {
            return $response;
        }
    }
    
    /**
     * atualiza o usuario
     */
    public function update($data = null)
    {
        $this->store($data);
    }
    
    /**
     * remove o usuário
     * 
     * @param int $id
     */
    public function remove(int $user_id)
    {
        $this->tb_users->delete_user($user_id);
    }

}
