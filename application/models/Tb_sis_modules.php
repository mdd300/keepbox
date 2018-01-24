<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tb_sis_modules extends CI_Model {

    public static $table = 'tb_sis_modules';
    public static $pk = 'module_id'; // Nome da chave primária
    public static $module_name; // Nome interno do módulo
    public static $module_slug; // Nome do módulo em formato de url
    public static $module_friendly_name; // Nome amigável do módulo (útil para exibição)
    public static $module_status; // Status do módulo, que pode ser @const ENABLED ou @const DISABLED
    
        

    public function __construct() {
        parent::__construct();
    }

    /**
     * 
     * @param type $Data
     */
    
    public function read($Data){
        
        $this->db->from(self::$table);
        return $this->db->get()->result();
        
    }
    
}
