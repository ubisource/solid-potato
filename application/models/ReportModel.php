<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportModel extends CI_Model
{
    private $table = 'app_user';

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