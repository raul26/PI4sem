<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct()
  {
    parent:: __construct();
    $this->load->model('login_model');
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->helper('url');
  }

	public function index()
	{
    $exist = $this->login_model->isLogged();
    if($exist){
      redirect('/dashboard','refresh');
    }else{
      $this->load->view('loginForm');
    }  
	}

  public function doLogin(){
    if(!isset($_POST['correo']) OR !isset($_POST['password']))
    {
      $this->load->view('loginForm'); //si no recibimos datos por post, cargamos la vista del formulario
    }
    else
    {
      $isValidLogin = $this->login_model->doLogin($_POST['correo'],$_POST['password']); 
      if($isValidLogin)
      {
        $sesion_data = array(
          'id_usuario'=>$isValidLogin[0]['id_usuario'], 
          'nombre'=>$isValidLogin[0]['nombre'], 
          'apellido'=>$isValidLogin[0]['apellidos'], 
          'username' => $_POST['correo'],
        );
        $this->session->set_userdata($sesion_data);
        redirect('/dashboard','refresh');
      }
      else
      {
        // si es erroneo, devolvemos un mensaje de error
        $this->load->view('loginForm');
      }
    }
  }

  function data()
  {
    if($this->session->userdata['nombre'] == TRUE)
    {
      echo $this->session->userdata['nombre'];
      echo $this->session->userdata['password'];
    }
  }

  function destroy()
  {
    //destruimos la sesión
    $this->login_model->close();
    redirect('','refresh');
  }

}
?>
