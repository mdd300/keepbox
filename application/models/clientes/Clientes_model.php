<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getClientesModel($Data, $limite = null, $inicio = null)
    {

        if (isset($Data['where'])) {
            $this->db->where($Data['where']);
        }
        if ($Data['like'] != "") {
            $this->db->like("cliente_nomefantasia",$Data['like']);
            $this->db->or_like("cliente_cnpj",$Data['like']);
        }
        if(isset($limite)){
            $this->db->limit($limite,$inicio);
        }

        return $this->db->get("tb_clientes");

    }

    public function createClienteModel($Data)
    {

        $this->db->insert('tb_clientes', $Data);
        return $this->db->insert_id();


    }

    public function EditPass($Data){

        $pass = $this->fo_login->encrypt_password($Data['pass']);
        $this->db->where('user_id_fk', $Data['id']);
        $this->db->set($pass);
        return $this->db->update('tb_users_data');

    }

    public function createUserCliente($Data, $cnpj){

        $this->load->library('fo_login');

        $this->db->insert('tb_users', $Data);

        $passTocrypt = "nccinco"."123";

        var_dump($passTocrypt);

        $pass = $this->fo_login->encrypt_password($passTocrypt);

        $DataPass = array(
            "user_id_fk" => $this->db->insert_id(),
            "user_pass" =>  $pass,
            "user_name" => $Data['user_email'],
            "user_type" => '2',
            "user_status" => "1"
    );
        return $this->db->insert('tb_users_data', $DataPass);

    }

    public function getClientesCreateModel($id)
    {

            $this->db->where("cliente_id", $id);

        return $this->db->get("tb_clientes");

    }

    public function ChangeModel($Data){

        $this->load->library('fo_login');

        $passTocrypt = $Data['pass'];

        $pass = $this->fo_login->encrypt_password($passTocrypt);

        $DataPass = array(
            "user_pass" =>  $pass,
        );

        $this->db->select('user_id');
        $this->db->where('user_cliente',$Data['id']);
        $id = $this->db->get("tb_users")->result();

        $this->db->where('user_id_fk',$id[0]->user_id);
        $this->db->set($DataPass);
        return $this->db->update('tb_users_data');

    }

    public function EditModel($Data){

        $this->db->where('cliente_id',$Data['cliente_id']);
        unset($Data['cliente_id']);
        $this->db->set($Data);
        return $this->db->update('tb_clientes');

    }

}
