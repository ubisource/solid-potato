<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getBaseQueryUser()
    {
        $user = $this->db
            ->select('*')
            ->from($this->table);
        return $user;
    }
}