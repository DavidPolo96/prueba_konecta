<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller{


  public function index()
  {
    $this->load->model('Empleados_Model');
    $data['empleado'] = $this->Empleados_Model->get();
    $this->load->view("empleados/listado",$data);
 
  }

public function nuevo()
  {

    $this->load->model('Empleados_Model');
     $this->load->view("empleados/nuevo");  
  }


public function guardar()
  { 
  
    $this->load->model('Empleados_Model');
    $this->Empleados_Model->guardar($_POST);
    $this->index();
  }

}

