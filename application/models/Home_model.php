<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {


    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function Cadastro_model($Data){

        $this->db->set($Data);
        $this->db->insert('tb_user');
        $result['id'] = $this->db->insert_id();

        $result['code']  = 1000+$result['id'] ;

        $this->db->where('user_id', $result['id']);
        $this->db->set('user_suite', $result['code'] );
        if ($this->db->update("tb_user")) {
            $result['code']  = 1000+$result['id']. " ".$Data['user_nome']. " ". $Data['user_sobrenome'] ;
            return $result;
        }
    }

    public function Cadastro_final_model($id,$Data){

        $this->load->library('Fo_login');


        $Data['user_senha'] = Fo_login::encrypt_password($Data['user_senha']);
        unset($Data['user_confirmar_senha']);

            $this->db->where('user_id', $id);
            $this->db->set($Data);
            if ($this->db->update("tb_user")) {
                return true;
            }else{
                return false;
            }
        }

        public function getData_model($id){

        $this->db->select("user_nome, user_sobrenome, user_suite");
        $this->db->where("user_id", $id);
        return $this->db->get("tb_user")->result()[0];

        }
  }
