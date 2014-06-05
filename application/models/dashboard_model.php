<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function saveDom($datos, $lastUpdate)
  {
    foreach($datos as $renglon){
      $item = explode(' ', $renglon);
      $data= array(
        'id_objeto' => $item[0],
        'nombre_objeto' => $item[1],
        'status_objeto' => $item[2],
        'hora' =>$item[3],
        'fecha' =>$item[4],
        "ultima_actualizacion"=>$lastUpdate
      );
      $query = $this->db->insert('status',$data);
    }
  }
  public function queryItem(){
    $query= $this->db
            ->from('status') 
            ->order_by("id_status", "desc")
            ->limit(1)
            ->get();
    return $query->result_array();
  }

  public function allItems(){
    $query= $this->db
            ->from('status') 
            ->order_by("id_status", "desc")
            ->limit(6)
            ->get();
    return $query->result_array();
  }
  public function allTime(){
    $query= $this->db
                 ->from('status') 
                 ->order_by("id_status", "desc")
                 ->get();
    return $query->result_array();
  }
}

?>
