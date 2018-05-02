<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class landing_model extends CI_Model {


    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function Cadastro_model($Data){

        $this->db->set( $Data);
        $this->db->insert('tb_user');



    }

  }
