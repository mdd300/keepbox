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

    public function getProds_model($data = null){

        $this->db->join("tb_user as u", "u.user_id = prod_user_id_fk");
        $this->db->join("tb_produtos_img as img", "img.img_prod_fk = prod_id");
        return $this->db->get("tb_produtos")->result();

    }

    public function setProds_model($data = null, $img){

        $user = substr($data['user'],0,5);

        $this->db->select("user_id");
        $this->db->where("user_suite", $user);
        $user = $this->db->get("tb_user")->result();

        $insert = array(
          "prod_nome" => $data['prod_nome'],
          "prod_quantidade" => $data["prod_quantidade"],
          "prod_peso" => $data["prod_peso"],
          "prod_data" => date("d/m/Y"),
          "prod_user_id_fk" => $user[0]->user_id
        );

        $this->db->set($insert);
        $this->db->insert("tb_produtos");

        $prod_id = $this->db->insert_id();

        $img = array(
            "img_prod_fk" => $prod_id,
            "img_link" => $img
        );

        $this->db->set($img);
        return $this->db->insert("tb_produtos_img");
    }

    public function getCompra_model ($data){
        $this->db->join("tb_user as u", "u.user_id = user_id_fk");
        return $this->db->get("tb_link_compra")->result();
    }

    public function setCompraValor_model($data){
        $this->db->set($data);
        $this->db->set("compra_cod", uniqid());
        $this->db->insert("tb_compra_assistida");

        $this->db->where("link_id",$data['link_id_fk']);
        $this->db->set("link_status","Orçamento Realizado");
        $this->db->update("tb_link_compra");

        $this->db->where("user_id",$data['user_id_fk']);
        return $this->db->get("tb_user")->result()[0];
    }

    public function get_Code_rast_model($data){
        $this->db->join("tb_user as u", 'u.user_id = user_id_fk');
        return $this->db->get("tb_rastreamento")->result();
    }

    public function setProdsUpdate_model($data, $img){

        $insert = array(
            "prod_nome" => $data['prod_nome'],
            "prod_quantidade" => $data["prod_quantidade"],
            "prod_peso" => $data["prod_peso"],
            "prod_data" => date("d/m/Y"),
            "prod_user_id_fk" => $data['user_id']
        );

        $this->db->where("prod_id", $data['prod_id']);
        $this->db->set($insert);
        $this->db->update("tb_produtos");

        $prod_id = $this->db->insert_id();

        $img = array(
            "img_link" => $img
        );
        $this->db->where("img_prod_fk", $data['prod_id']);
        $this->db->set($img);
        return $this->db->update("tb_produtos_img");
    }

    public function deleteProd_model($id){
        $this->db->where("prod_id",$id);
        return $this->db->delete("tb_produtos");
    }
}
