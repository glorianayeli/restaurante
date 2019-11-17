<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Mod_Ingrediente extends CI_Model {
    
        // Constructor
        public function __construct()
        {
            parent::__construct();
            $this->db->initialize();
        }
        //Editar usuario
        public function editarUsuario($correo){

        }
        //Elimiar usuario
        public function eliminar($correo){

        }
        //Agregar usuario
        public function agregar($correo){

        }
        //Activar
        public function activarUsuario($correo){

        }
    }
?>