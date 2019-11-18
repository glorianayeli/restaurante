<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class AdministradorUsuario extends MY_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            
            $this->ValidarInicioSesion();
            $this->load->library('pagination');
            $this->load->model('mod_ingrediente');
        }
        
        public function index()
        {      
            $this->load->view('Shared/header');
            $this->load->view('Platillos/Platillosform');
            $this->load->view('Shared/footer');
        }

    
    }
?>