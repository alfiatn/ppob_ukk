<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

  public function user_check()
  {
    $username = $this->input->post('username'); //post = dari inputan user
    $password = $this->input->post('password');

    $query = $this->db->join('level', 'level.id_level = admin.id_level')
                      ->where('username', $username)
                      ->where('password', $password)
                      ->get('admin');

    if($query->num_rows() > 0)
    {
      $data_login = $query->row();
      $session = array(
                        'id_admin'     => $data_login->id_admin,
                        'username'     => $data_login->username,
                        'password'     => $data_login->password,
                        'login_status' => TRUE,
                        'id_level'     => $data_login->id_level
                      );

      $this->session->set_userdata($session);

      return true;

    } else {

        return false;

           }
  }

                                    }
