<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_model extends CI_Model {

    public function getUsers_model($data){

        if($data['like'] !== ''){
            $this->db->like("user_nome",$data['line']);
            $this->db->or_like("user_suite",$data['line']);
            $this->db->or_like("user_email",$data['line']);
            $this->db->or_like("user_sobrenome",$data['line']);

        }
        if($data['select'] !== '' && isset($data['select'])) {
            $this->db->select($data['select']);
        }

            return $this->db->get("tb_user")->result();
    }

}
