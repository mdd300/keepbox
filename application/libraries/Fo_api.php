<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// CONSULTAS DE CNPJ PAGOS SE CAPTCHA


//https://www.cpfcnpj.com.br
//$ch = curl_init();
//
//$get = [
//    'chave'=> '2feea3a0db9e4be01ddae3d691eea0fd' ,
//    'tipo' => 4,
//    'cnpj'=> '28.869.870/0001-10',
//    'formato' =>'json'
//];
//curl_setopt($ch,CURLOPT_URL,'https://api.cpfcnpj.com.br/'.$get["chave"].'/'.$get["tipo"].'/'.$get["formato"].'/'.$get['cnpj']);
//curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//$output=json_decode(curl_exec($ch));
//
//curl_close($ch);
//echo var_dump($output);
//
////http://iwebservice.com.br
//$ch = curl_init();
//
//$post = [
//    'chave'=> 'F4C64-FD4ZP-ED173-51B94' ,
//    'cnpj'=> '28.869.870/0001-10',
//    'formato' =>'json'
//];
//$ch = curl_init();
//
//$curlConfig = [
//    CURLOPT_URL      => "ws.iwebservice.com.br/CNPJ/",
//     CURLOPT_POST           => true,
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_POSTFIELDS     => $post
//];
//curl_setopt_array($ch, $curlConfig);
//$result = json_decode(curl_exec($ch));
//echo var_dump($result);
//


//require_once '../../../vendor/autoload.php';

use JansenFelipe\CnpjGratis\CnpjGratis;
use JansenFelipe\Utils\Utils;

class Fo_api
{



    //envia email com code para o usuario
    public static function sendEmail($nome,$email, $code, $id)
    {
        $CI = &get_instance();

        $CI->load->library(['Fo_email']);


        $msg = '<div style="width: 800px">
<img style="margin-left: 160px;" width="250" height="125" src="'.base_url("public/assets/metronic/custom/img/LOGOTIPO.png").'">

    <div style="
     padding: 30px 0px;
     font-size: 3rem;
    font-weight: bold;
    width: 100%;
    margin-left: 120px;
    height: auto;
    color: #a9d046;
    font-family:Multicolore;">
        Seja bem vindo
    </div>
    <img height="290" width="600" style="margin-left 100px; border-radius: 20px" src="'.base_url("public/assets/metronic/custom/img/photo/banner_email.jpg").'">
'
            .'<div style=" widt:80%; padding: 20px 0px;">'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;display: inline-flex""> Olá <div style="color: #a9d046; font-weight: bold;display: inline-flex; "> &nbsp;'.$nome.'</div></p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px; display: inline-flex">Seja bem vindo a <div style="color: #a9d046; font-weight: bold;display: inline-flex "> &nbsp;KEEPBOX</div></p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> Nossa equipe recebeu seu cadastro e veio entregar as chaves</p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> para seu novo endereço  nos EUA. Confira abaixo e não se</p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;">esqueça de ativar sua conta</p>'
            . '</p></div>'
            . '<p style="color:#696969;    padding: 0px 20px 20px 0px;font-weight: bold;font-size:20px;font-family:Multicolore;margin:0px;"><b>Seu endereço é:</b></p>	'
            . '<div style=" display: flex; justify-content: center; width: 100%; height: auto">'
            .'<div style=" width:550px; background-color:#e1efbc;border-radius: 10px; padding: 20px;">'
            . '<p style="color:#696969;font-size:20px;font-family:Multicolore;margin:0px;">'

            .'</p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;">'
            . $code
            .'</p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> Street: 591 Lakeview Drive</p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> City: Coral Springs</p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> State: Florida (FL)</p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> Zip Code: 33071 </p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;">Para acessar sua conta, finalize seu cadastro clicando aqui:</p>'
            . '<a href="'.base_url("Home/cadastroFinal?id=").$id .'">' .base_url('Home/cadastroFinal?id=').$id. ' </a> '
            . '</p></div></div></div>';
        $Data['to'] = $email;
        $Data['name'] = 'Keepbox';
        $Data['html'] = $msg;
        $Data['subject'] = 'Parabéns, você já pode fazer suas compras!';

        $resp_email = Fo_email::from_system($Data);

    }


    public static function sendEmail_compra($nome,$email, $Data)
    {
        $CI = &get_instance();

        $CI->load->library(['Fo_email']);


        $msg = '<div style="width: 800px">
<img style="margin-left: 160px;" width="250" height="125" src="'.base_url("public/assets/metronic/custom/img/LOGOTIPO.png").'">

    <div style="
     padding: 30px 0px;
     font-size: 3rem;
    font-weight: bold;
    width: 100%;
    margin-left: 120px;
    height: auto;
    color: #a9d046;
    font-family:Multicolore;">
        Obrigado!
    </div>
    <img height="290" width="600" style="margin-left 100px; border-radius: 20px" src="'.base_url("public/assets/metronic/custom/img/photo/banner_email.jpg").'">
'
            .'<div style=" widt:80%; padding: 20px 0px;">'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;display: inline-flex""> Olá <div style="color: #a9d046; font-weight: bold;display: inline-flex; "> &nbsp;'.$nome.'</div></p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> Nós recebemos sua solicitação de compra assistida:</p>'
            ;
        foreach ( $Data as $valor) {
            $msg = $msg
                    . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> '. $valor["link_enviado"] .'</p>'
                    . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> '. $valor["link_quantidade"] .'</p>';
             } ;
        $msg = $msg . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;">Logo entraremos em contato, obrigado.</p>'
            . '</p></div>'
            . '</div></div>';
        $Data['to'] = $email;
        $Data['name'] = 'Keepbox';
        $Data['html'] = $msg;
        $Data['subject'] = 'Recebemos o seu link';

        $resp_email = Fo_email::from_system($Data);

    }

    public static function sendEmail_compraValor($nome,$email, $Data)
    {
        $CI = &get_instance();

        $CI->load->library(['Fo_email']);


        $msg = '<div style="width: 800px">
<img style="margin-left: 160px;" width="250" height="125" src="'.base_url("public/assets/metronic/custom/img/LOGOTIPO.png").'">

    <div style="
     padding: 30px 0px;
     font-size: 3rem;
    font-weight: bold;
    width: 100%;
    margin-left: 120px;
    height: auto;
    color: #a9d046;
    font-family:Multicolore;">
        Obrigado!
    </div>
    <img height="290" width="600" style="margin-left 100px; border-radius: 20px" src="'.base_url("public/assets/metronic/custom/img/photo/banner_email.jpg").'">
'
            .'<div style=" widt:80%; padding: 20px 0px;">'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;display: inline-flex""> Olá <div style="color: #a9d046; font-weight: bold;display: inline-flex; "> &nbsp;'.$nome.'</div></p>'
            . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> Aqui esta o orçamento da sua compra assistida:</p>'
        ;
            $msg = $msg
                . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> Produto: '. $Data["compra_produto"] .'</p>'
                . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> Taxas Cambiais: R$'. $Data["compra_taxas_cambiais"] .'</p>'
                . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> Taxa de Comra: R$'. $Data["compra_taxa"] .'</p>'
                . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> Frete Keepbox: R$'. $Data["compra_frete_keep"] .'</p>'
                . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;"> Total: R$'. $Data["compra_total"] .'</p>';
        $msg = $msg . '<p style="color:#696969;font-size:15px;font-family:Multicolore;margin:0px;">Obrigado por escolher a Keepbox.</p>'
            . '</p></div>'
            . '</div></div>';
        $Data['to'] = $email;
        $Data['name'] = 'Keepbox';
        $Data['html'] = $msg;
        $Data['subject'] = 'Recebemos o seu link';

        $resp_email = Fo_email::from_system($Data);

    }

    public static function novo_cod($email, $code)
    {

        $CI = &get_instance();

        $CI->db->select('user_id');
        $CI->db->from('tb_users');
        $CI->db->where('user_email', $email);
        $user_if_fk = $CI->db->get()->result();
        //print_r($user_if_fk[0]->user_id);
        if (count($user_if_fk) > 0) {
            $CI->db->where('id_user_fk', $user_if_fk[0]->user_id);
            $CI->db->set(array('vc_codigo' => $code));
            if ($CI->db->update('tb_validacao_cadastros')) {
                return 'sucesso';
            } else {
                return 'erro';
            }
        } else {
            return 'erro';
        }
    }

    public static function test()
    {

    }

    public static function captcha()
    {
        $CI = &get_instance();

        //require_once("application/libraries/jansenfelipe/cnpj-gratis/src/CnpjGratis.php");
//
//        $CI->load->library(['jansenfelipe/cnpj-gratis/src/cnpjgratis']);
//
//        $cnpj = new CnpjGratis();

        $CnpjGratis = new CnpjGratis();
        return $CnpjGratis::getParams();
    }

    public static function getCNPJ($Data)
    {
        $CI = &get_instance();
        //    $CI->load->library(['jansenfelipe/utils/src/utils', 'symfony/dom-crawler/crawler' , 'jansenfelipe/cnpj-gratis/src/cnpjgratis']);
        //$CI->load->library(['jansenfelipe/utils/src/mask']);
        //$CI->load->library(['jansenfelipe/cnpj-gratis/src/cnpjgratis']);

        /*  Fornecedor : JansenFelipe
        *  $Dados é um array que contem os seguintes indices
        *  'cnpj' = > Numero do cnpj
        *  'captcha' =>  digito do captcha,
        *  'cookie' => cookie gerado
        *
        */
        //require_once("application/libraries/jansenfelipe/utils/src/Mask.php");
        //require_once("application/libraries/symfony/dom-crawler/Crawler.php");
        //require_once("application/libraries/jansenfelipe/utils/src/Utils.php");
        //require_once("application/libraries/jansenfelipe/cnpj-gratis/src/CnpjGratis.php");

        $Retorno['sucesso'] = false;
        $Retorno['consulta'] = false;

//        require_once("application/libraries/jansenfelipe/cnpj-gratis/src/Utils.php");


        $CnpjGratis = new CnpjGratis();

        $Cnpj = preg_replace("/\D/", "", $Data['cnpj']);

        try {
            $Consulta = $CnpjGratis::consulta($Cnpj, $Data['digito'], $Data['key']);
            $Retorno['sucesso'] = true;
            $Consulta['cnpj'] = $Cnpj;
            $Retorno['consulta'] = $Consulta;
        } Catch (Exception $e) {
            $Retorno['sucesso'] = false;
            $Retorno['msg'] = $e->getMessage();
        }

        return $Retorno;
    }

    //confirma se o código existe no banco e retorna seu status como boolean
    public static function confirma_sms_email($Data)
    {

        $CI = &get_instance();

        $CI->db->select(''
            . 'count(valida.vc_status) as positivo,'
            . 'user.first_access as first_ac');
        $CI->db->from('tb_validacao_cadastros as valida');
        $CI->db->where('valida.vc_codigo', $Data);
        $CI->db->where('valida.vc_status', 0);
        $CI->db->where('valida.id_user_fk', Fo_users::$userdata->user_id);
        $CI->db->join('tb_users_data as user', 'user.user_id_fk = valida.id_user_fk', 'left');
        $CI->db->limit(1);
        $status = $CI->db->get()->result();

        $msg['first_access'] = (int)$status[0]->first_ac;
//        //print_r($status[0]);
        if ($status[0]->positivo) {

            $CI->db->where('vc_codigo', $Data);
            $CI->db->where('vc_status', 0);
            $CI->db->where('id_user_fk', Fo_users::$userdata->user_id);
            $CI->db->delete('tb_validacao_cadastros');

            $msg['valido'] = true;
        } else {
            $msg['valido'] = false;
        }
        return $msg;

    }

    //regista o código no banco
    public static function registrar_code($code, $id)
    {
        date_default_timezone_set("Brazil/East");
        $data = new DateTime();
        $CI = &get_instance();
        $d = $data->format('Y-m-d ') . $data->format('H:i:s');

        $CI->db->where("id_user_fk", $id);
        $resultEmail = $CI->db->get("tb_validacao_cadastros");

        if($resultEmail->num_rows() > 0){
            $CI->db->where("id_user_fk", $id);
            $CI->db->delete('tb_validacao_cadastros');
        }

        $lib = [
            'id_user_fk' => $id,
            'vc_codigo' => $code,
            'vc_data_registro' => $d,
            'vc_status' => 0
        ];

        if ($CI->db->insert('tb_validacao_cadastros', $lib)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    //RETORNA O ID USANDO O EMAIL COMO FILTRO SE NÃO EXISTE RETORNA FALSO
    public static function buscar_id($email)
    {

        $CI = &get_instance();
        $CI->db->select('user_id');
        $CI->db->from('tb_users');
        $CI->db->where('user_email', $email);

        $result = $CI->db->get()->result();

        if (count($result) > 0) {
            $result = $result[0]->user_id;
        } else {
            $result = false;
        }
        return $result;

    }

    public static function cep($digito)
    {

        $ch = curl_init();
        $cepUrl = 'viacep.com.br/ws/' . $digito . '/json/';
        curl_setopt($ch, CURLOPT_URL, $cepUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = json_decode(curl_exec($ch));
        curl_close($ch);

        return $output;

    }

}


//curl_setopt($ch,CURLOPT_URL,'https://api.cpfcnpj.com.br/'.$get["chave"].'/'.$get["tipo"].'/'.$get["formato"].'/'.$get['cnpj']);
//curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//$output=json_decode(curl_exec($ch));
//
//curl_close($ch);
//echo var_dump($output);










