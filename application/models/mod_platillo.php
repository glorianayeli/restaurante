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
            //$this->db->limit(PAGINACION_REGISTROS_POR_PAGINA, $pagina);
            $query = $this->db->get("platillos");
    
            if ($query->num_rows() > 0) 
            {
                // var_dump($query->result_array());
                return $query->result_array();
            }    

            return false;
        }
        // Obtiene el total de registros de ingredientes
        public function Total()
        {
            return $this->db->count_all("ingredientes");
        }

        // ELimina un ingrediente
        public function Eliminar($id)
        {
            $this->db->delete('platillos', array('pa_id' => $id));
        }
        //Obtiene la información de un ingrediente
        public function usuario($id){
            $usuario=$this->db->get_where('platillos',array('platillos.pa_id'=>$id),1);
            return $usuario->row_array();
        }
        // Guarda un ingrediente
        public function Guardar()
        {
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

            return $response;
        }
        //Edita un ingrediente
        public function editarIngrediente(){
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
        }
        // Verifica si existe un ingrediente 
        public function Existe($id, $nombre, $unidad)
        {
            $existe = 
                (
                    $this->db
                        ->where("in_nombre='".strtoupper($nombre)."' and in_unidad = '".strtoupper($unidad)."' and in_id <> '".$id."'")
                        ->get("ingredientes")->num_rows() > 0
                );

            return $existe;                
        }

    }
    /* End of file Mod_Ingrediente.php */
?>
    