<?php


class Fo_precadastros
{

    private static $precadastros_model = "tb_precadastros";


    public function __construct()
    {

    }

    /**
     * Função utilizada para realizar a criação de um novo registro de pré-cadastro
     * @param array $data - array com os valores necessários para insert do registro do precadastro
     * @return bool|CI_DB_result
     */
    public static function create( $data = [] )
    {
        $CI =& get_instance();

        /* Verifica se o Indice "precadastro" do paramentro $data está definido e preenchido */
        if (isset($data['precadastro']) && !empty($data['precadastro'])) {
            /* Se o indice data não estiver vazio, prossegue com a inserção do dado */
            /* Instancia o model responsável pelo insert do dado no banco */
            $CI->load->model(self::$precadastros_model, 'md_precadastros');
            /* Chama a função de insert do dado, solicitando o retorno do ID precadastro */
            $precadastro = $CI->md_precadastros->create($data['precadastro'], true);

            /* Verifica se o ID retornado do precadastro é valido */
            if ($precadastro != 0 && $precadastro > 0) {
                /* Verifica se os telefones foram encontrados no parâmetro */
                if (isset($data['telefones']) && !empty($data['telefones'])) {
                    /* Caso os telefones estejam definidos e preenchidos */
                    /* Lê todos os telefones encontrados */
                    foreach ( $data['telefones'] as $key => $telefone ) {
                        
                        $register = [ 'precad_telefone_precad_id' => $precadastro, 'precad_telefone_numero' => $telefone ];
                        $CI->md_precadastros->createTelefone( $register );

                    }/* Fim da leitura dos Telefones do pré-cadastrado */

                }/* Fim da verificação de definição dos telefones */

                /* Se chegar aqui, significa que o pré-cadastro foi efetuado com sucesso, independentemente dos telefones. Então, retorna true */
                return true;

            } else {
                /* Caso o ID do registro seja inválido, retorna false no sucesso da operação */
                return false;
            }/* Fim da validação do ID do registro */

        } else {
            /* Caso o indice "data" esteja vazio  */
            return false;
        }/* Fim da validação de inserção */

    }/* End of function create */
    
    //função para trazer os registros do banco 
    public static function get_cadastros($pagina,$inicio, $limite){
        
        $CI =& get_instance();
        
            $resultado=$CI->db->get('tb_precadastros',$limite,$inicio)->result();
            
            foreach ($resultado as $d){
                $a = new DateTime($d->precad_datacad);
                $d->numero_pagina=$pagina;
                $d->precad_id=(int)$d->precad_id;
                $d->precad_datacad = date_format($a, "H:i -- d/m/Y ");
                
                $Cobaia= $CI->db->get_where('tb_precadastros_telefones', array("precad_telefone_precad_id"=>$d->precad_id))->result();
                foreach($Cobaia as $extrator){
                    $d->precad_telefone= $extrator->precad_telefone_numero;
                }
                
                $d->agendamento =$CI->db->get_where('tb_precadastros_agendamentos', array("precad_id_fk"=>$d->precad_id))->result();
                foreach($d->agendamento as $convert){
                    $datas = new DateTime($convert->precad_data_agendamento);
                    $convert -> precad_data_agendamento = date_format($datas, "d/m/Y");
                    $convert -> precad_hora = date_format($datas, "H:i");
                }
            }
            return $resultado;
    }
    //retorna buscas no banco conforme o evento change
    public static function get_cadastros_change($data){
        
        $CI =& get_instance();
        
        $colunas =[
            'precad_nome'=>$data['palavra'],
            'precad_email'=>$data['palavra'],
            'precad_cnpj'=>$data['palavra'],
            'precad_status'=>$data['palavra'],
            'precad_datacad'=>$data['palavra']
        ];
        $CI->db->select('*');
        $CI->db->from('tb_precadastros');
        $CI->db->or_like($colunas);
        $CI->db->limit($data['n_indice']);
        $t = $CI->db->get()->result();
        
        foreach ($t as $d){
            
            $a = new DateTime($d->precad_datacad);
            $d->numero_pagina=$data['palavra'];
            $d->precad_id=(int)$d->precad_id;
            $d->precad_datacad = date_format($a, "H:i -- d/m/Y ");

            $Cobaia= $CI->db->get_where('tb_precadastros_telefones', array("precad_telefone_precad_id"=>$d->precad_id))->result();
            foreach($Cobaia as $extrator){
                $d->precad_telefone= $extrator->precad_telefone_numero;
            }

            $d->agendamento =$CI->db->get_where('tb_precadastros_agendamentos', array("precad_id_fk"=>$d->precad_id))->result();
            foreach($d->agendamento as $convert){
                $datas = new DateTime($convert->precad_data_agendamento);
                $convert -> precad_data_agendamento = date_format($datas, "d/m/Y");
                $convert -> precad_hora = date_format($datas, "H:i");
            }
        }
        return $t;
    }

    //conta o total de registro no
    public static function get_qnt_cadastros(){
        $CI =& get_instance();
        $resultado=count($CI->db->get('tb_precadastros')->result());
            return $resultado;
    }
    
    public static function formata_inser_tb_precadastros($data,$agendamento){
        //se data existir e não estiver vazia
        if(isset($data) && !empty($data)){
            //formata os dados
            //$var['precad_id']=$data[''];
            $var['precadastro']=[
                'precad_nome'=>$data['nome'],
                'precad_email'=>$data['email'],
                'precad_cnpj'=>$data['cnpj'],
                'precad_status'=> $agendamento,
                ];
            $var['telefones']=[
                $data['telefone']
            ];
            
            //e retorna para inserção no banco
            return $var;
        }else{
            //se não retorna falso
            return false;
        }
    }
}
