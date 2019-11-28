<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Mod_Platillo extends CI_Model {
    
        // Constructor
        public function __construct()
        {
            parent::__construct();
            $this->db->initialize();
        }

        // Obtiene el listado de platillo
        public function Listado($pagina)
        {
            $this->db->select('
                *,
                (
                    select
                        count(pa_id)
                    from
                        platillos          
                ) as totalPlatillos
            ');
            $query = $this->db->get("platillos");
    
            if ($query->num_rows() > 0) 
            {
                // var_dump($query->result_array());
                return $query->result_array();
            }    

            return false;
        }

        // Obtiene la información de un platillo
        public function Obtener($id)
        {   
            
            $this->db->select('*');

            $response = 
                $this->db
                    ->from('platillos')
                    ->where("pa_id = $id")
                    ->get();
    
            return ($response->num_rows() > 0) ? $response->row(0) : false;
        }

        // Obtiene el total de registros de ingredientes
        public function Total()
        {
            return $this->db->count_all("platillos");
        }

        // ELimina un ingrediente
        public function Eliminar($id)
        {
            $response = array(
                'message' => 'No se pudo eliminar el platillo',
                'done' => false
            );

            $platillo = $this->Obtener($id);
            if ($platillo){
                $this->db->where('pa_id', $id);
                $this->db->delete('platillos');

                $response['message'] = 'Se eliminó el platillo';
                $response['done'] = true;
            }else
                $response['message'] = ' No existe el platillo que intenta eliminar';
            
            return $response;
        }

        // Guarda un ingrediente
        public function Guardar()
        {   /*
            $response = array(
                'done' => false,
                'message' => 'Llene todos los campos solicitados'
            );

            $values = $this->input->post();
            // var_dump($values);
            
            if($this->Existe($values['in_id'], $values['in_nombre'], $values['in_unidad'])){
                $response['message'] = 'Ya existe un ingrediente con los datos que indicó';
                return $response;
            }

            if($values['in_id'] == 0){
                $this->db->insert('ingredientes', $values);
            }else{
                $this->db->where('in_id', $values['in_id']);
                $this->db->update('ingredientes', $values);
            }

            $response['message'] = 'Se guardó la información del ingrediente';
            $response['done'] = true;

            return $response;*/
        }

        public function editarIngrediente(){/*
                $pa_id = $_POST['pa_id'];
                $pa_nombre = $_POST['pa_nombre'];
                $pa_descripcion = $_POST['pa_descripcion'];
                $pa_precio = $_POST['pa_precio'];
                $pa_id_tipo_comida = $_POST['pa_id_tipo_comida'];
                $this->db->where('pa_id', $pa_id);
                $this->db->set('pa_nombre', $pa_nombre);
                $this->db->set('pa_descripcion',$pa_descripcion);
                $this->db->set('pa_precio',$pa_precio);
                $this->db->set('pa_id_tipo_comida',$pa_id_tipo_comida);
                $this->db->update('platillos');
            return $response;*/
        }
    
        // Verifica si existe un ingrediente 
        public function Existe($id, $nombre, $unidad)
        {
            /*
            $existe = 
                (
                    $this->db
                        ->where("in_nombre='".strtoupper($nombre)."' and in_unidad = '".strtoupper($unidad)."' and in_id <> '".$id."'")
                        ->get("ingredientes")->num_rows() > 0
                );

            return $existe;  
            */              
        }

    }
    /* End of file Mod_Ingrediente.php */
?>
    