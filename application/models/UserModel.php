<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
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

    public function getAllUsers()
    {
        $user = $this->getBaseQueryUser();

        return $user->get()->result_array();
    }

    public function getBranchById($id, $withTrashed = false)
    {
//        $branches = $this->getBaseBranchQuery()->where('ref_branches.id', $id);
//
//        if (!$withTrashed) {
//            $branches->where('ref_branches.is_deleted', false);
//        }
//
//        return $branches->get()->row_array();
    }

    public function getBranchesByCustomer($idCustomer, $withTrashed = false)
    {
//        $branches = $this->db
//            ->select('ref_branches.*')
//            ->from($this->table)
//            ->join('ref_people_branches', 'ref_branches.id = ref_people_branches.id_branch')
//            ->where('ref_people_branches.id_customer', $idCustomer);
//
//        if (!$withTrashed) {
//            $branches->where('ref_branches.is_deleted', false);
//        }
//
//        return $branches->get()->result_array();
    }

    public function getBranchesByName($name = null, $withTrashed = false)
    {
//        $branches = $this->db
//            ->select('ref_branches.*')
//            ->from($this->table);
//
//        if (!empty($name)) {
//            $branches->like('ref_branches.branch', $name, 'both');
//        }
//
//        if (!$withTrashed) {
//            $branches->where('ref_branches.is_deleted', false);
//        }
//
//        $branches->limit(1);
//
//        return $branches->get()->row_array();
    }

    public function createUser($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function updateUser($data, $id)
    {
        return $this->db->update($this->table, $data, ['id' => $id]);
    }

    public function deleteUser($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}