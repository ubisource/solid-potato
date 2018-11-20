<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function index()
	{
	    $data = [
	        'content' => 'message/index'
        ];
		$this->load->view('template/layout', $data);
	}
}
