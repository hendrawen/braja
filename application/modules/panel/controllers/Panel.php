<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged') <> 1) 
        {
            redirect(site_url('auth'));
        }
	}

	public function index()
	{	
		$data['title']			= 'Brjamarketindo';
		$data['judul']			= 'Dashboard';
		$data['sub_judul']		= '';
		$data['content']			= 'content';
		$this->load->view('dashboard',$data);
	}
}
