<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AboutUs extends CI_Controller {
  public function __construct()
  {
    parent:: __construct();
    $this->load->model('login_model');
    $this->load->library('session');
    $this->load->helper('url');
  }

	public function index()
	{
    $this->load->view('aboutUs');
  }

}
?>
