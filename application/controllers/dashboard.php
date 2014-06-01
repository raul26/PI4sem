<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  public function __construct()
  {
    parent:: __construct();
    $this->load->model('login_model');
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->helper('url');

    $exist = $this->login_model->isLogged();
    if(!$exist){
      redirect('/login','refresh');
    }  
  }

	public function index()
	{
    $this->load->view('dashboard');
	}

}
?>
