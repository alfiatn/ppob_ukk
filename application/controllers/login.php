<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('login_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    if($this->session->userdata('login_status') == TRUE){
      redirect('dashboard');
    } else {
       $this->load->view('login_view');
    }
  }

  public function forgot_password()
  {
    //parameter
    $email = $this->uri->segment(3);

    echo 'Saya lupa password, email saya : '. $email;
  }

  public function act_login()
  {
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if($this->form_validation->run() == TRUE) {
      if($this->login_model->user_check() == TRUE)
      {
        redirect('dashboard');
      } else {
        $this->session->set_flashdata('notif', 'Password dan Username Tidak Benar!');
        redirect('login');
             }
      } else {
        $this->session->set_flashdata('notif', validation_errors());
        redirect('login');
           }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }
}
