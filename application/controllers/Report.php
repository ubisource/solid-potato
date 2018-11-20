<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function user()
	{
	    $this->load->model('UserModel', 'user');
	    $users = $this->user->getAllUsers();
	    $data = [
	        'title' => 'Laporan',
	        'content' => 'report/user',
            'users' => $users
        ];
		$this->load->view('template/layout', $data);
	}

    public function message()
    {
//        $this->load->model('MessageModel', 'message');
        $messages = [];
        $data = [
            'title' => 'Laporan',
            'content' => 'report/message',
            'messages' => $messages
        ];
        $this->load->view('template/layout', $data);
    }
}
