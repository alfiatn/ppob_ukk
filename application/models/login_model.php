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
      $session = array(
                        'username'     => $username,
                        'password'     => $password,
                        'login_status' => TRUE,
                        'nama_level'   => $data_login->nama_level
                      );

      $this->session->set_userdata($session);

      return true;

    } else {

        return false;

           }
  }

                                    }
