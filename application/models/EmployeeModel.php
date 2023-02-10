<?php defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create($employeeData)
    {
        return $this->db->insert('employee', $employeeData);

    }

    public function get_all_employees($order)
    {
        $this->db->select('*');
        $this->db->from('employee');

        if (!empty($order)) {
            $this->db->order_by($order);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function get_employee($name)
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('first_name', $name);
        $query = $this->db->get();
        return $query->result();
    }
}