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
    $datos=file(base_url("Domotico1.txt"));
    foreach($datos as $renglon){
      $this->dashboard_model->saveDom($renglon); 
    }
    $this->load->view('dashboard');
  }

}
?>
