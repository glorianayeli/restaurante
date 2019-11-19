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
        public function editarUsuario($id,$correo,$pass){
            $this->db->where('us_id', $id);
            $this->db->set('us_correo_electronico', $correo);
            $this->db->set('us_clave',$pass);
            $this->db->update('usuarios');
        }
        //Elimiar usuario
        public function desactivarUsuario($id){
            $this->db->where('us_id', $id);
            $this->db->set('us_status',0);
            $this->db->update('usuarios');
        }
        //Agregar usuario
        public function agregar($data){
            $this->db->insert('usuarios', $data);
        }
        //Activar
        public function activarUsuario($id){
            //$this->db->delete('usuarios', array('us_id' => $id));
            $this->db->where('us_id', $id);
            $this->db->set('us_status',1);
            $this->db->update('usuarios');
        }

    }
?>