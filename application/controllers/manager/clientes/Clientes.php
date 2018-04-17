<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller
{

    public function index()
    {
        $this->load->view('metronic/structure/header_default');
        $this->load->view('metronic/manager/clientes/clientes');
        $this->load->view('metronic/structure/footer_default');

    }

    public function getClientes($Data = null)
    {

        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("clientes/Clientes_model");

        $total = $this->Clientes_model->getClientesModel($Data)->num_rows();

        //seta a quantidade de itens por página, neste caso, 2 itens

        $registros = 2;

        //calcula o número de páginas arredondando o resultado para cima

        $numPaginas = ceil($total / $Data['limite']);

        //variavel para calcular o início da visualização com base na página atual

        $inicio = ($Data['limite'] * $Data['pagina']) - $Data['limite'];

        $Result = $this->Clientes_model->getClientesModel($Data, $Data['limite'], $inicio)->result();


        foreach ($Result as $row) {

            $Response['clientes'][] =
                array(
                    "cliente_id" => $row->cliente_id,
                    "cliente_nomefantasia" => $row->cliente_nomefantasia,
                    "cliente_cnpj" => $this->mask($row->cliente_cnpj, '##.###.###/####-##'),
                    "cliente_plano" => $row->cliente_plano,
                    "cliente_status" => $row->cliente_status,
                    "cliente_estado" => $row->cliente_estado,
                    "cliente_endereco" => $row->cliente_endereco,
                    "cliente_numero" => $row->cliente_numero,
                    "cliente_complemento" => $row->cliente_complemento,
                    "cliente_email" => $row->cliente_email,
                    "cliente_telefone" => $row->cliente_telefone
                );
        }
        $Response['numPages'] = $numPaginas;


        if ($Output == true) {
            echo json_encode($Response);
        } else {
            return $Response;
        }

    }

    public function create($Data = null)
    {
        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("clientes/Clientes_model");

        $Response = $this->Clientes_model->createClienteModel($Data);


        $Result = $this->Clientes_model->getClientesCreateModel($Response)->result();


        foreach ($Result as $row) {

            $User = array(
                "user_login" => $row->cliente_email,
                "user_email" => $row->cliente_email,
                "user_cliente" => $Response
            );
            $cnpj = $row->cliente_cnpj;


        }

        $ResultLogin = $this->Clientes_model->createUserCliente($User, $cnpj);


        if ($Output == true) {
            echo json_encode($Response);
        } else {
            return $Response;
        }


    }

    public function mask($val, $mask)

    {

        $maskared = '';
        $k = 0;

        for ($i = 0; $i <= strlen($mask) - 1; $i++) {

            if ($mask[$i] == '#') {

                if (isset($val[$k]))

                    $maskared .= $val[$k++];

            } else {

                if (isset($mask[$i]))

                    $maskared .= $mask[$i];

            }

        }

        return $maskared;

    }

    public function changePass($Data = null)
    {

        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("clientes/Clientes_model");

        $Response['success'] = $this->Clientes_model->ChangeModel($Data);
        $Response['link'] = base_url();
        if ($Output == true) {
            echo json_encode($Response);
        } else {
            return $Response;
        }

    }

    public function editCliente($Data = null){

        if ($Data == null) {
            $Output = true;
            $Data = $this->input->post();
        } else {
            $Output = false;
        }

        $this->load->model("clientes/Clientes_model");

        $Response = $this->Clientes_model->EditModel($Data);

        if ($Output == true) {
            echo json_encode($Response);
        } else {
            return $Response;
        }
    }


}
