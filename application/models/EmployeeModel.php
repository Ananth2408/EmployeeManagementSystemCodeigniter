<?php defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeModel extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create($employeeData)
    {
        $this->db->insert('employee', $employeeData);
        $id = $this->db->insert_id();
        return $id;
    }

    public function add_technologies($employeeTechnology, $id) {
         for ($i=0; $i< sizeof ($employeeTechnology); $i++) {
            $technology = $employeeTechnology[$i];
            $data = array ('employee_id' => $id, 'technology_id' => $technology);
           $result = $this->db->insert('employee_technology', $data);
         }
          return $result;
    }

    public function get_all_employees($order)
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('is_deleted', TRUE);
        if (!empty($order)) {
            $this->db->order_by($order);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function get_employee($name, $id)
    {
        $this->db->select('*');
        $this->db->from('employee');
        if ($name != '') {
            $array = array('first_name' => $name, 'is_deleted' => TRUE);
            $this->db->where($array);
        } else {
            $array = array('id' => $id, 'is_deleted' => TRUE);
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function edit_employee($employeeData)
    {
        $this->db->set($employeeData);
        $this->db->where("id", $employeeData['id']);
        return $this->db->update("employee", $employeeData);
    }

    public function delete_employee($id)
    {
        $array = array('is_deleted' => False);
        return $this->db->update('employee', $array, array('id' => $id));

    }

    public function show_empoyees_by_technologies($technolgy_id) {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->join('employee_technology', 'employee_technology.employee_id = employee.id');
        $this->db->where("technology_id", $technolgy_id);
        $query = $this->db->get();
        return $query->result();
    }
}