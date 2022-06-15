<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productos extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function obtenerProductos()
    {
        $obtenerProductos = "select * from productos";
        $data['productos'] = [];
        if ($this->db->query($obtenerProductos)) {
            $obtenerProductos = $this->db->query($obtenerProductos)->result_array();
            $data['productos'] = $obtenerProductos;
        }
        $this->load->view("welcome_message", $data);
    }

    public function guardar(){
        $datos = $this->input->post();
        $respuesta['status'] = 0;
        if($datos){
            if($this->db->insert('productos', $datos));
            $respuesta['status'] = 1;
        }
        echo json_encode($respuesta);
        
    }
}
