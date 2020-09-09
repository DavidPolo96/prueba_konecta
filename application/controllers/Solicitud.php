<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud extends CI_Controller{


  public function index()
  {
    $this->load->model('Solicitud_Model');
    $data['solicitud'] = $this->Solicitud_Model->get();
    //$this->load->view("solicitudes/nuevo");
    $this->load->view("solicitudes/listado",$data);
    
  }

public function nuevo()
  {

    $this->load->model('Solicitud_Model');
     $this->load->view("solicitudes/nuevo");  


  }

public function guardar()
  { 
  
    $this->load->model('Solicitud_Model');
    $this->Solicitud_Model->guardar($_POST);
    $this->index();
  }




}