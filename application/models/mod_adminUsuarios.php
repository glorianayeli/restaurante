<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Mod_adminUsuarios extends CI_Model {
    
        // Constructor
        public function __construct()
        {
            parent::__construct();
            $this->db->initialize();
        }
        //Editar usuario
        public function editarUsuario($usuario){

        }
        //Elimiar usuario
        public function eliminar($usuario){

        }
        //Agregar usuario
        public function agregar($usuario){

        }
        //Activar
        public function activarUsuario($usuario){

        }
        public function seleccionarUsuario($name=''){
            $this->db->query("SELECT * FROM usuarios WHERE usuarios ='".$name."' LIMIT 1");
            return $result->row();
        }
        public function obtenerUsuario(){
            return $this->db->get('usuarios');
        }

    }
?>