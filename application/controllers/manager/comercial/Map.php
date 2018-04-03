<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller
{

    public function index()
    {
        $this->load->view('metronic/structure/header_default');
        $this->load->view('metronic/manager/comercial/map');
        $this->load->view('metronic/structure/footer_default');
    }
    public function index2()
    {
        $this->load->view('metronic/structure/header_default2');
        $this->load->view('metronic/manager/comercial/map');
        $this->load->view('metronic/structure/footer_default');
    }

    public function getFiles($Data = null)
    {

        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("comercial/Map_model");

        $Response['files'] = $this->Map_model->getfilesModel($Data)->result();
        $Response['cliente'] = $Data['id'];

        if ($Output == true) {
            echo json_encode($Response);
        } else {
            return $Response;
        }

    }

    public function saveFiles($Data = null)
    {
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $nomeFile = rand();
        $this->load->model("comercial/Map_model");

        $config['upload_path'] = './public/assets/metronic/app/media/img/uploads';
        $config['allowed_types'] = 'pdf|docx|ppt|avi';
        $config['file_name'] = $nomeFile;

        $this->load->library('upload', $config);

        if (!empty($_FILES)) {
            if (!$this->upload->do_upload('file')) {
                //if the upload has failed
                $title = 'Image Upload Error';
                $error = array('error' => $this->upload->display_errors());

                $Response['result'] = $error;

            } else {

                $ext = substr(strrchr($_FILES['file']['name'],'.'),1);

                $this->load->model("comercial/map_model");

                $Response = $this->Map_model->createFileModel($Data, $nomeFile, $ext);

            }
        } else {
            $Response = "no file";
        }


        if ($Output == true) {
            echo json_encode($Response);
        } else {
            return $Response;
        }

    }



    public function saveFolder($Data = null)
    {
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }



                $this->load->model("comercial/Map_model");

                $Response = $this->Map_model->createFolderModel($Data);




        if ($Output == true) {
            echo json_encode($Response);
        } else {
            return $Response;
        }

    }


    public function deleteProd($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("comercial/Map_model");

        $Response = $this->Map_model->deleteFileModel($Data['id']);

        if ($Output == true) {
            echo json_encode($Response);
        } else {
            return $Response;
        }


    }

    public function deleteFolder($Data = null){
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("comercial/Map_model");

        $Response = $this->Map_model->deleteFolderModel($Data['id']);

        if ($Output == true) {
            echo json_encode($Response);
        } else {
            return $Response;
        }


    }

    public function getPasta($Data = null){

        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("comercial/Map_model");

        $Response = $this->Map_model->getPastaModel($Data)->result();

        if ($Output == true) {
            echo json_encode($Response);
        } else {
            return $Response;
        }


    }
}