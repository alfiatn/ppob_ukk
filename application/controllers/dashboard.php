<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	
	}
	
	public function index()
	{
		if($this->session->userdata('login_status') == TRUE){

			$data['main_view'] = 'dashboard_view';
			$this->load->view('template', $data);

		} else {
			redirect('login/index');
		}
	}

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */