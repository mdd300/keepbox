<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Map_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getfilesModel($Data, $limite = null, $inicio = null)
    {

        if (isset($Data['id'])) {
            $this->db->where("cliente_id_fk",$Data['id']);
        }
        if (isset($Data['like'])) {
            $this->db->like("file_nome",$Data['like']);
        }
        if(isset($limite)){
            $this->db->limit($limite,$inicio);
        }
        if(isset($Data['pasta'])){
            $this->db->where('pasta_id_fk',$Data['pasta']);
        }

        return $this->db->get("tb_documentos");

    }

    public function createFileModel($Data, $nomeFile, $ex)
    {

        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i');

        $DataInsert = array(
            "file_nome" => $Data["nome"],
            "file_link" => $nomeFile.".".$ex,
            "file_icon" => $ex.".png",
            "cliente_id_fk" => $Data["id"],
            "file_datacad" => $date,
            "pasta_id_fk" => $Data["folder"],
        );

        $this->db->insert('tb_documentos', $DataInsert);

        $DataResponse = array(
            "file_id" =>  $this->db->insert_id(),
            "file_nome" => $Data["nome"],
            "file_link" => $nomeFile.".".$ex,
            "file_icon" => $ex.".png",
            "cliente_id_fk" => $Data["id"],
            "file_datacad" => $date,
            "pasta_id_fk" => $Data["folder"],
        );

        return $DataResponse;

    }

    public function createFolderModel($Data)
    {

        $DataInsert = array(
            "nome_pasta" => $Data["nome"],
            "cliente_id_fk" => $Data["id"],
            "id_fk_pasta" => $Data["folder"],
        );

        $this->db->insert('tb_pastas', $DataInsert);

        $DataResponse = array(
            "id_pasta" =>  $this->db->insert_id(),
            "nome_pasta" => $Data["nome"],
            "cliente_id_fk" => $Data["id"],
            "id_fk_pasta" => $Data["folder"]
        );

        return $DataResponse;

    }

    public function deleteFileModel($idFile){

        $this->db->where('file_id', $idFile);
        if($this->db->delete('tb_documentos'))
            return $response['id'] = true;
        else
            return $response['id'] = false;


    }

    public function deleteFolderModel($idFolder){

        $this->db->where('id_pasta', $idFolder);
        if($this->db->delete('tb_pastas'))
            return $response['id'] = true;
        else
            return $response['id'] = false;


    }

    public function getPastaModel($Data){





        if (isset($Data['like'])) {
            $this->db->like("nome_pasta",$Data['like']);
        }
        if (isset($Data['pasta'])) {

            $this->db->where('id_fk_pasta',$Data['pasta']);

        }else{
            $this->db->where('id_fk_pasta',0);
        }

        $cli = array($Data['id'], 0);
        $this->db->where_in('cliente_id_fk', $cli);



        return $this->db->get("tb_pastas");


    }

}
