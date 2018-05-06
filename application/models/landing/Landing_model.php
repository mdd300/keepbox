<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class landing_model extends CI_Model {


    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function pre_cad_email($Data){

        $this->db->set('email_pre_cadastro', $Data['email_pre_cadastro']);
        $this->db->insert('tb_pre_cadastro');

    }

  }
