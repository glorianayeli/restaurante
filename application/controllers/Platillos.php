<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Platillos extends MY_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            
            $this->ValidarInicioSesion();
            $this->load->library('pagination');
            $this->load->model('mod_ingrediente');
            
        }
        
        public function index()
        {
            $pagina = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

            $params['response'] = $this->session->flashdata('response');

            $params['registros'] = $this->mod_ingrediente->Listado($pagina);
            $params['totalRegistros'] = $this->mod_ingrediente->Total();
            if($params['registros']){                
                $config = $this->ConfigurarPaginacion(
                    base_url().'Ingrediente/Index',
                    $params['totalRegistros']
                );
                $this->pagination->initialize($config);
                $params["links"] = $this->pagination->create_links();
            }

            $this->load->view('Shared/header');
            $this->load->view('Platillos/Listadoplatillos', $params);
            $this->load->view('Shared/footer');
        }

        public function guardar(){
            $this->load->view('Shared/header');
            $this->load->view('Platillos/Platillosform');
            $this->load->view('Shared/footer');
        }
    
    }
?>