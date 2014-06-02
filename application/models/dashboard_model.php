<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function saveDom($renglon)
  {
    $item = explode(' ', $renglon);
    $data= array(
      'id_objeto' => $item[0],
      'nombre_objeto' => $item[1],
      'status_objeto' => $item[2],
      'hora' =>$item[3],
      'fecha' =>$item[4]
    );

    $query = $this->db->insert('status',$data);
  }
}

?>
