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
        public function activarUsuario($id = 0){
            $this->mod_adminUsuarios->activarUsuario($id);
        }
        public function desactivarUsuario($id = 0){
            $this->mod_adminUsuarios->desactivarUsuario($id);
        }
        //crear un nuevo usuario
        public function insertarDatos(){
            $status = false;
            $data = array(
                    'us_nombre'=> $this->input->post('nombre'),
                    'us_correo_electronico' => $this->input->post('correo'),
                    'us_clave'=>md5($_POST['contraseña']),
                    'us_status'=>'0'
                );
            $usuario = $this->input->post('correo');
            $status = $this->mod_adminUsuarios->agregar($data,$status,$usuario);
            if($status==true){
                $this->session->set_flashdata('registroExitoso','Su registro fue exitoso');
                //redirect('index');    
            }
        }
        public function form($id = 0){
            $this->load->view('Shared/header');
            $this->load->view('Usuario/formulariosusuarios');
            $this->load->view('Shared/footer');
        }
        //editar usuario
        public function editform($id = 0){
            
            $usuario = $this->mod_adminUsuarios->usuario($id);
            $this->load->view('Shared/header');
            $this->load->view('Usuario/editform',array('usuario'=>$usuario));
            $this->load->view('Shared/footer');
            /*$correo = $this->input->post('correo');
            $clave = md5($_POST['pass']);
            $this->mod_adminUsuarios->editarUsuario($id,$correo,$clave);*/
        }

        public function Guardar(){


            $this->mod_adminUsuarios->editarUsuario();
        }

    }
?>