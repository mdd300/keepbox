<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tb_users extends CI_Model {
    public static $table = 'tb_users';
    public static $pk = 'user_id'; // Nome da chave primária
    public static $user_id; // Chave primária
    public static $user_name; // nome do usuario
    public static $user_email; // email do usuario
    public static $user_login; // login do usuario
    public static $user_type; // typo de usuario
    public static $user_status; // status do usuario

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    
    /**
     * retorna a listagem de usuarios
     * 
     * @return array
     */
    public function get_all()
    {
        return $this->db->select('tb_users.*, tb_users_data.*')
                    ->join('tb_users_data', 'tb_users.user_id = tb_users_data.user_id_fk')
                    ->where('tb_users_data.user_status', 1)
                    ->get(self::$table)
                    ->result_array();
    }
    
    /**
     * retorna 1 usuário pelo id
     * 
     * @param int $id
     */
    public function get_one_by_id(int $user_id)
    {
        return $this->db->select('tb_users.*, tb_users_data.*')
                    ->join('tb_users_data', 'tb_users.user_id = tb_users_data.user_id_fk')
                    ->where(['tb_users.user_id' => $user_id, 'tb_users_data.user_status' => 1])
                    ->get(self::$table)
                    ->row_array();
    }
    
    /**
     * cadastra ou atualiza o usuario caso exista o id
     * 
     * @return type
     */
    public function set_user()
    {
        $this->load->library('fo_login');
        
        $data_tb_users = [
            'user_email'  => $this->input->post('user_email'),
            'user_login'  => $this->input->post('user_login')
        ];

        $data_tb_users_data = [
            'empresa_id_fk' => 1,
            'user_name'   => $this->input->post('user_name'),
            'user_type'   => 1,
            'user_status' => 1
        ];
        
        if (!empty($this->input->post('user_pass'))) {
            $pass = $this->input->post('user_pass');
            $data_tb_users_data['user_pass'] = $this->fo_login->encrypt_password($pass);
        }
        
        $user_id = $this->input->post('user_id');
        
        if ($user_id)
        {
            return $this->db->update('tb_users_data', $data_tb_users_data, ['user_id_fk' => $user_id]);
        }
        
        if ($this->db->insert(self::$table, $data_tb_users)) {
            $data_tb_users_data['user_id_fk'] = $this->db->insert_id();
            return $this->db->insert('tb_users_data', $data_tb_users_data);
        }

        return false;
    }
    
    /**
     * remove o usuario
     * 
     * @param int $user_id
     * @return type
     */
    public function delete_user(int $user_id)
    {
        $data = [
            'user_status' => 0
        ];
        
        return $this->db->update('tb_users_data', $data,['user_id_fk' => $user_id]);
    }
}
