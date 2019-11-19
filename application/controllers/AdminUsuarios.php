<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class AdminUsuarios extends MY_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            
            $this->ValidarInicioSesion();
            $this->load->library('pagination');
            $this->load->model('mod_adminUsuarios');
        }
        
        public function index()
        {
            $result = $this->db->get('usuarios');
            $data = array('consulta'=>$result);
            $this->load->view('Shared/header');
            $this->load->view('Usuario/AdministradorUsuario',$data);
            $this->load->view('Shared/footer');
        }


        public function form($id = 0){
            $this->load->view('Shared/header');
            $this->load->view('Usuario/formulariosUsuarios');
            $this->load->view('Shared/footer');
        }
        public function activarUsuario($id){
            $this->mod_adminUsuarios->activarUsuario($id);
        }
        public function desactivarUsuario($id){
            $this->mod_adminUsuarios->desactivarUsuario($id);
        }


        
    
    }
?>