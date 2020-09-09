<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud_Model extends CI_Model{

  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function get()
  {
    try {
      $sql = "SELECT s.ID, s.CODIGO, s.DESCRIPCION, s.RESUMEN, e.NOMBRE
         FROM solicitud AS s INNER JOIN empleado AS e ON e.ID = s.ID_EMPLEADO";
      $oData = $this->db->query($sql)->result();
      if ($oData) {
          return $oData;    
      }
      else
      {
        throw new Exception("no se encuentran solicitudes registradas en el sistema");
            
      }

    } catch (Exception $e) {
        throw new Exception($e->getMessage());
    }
    
  }

  public function guardar($data)
  {
   
    $this->db->insert('solicitud',$data);
  }
 

}