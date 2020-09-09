<?php   
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use \Restserver\Libraries\REST_Controller;
/**
 * 
 */
class Empleado extends REST_Controller
{
    function __construct()
    {

        parent::__construct();

    }

    public function index_get($id)
    {   
        try {
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Methods: POST');
            header('Content-Type: application/json');

            $this->load->model("Empleados_Model");
            $oEmpleado = new Empleados_Model();
            $oEmpleado->setId($id);
            $aEmpleado = $oEmpleado->load();
            $oResponse = new stdClass();
            $oResponse->message = "Datos cargados correctamente.";
            $oResponse->nombre = $aEmpleado->NOMBRE;

            $this->output->set_status_header(200)
                 ->set_content_type('application/json')
                 ->set_output(json_encode($oResponse));

        } catch (Exception $e) {
            $oResponse = new stdClass();
            $oResponse->message = $e->getMessage();

            $this->output->set_status_header(400)
                 ->set_content_type('application/json')
                 ->set_output(json_encode($oResponse));
                
        }
       
    }

          
}

 ?>