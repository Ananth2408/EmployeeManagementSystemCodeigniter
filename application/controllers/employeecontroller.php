<?php defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{
  public function index()
  {
    $data['employee_list'] = $this->EmployeeModel->get_all_employees('');
    $this->load->view('showemployees', $data);
  }

  public function create()
  {
    $this->load->view('create', 0);
  }

  public function insertData()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('firstname', 'FirstName', 'required');
    // $this->form_validation->set_rules('middlename', 'MiddleName', 'required');
    // $this->form_validation->set_rules('lastname', 'LastName', 'required');
    // $this->form_validation->set_rules('photo', 'Photo', 'required');
    // $this->form_validation->set_rules('date_of_birth', 'Date of birth', 'required');
    // $this->form_validation->set_rules('gender', 'Gender', 'required');
    // $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required');
    // $this->form_validation->set_rules('email', 'Emal_id', 'required');
    // $this->form_validation->set_rules('date_of_joining', 'Date of joining', 'required');
    // $this->form_validation->set_rules('designation', 'Designation', 'required');
    // $this->form_validation->set_rules('year_of_experience', 'Year Of Experience', 'required');
    // $this->form_validation->set_rules('bloodgroup', 'BloodGroup', 'required');
    // $this->form_validation->set_rules('qualification', 'Qualification', 'required');
    // $this->form_validation->set_rules('emergencynumber', 'Emergency Number', 'required');
    // $this->form_validation->set_rules('current_address', 'Current address', 'required');
    // $this->form_validation->set_rules('permanent_address', 'Permanent_address', 'required');

    if ($this->form_validation->run() == TRUE) {
      $employeeData['first_name'] = $this->input->POST('firstname');
      $employeeData['last_name'] = $this->input->POST('lastname');
      $employeeData['middle_name'] = $this->input->POST('middlename');
      $employeeData['picture'] = $this->input->POST('photo');
      $employeeData['date_of_birth'] = $this->input->POST('date_of_birth');
      $employeeData['gender'] = $this->input->POST('gender');
      $employeeData['contact_number'] = $this->input->POST('phonenumber');
      $employeeData['emailid'] = $this->input->POST('email');
      $employeeData['date_of_joining'] = $this->input->POST('date_of_joining');
      $employeeData['designation'] = $this->input->POST('designation');
      $employeeData['experience'] = $this->input->POST('year_of_experience');
      $employeeData['blood_group'] = $this->input->POST('bloodgroup');
      $employeeData['qualification'] = $this->input->POST('qualification');
      $employeeData['emergency_number'] = $this->input->POST('emergencynumber');
      $employeeData['current_address'] = $this->input->POST('current_address');
      $employeeData['permanent_address'] = $this->input->POST('permanent_address');
      $employeeTechnology = $this->input->POST('technology');
      print_r($employeeTechnology);
      $Id = $this->EmployeeModel->create($employeeData);
      $result = $this->EmployeeModel->add_technologies($employeeTechnology, $Id);

      if ($Id > 0 && $result) {
        $this->load->view('created');
      }
    } else {
      $this->load->view('create', 0);
    }
  }

  public function showEmployeeOrderbyName()
  {
    $data['employee_list'] = $this->EmployeeModel->get_all_employees('first_name');
    $this->load->view('showemployees', $data);
  }

  public function showEmployeeOrderbyExperience()
  {
    $data['employee_list'] = $this->EmployeeModel->get_all_employees('experience');
    $this->load->view('showemployees', $data);
  }

  public function search()
  {
    $this->load->view('searchemployee');
  }

  public function searchEmployee()
  {
    $name = $this->input->post('firstname');
    $data['employee_list'] = $this->EmployeeModel->get_employee($name, 0);
    $this->load->view('showemployees', $data);
  }

  public function edit()
  {
    $id = $_GET['id'];
    $data['employee_list'] = $this->EmployeeModel->get_employee('', $id);
    print_r($data);
    if (!empty($data['employee_list'])) {
      $this->load->view('edit', $data);
    } else {
      $this->load->view('created');
    }


  }

  public function editEmployee()
  {
    $employeeData['id'] = $this->input->POST('id');
    $employeeData['first_name'] = $this->input->POST('firstname');
    $employeeData['last_name'] = $this->input->POST('lastname');
    $employeeData['middle_name'] = $this->input->POST('middlename');
    $employeeData['picture'] = $this->input->POST('photo');
    $employeeData['date_of_birth'] = $this->input->POST('date_of_birth');
    $employeeData['gender'] = $this->input->POST('gender');
    $employeeData['contact_number'] = $this->input->POST('phonenumber');
    $employeeData['emailid'] = $this->input->POST('email');
    $employeeData['date_of_joining'] = $this->input->POST('date_of_joining');
    $employeeData['designation'] = $this->input->POST('designation');
    $employeeData['experience'] = $this->input->POST('year_of_experience');
    $employeeData['blood_group'] = $this->input->POST('bloodgroup');
    $employeeData['qualification'] = $this->input->POST('qualification');
    $employeeData['emergency_number'] = $this->input->POST('emergencynumber');
    $employeeData['current_address'] = $this->input->POST('current_address');
    $employeeData['permanent_address'] = $this->input->POST('permanent_address');

    $result = $this->EmployeeModel->edit_employee($employeeData);
    if ($result) {
      $this->load->view('created');
    } else {
      $this->load->view('edit');
    }
  }

  public function delete()
  {
    $id = $_GET['id'];
    $result = $this->EmployeeModel->delete_employee($id);
    if ($result) {
      $this->load->view('created');
    } else {
      $this->load->view('edit');
    }
  }

  public function showbytechnolgies()
  {
    $this->load->view('technology');
  }

  public function showemployeesbytechnolgies()
  {
    $technolgy_id = $this->input->POST('technology');
    $data['employee_list'] = $this->EmployeeModel->show_empoyees_by_technologies($technolgy_id);
    $this->load->view('showemployees', $data);
  }
}
?>