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
            if($params['registros']){                
                $config = $this->ConfigurarPaginacion(
                    base_url().'Platillos/Index',
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

        public function Platillosedit($id){
            $data = $this->mod_platillo->usuario($id);
            $this->load->view('Shared/header');
            $this->load->view('Platillos/Platillosedit',array('data'=>$data));
            $this->load->view('Shared/footer');
        }
        public function guardarPlatillo(){
            $this->mod_platillo->editarIngrediente();
            $this->session->set_flashdata('exitoso','Usuario editado exitosamente');
            $this->index();
        
        }

        public function Eliminar($id)
        {
            $this->session->set_flashdata(
                'response', $this->mod_platillo->Eliminar($id)
            );

            redirect('Platillos/Index', 'refresh');
        }
    
    }
?>