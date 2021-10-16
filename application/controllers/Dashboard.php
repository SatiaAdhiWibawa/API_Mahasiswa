<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
			{
			$data['konten'] = 'Dashboard';
			$data['title'] = 'Dashboard';    
			$this->load->view('template_back/template', $data);
			}
}
