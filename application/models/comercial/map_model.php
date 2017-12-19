<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class map_model extends CI_Model
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
        if ($Data['like'] != "") {
            $this->db->like("file_nome",$Data['like']);
        }
        if(isset($limite)){
            $this->db->limit($limite,$inicio);
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
            "file_datacad" => $date
        );

        $this->db->insert('tb_documentos', $DataInsert);

        $DataResponse = array(
            "file_id" =>  $this->db->insert_id(),
            "file_nome" => $Data["nome"],
            "file_link" => $nomeFile.".".$ex,
            "file_icon" => $ex.".png",
            "cliente_id_fk" => $Data["id"],
            "file_datacad" => $date
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

}
