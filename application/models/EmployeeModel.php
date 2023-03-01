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
        $this->db->trans_start();
        $this->db->insert('employee', $employeeData);
        $id = $this->db->insert_id();
        return $id;
    }

    public function get_all_count()
    {
        $this->db->where('is_deleted', TRUE);
        $this->db->from('employee');
        return $this->db->count_all_results();
    }
    public function add_technologies($employeeTechnology, $id)
    {

        for ($i = 0; $i < sizeof($employeeTechnology); $i++) {
            $technology = $employeeTechnology[$i];
            $data[$i] = array('emp_id' => $id, 'technology_id' => $technology);
        }
        $result = $this->db->insert_batch('employee_technology', $data);
        if($this->db->_error_message()) {
            $result = false;
        }
        if ($result) {
            $this->db->trans_commit();
        } else {
            $this->db->trans_rollback();
        }
        return $result;
    }

    public function get_all_rows($company_id)
    {
        $this->db->from('employee');
        $this->db->where('company_id', $company_id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_all_employees($order, $limit, $start)
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->where('is_deleted', TRUE);
        if (!empty($order)) {
            $this->db->order_by($order);
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_employee($name, $id, $limit, $start)
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->join('company', 'company.cmp_id = employee.company_id');
        if ($name != '') {
            $this->db->like('first_name', $name);
            $this->db->or_like('last_name', $name);
            $this->db->or_like('emailid', $name);
            $this->db->or_like('employee_id', $name);
            $this->db->where('is_deleted', TRUE);
            $this->db->limit($limit, $start);
        } else {
            $array = array('id' => $id, 'is_deleted' => TRUE);
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function edit_employee($employeeData)
    {
        $this->db->trans_begin();
        $this->db->set($employeeData);
        $this->db->where("id", $employeeData['id']);
        return $this->db->update("employee", $employeeData);
    }

    public function delete_employee($id)
    {
        $array = array('is_deleted' => False);
        return $this->db->update('employee', $array, array('id' => $id));
    }

    public function show_employees_by_technologies($technolgy_id, $limit, $start)
    {
        $this->db->select('*');
        $this->db->from('employee');
        $this->db->join('employee_technology', 'employee_technology.emp_id = employee.id');
        $array = array('technology_id' =>$technolgy_id, 'is_deleted' => TRUE);
        $this->db->where($array);
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }
}