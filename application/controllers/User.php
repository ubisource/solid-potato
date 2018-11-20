<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel', 'user');
    }

    public function index()
    {
        $users = $this->user->getAllUsers();
        $data = [
            'content' => 'user/index',
            'users' => $users
        ];
        $this->load->view('template/layout', $data);
    }

    public function create()
    {
        $data = [
            'content' => 'user/create'
        ];
        $this->load->view('template/layout', $data);
    }

    public function save()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('name', 'Nama Pengguna', 'trim|required|max_length[50]');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata([
                    'status' => 'warning',
                    'message' => 'Form inputs are invalid',
                ]);
            } else {
                $name = $this->input->post('name');
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = $this->input->post('pass');
                $role = $this->input->post('role');
                $status = $this->input->post('status');

                $save = $this->user->createUser([
                    'name' => $name,
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'role' => $role,
                    'status' => 'ACTIVE'
                ]);

                if ($save) {
                    $this->session->set_flashdata([
                        'status' => 'success',
                        'message' => "User <strong>{$name}</strong> berhasil dibuat",
                    ]);
                    redirect("user");
                } else {
                    $this->session->set_flashdata([
                        'status' => 'danger',
                        'message' => "Simpan data gagal, coba kembali atau hubungi administrator",
                    ]);
                }
            }
        } else {
            redirect('user/create');
        }
    }

    public function edit()
    {
        $data = [
            'content' => 'user/update'
        ];
        $this->load->view('template/layout', $data);
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->form_validation->set_rules('name', 'Nama User', 'trim|required|max_length[50]');
            $this->form_validation->set_rules('pass1', 'Password', 'trim|required|max_length[300]');
            $this->form_validation->set_rules('pass2', 'Password', 'trim|required|max_length[500]');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata([
                    'status' => 'warning',
                    'message' => 'Form inputs are invalid',
                ]);
            } else {
                $name = $this->input->post('name');
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = $this->input->post('pass');
                $role = $this->input->post('role');
                $status = $this->input->post('status');

                $save = $this->user->createUser([
                    'name' => $name,
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'role' => $role,
                    'status' => $status
                ]);

                if ($save) {
                    $this->session->set_flashdata([
                        'status' => 'sukses',
                        'message' => "User <strong>{$user}</strong> berhasil di update",
                    ]);
                    redirect("user");
                } else {
                    $this->session->set_flashdata([
                        'status' => 'danger',
                        'message' => "Update data gagal, coba kembali atau hubungi administrator",
                    ]);
                }
            }
        } else {
            redirect('user/create');
        }
    }
}
