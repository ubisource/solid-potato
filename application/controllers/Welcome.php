<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
	    $data = [
	        'content' => 'dashboard/index'
        ];
        $this->load->view('template/layout', $data);
	}
}
