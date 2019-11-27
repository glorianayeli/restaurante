<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Platillos extends MY_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            
            $this->ValidarInicioSesion();
            $this->load->library('pagination');
            $this->load->model('mod_platillo');
            
        }
        
        public function index()
        {
            $pagina = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

            $params['response'] = $this->session->flashdata('response');
            $params['registros'] = $this->mod_platillo->Listado($pagina);
            $params['totalRegistros'] = $this->mod_platillo->Total();

            $this->load->view('Shared/header');
            $this->load->view('Platillos/Listadoplatillos', $params);
            $this->load->view('Shared/footer');
        }

        public function guardar(){
            $this->load->view('Shared/header');
            $this->load->view('Platillos/Platillosform');
            $this->load->view('Shared/footer');
        }

        public function Eliminar($id = 0){
            $this->mod_platillo->Eliminar($id);
        }
        public function Platillosedit(){
            $this->load->view('Shared/header');
            $this->load->view('Platillos/Platillosedit');
            $this->load->view('Shared/footer');
        }
    
    }
?>