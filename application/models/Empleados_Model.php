<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados_Model extends CI_Model{
  private $id;

  public function __construct(){
    parent::__construct();
    $this->load->database();

  }
  public function setId($id){
      $this->id = $id;
    }

  public function get()
  {
    return $this->db->query("SELECT * FROM empleado")->result();

  }

  public function load()
  {
    try {
      $sql = "SELECT NOMBRE FROM empleado WHERE ID =?";
      $oData = $this->db->query($sql,array($this->id))->row();
      if ($oData) {
          return $oData;    
      }
      else
      {
        throw new Exception("El empleado no fue encontrado");
            
      }
    } catch (Exception $e) {
      throw new Exception($e->getMessage());
      
    }
    
  }


  public function guardar($data)
  {
   
    $this->db->insert('empleado',$data);
  }
 
}