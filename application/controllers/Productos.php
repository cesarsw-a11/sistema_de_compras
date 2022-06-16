<?php

use Dompdf\Dompdf;

defined('BASEPATH') or exit('No direct script access allowed');

class Productos extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        validarAcceso($this->session->userdata("rol"));
    }

    
    public function pdf()
    {
        $pathPDF = base_url();
        $encabezadoVista = str_replace('{{BASE_URL}}', $pathPDF, $this->load->view("welcome_message", '', TRUE));
        $encabezadoVista .= '<link rel="stylesheet" href="assets/bootstrap4/css/bootstrap.min.css" />';

        // Crear PDF con DOMPDF
        $this->load->helper('file');
        $this->load->library('MY_Dompdf');
        $dompdf = new Dompdf([['isRemoteEnabled' => true]]);
        $dompdf->setPaper("A3", "portrait");

        $dompdf->loadHtml($encabezadoVista);
        // Renderiza documento PDF
        $dompdf->render();
        $salida['status'] = 1;
        //Guardar el documento renderizado en una variable
        $output = $dompdf->output();
        if (!$output) {
            $salida['status'] = 0;
        }
        //Guardar archivo en temporales
        file_put_contents("temp/prueba.pdf", $output);
    }
}
