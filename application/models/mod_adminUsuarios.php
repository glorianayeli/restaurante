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
        public function editarUsuario(){
            if(($_POST['lastpass']==$usuario['us_clave'])&&($_POST['pass']==$_POST['passConfirm']))
            {
                $correo = $_POST['pass'];
                $pass = $_POST['correo'];
                $this->db->where('us_id', $id);
                $this->db->set('us_correo_electronico', $correo);
                $this->db->set('us_clave',$pass);
                $this->db->update('usuarios');
            }
        }
        //Elimiar usuario
        public function desactivarUsuario($id){
            $this->db->where('us_id', $id);
            $this->db->set('us_status',0);
            $this->db->update('usuarios');
        }
        //Agregar usuario
        public function agregar($data,$status,$usuario){
            $this->db->WHERE('us_correo_electronico',$usuario);
            $existeUsuario = $this->db->get('usuarios');
            if(($_POST['correo']==$_POST['correoconfirm'])&&($_POST['contraseña']==$_POST['contraseñaconfirm'])&&$existeUsuario->num_rows()==0)
            {
                $this->db->insert('usuarios',$data);
                $status=true;
            }
            return $status;
        }
        //Activar
        public function activarUsuario($id){
            //$this->db->delete('usuarios', array('us_id' => $id));
            $this->db->where('us_id', $id);
            $this->db->set('us_status',1);
            $this->db->update('usuarios');
        }
        public function usuario($id){
            $usuario=$this->db->get_where('usuarios',array('usuarios.us_id'=>$id),1);
            return $usuario->row_array();
        }

    }
?>