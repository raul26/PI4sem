<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{

  public function __construct()
  {
    $this->load->library('session');
    $this->load->database();
  }

  public function doLogin($email,$password)
  {
    $data = array(
      'correo' => $email,
      'password' => $password
    );

    $query = $this->db->get_where('usuarios',$data);
    return $query->result_array();
  }

  public function isLogged()
  {
    if(isset($this->session->userdata['nombre']))
    {
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

  public function close()
  {
    return $this->session->sess_destroy();
  }
}

?>
