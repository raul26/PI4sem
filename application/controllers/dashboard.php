<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  public function __construct()
  {
    parent:: __construct();
    $this->load->model('login_model');
    $this->load->model('dashboard_model');
    $this->load->library('session');
    $this->load->helper('url');

    $exist = $this->login_model->isLogged();
    if(!$exist){
      redirect('/login','refresh');
    }  
  }

	public function index()
	{
    $itemValid=$this->dashboard_model->queryItem(); 
    $lastUpdate = filectime("Domotico1.txt");
    if(isset($itemValid[0])){
      if($itemValid[0]["ultima_actualizacion"]!= $lastUpdate){
        $datos=file(base_url("Domotico1.txt"));
        $this->dashboard_model->saveDom($datos, $lastUpdate); 
      }
    }else{
        $datos=file(base_url("Domotico1.txt"));
        $this->dashboard_model->saveDom($datos, $lastUpdate); 
    }
    $items=$this->dashboard_model->allItems();
    $data= array(
      "items" => $items 
    );
    $this->load->view('dashboard', $data);
  }

}
?>
