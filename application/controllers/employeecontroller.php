<?php defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

  public function index()
  {
    $config = array();
    $config["base_url"] = base_url() . 'employee';
    $config["total_rows"] = $this->EmployeeModel->get_all_count();
    $config["per_page"] = 5;
    $config["uri_segment"] = 2;
    $config["num_links"] = 2;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(2, 0);
    $str_links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;', $str_links);
    $data['employee_list'] = $this->EmployeeModel->get_all_employees('', $config["per_page"], $page);
    $this->load->view('showemployees', $data);
  }

  public function create()
  {
    $this->load->view('create');
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
    $this->form_validation->set_rules('email', 'Email-Id', 'required|is_unique[employee.emailid]', 'Email-Id already exists');
    // $this->form_validation->set_rules('date_of_joining', 'Date of joining', 'required');
    // $this->form_validation->set_rules('designation', 'Designation', 'required');
    // $this->form_validation->set_rules('year_of_experience', 'Year Of Experience', 'required');
    // $this->form_validation->set_rules('bloodgroup', 'BloodGroup', 'required');
    // $this->form_validation->set_rules('qualification', 'Qualification', 'required');
    // $this->form_validation->set_rules('emergencynumber', 'Emergency Number', 'required');
    // $this->form_validation->set_rules('current_address', 'Current address', 'required');
    // $this->form_validation->set_rules('permanent_address', 'Permanent_address', 'required');
    // $this->form_validation->set_rules('technology', 'Technology', 'required');

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
      $employeeData['company_id'] = $this->input->post('company');
      $rows = $this->EmployeeModel->get_all_rows($employeeData['company_id']);
      $count = 101 + $rows;
      $company = array("I2I", "EL5");
      $employeeData['employee_id'] = $company[$employeeData['company_id'] - 1] . $count;
      $employeeTechnology = $this->input->POST('technology');

      $Id = $this->EmployeeModel->create($employeeData);
      $result = $this->EmployeeModel->add_technologies($employeeTechnology, $Id);

      if ($Id > 0 && $result) {
        echo "<script type='text/javascript'>alert('Employee added successfully');location='index';</script>";
      }
    } else {
      $this->load->view('create.php');
    }
  }

  public function showEmployee()
  {

    $id = $_GET['id'];

    $data['employee_list'] = $this->EmployeeModel->get_employee('', $id, 0, 0);
    $this->load->view('showemployee', $data);
  }

  public function showEmployeeOrderbyName()
  {
    $config = array();
    $config["base_url"] = base_url() . 'name';
    $config["total_rows"] = $this->EmployeeModel->get_all_count();
    $config["per_page"] = 5;
    $config["uri_segment"] = 2;
    $config["num_links"] = 2;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(2, 0);
    $links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;', $links);
    $data['employee_list'] = $this->EmployeeModel->get_all_employees('first_name', $config["per_page"], $page);
    $this->load->view('showemployees', $data);
  }

  public function showEmployeeOrderbyExperience()
  {
    $config = array();
    $config["base_url"] = base_url() . 'experience';
    $config["total_rows"] = $this->EmployeeModel->get_all_count();
    $config["per_page"] = 5;
    $config["uri_segment"] = 2;
    $config["num_links"] = 2;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(2, 0);
    $links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;', $links);
    $data['employee_list'] = $this->EmployeeModel->get_all_employees('experience', $config["per_page"], $page);
    $this->load->view('showemployees', $data);
  }

  public function searchEmployee()
  {
    $name = $this->input->post('firstname');
    $name = ($this->uri->segment(2)) ? $this->uri->segment(2) : $name;
    $config = array();
    $config["base_url"] = base_url() . "search/$name";
    $config["total_rows"] = $this->EmployeeModel->get_all_count();
    $config["per_page"] = 5;
    $config["uri_segment"] = 3;
    $config["num_links"] = 2;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(3, 0);
    $links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;', $links);
    $data['employee_list'] = $this->EmployeeModel->get_employee($name, 0, $config["per_page"], $page);
    $this->load->view('showemployees', $data);
  }

  public function edit()
  {
    $id = $_GET['id'];
    $data['employee_list'] = $this->EmployeeModel->get_employee('', $id, 0, 0);

    if (!empty($data['employee_list'])) {
      $this->load->view('edit', $data);
    } else {
      $this->load->view('unsuccess');
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
    $employeeTechnology = $this->input->POST('technology');
    $result = $this->EmployeeModel->edit_employee($employeeData);
    $output = $this->EmployeeModel->add_technologies($employeeTechnology, $employeeData['id']);
    if ($result && $output) {
      echo "<script type='text/javascript'>alert('Employee edited successfully');location='employeecontroller/index';</script>";
    } else {
      $this->load->view('unsuccess');
    }
  }

  public function delete()
  {
    $id = $_GET['id'];
    $result = $this->EmployeeModel->delete_employee($id);
    if ($result) {
      echo "<script type='text/javascript'>alert('Employee deleted successfully');location='employeecontroller/index';</script>";
    } else {
      $this->load->view('unsuccess');
    }
  }

  public function showbytechnolgies()
  {
    $this->load->view('technology');
  }

  public function showemployeesbytechnologies()
  {
    $technolgy_id = $this->input->POST('technology');
    $technolgy_id = ($this->uri->segment(2)) ? $this->uri->segment(2) : $technolgy_id;
    $config = array();
    $config["base_url"] = base_url() . "showtechnology/$technolgy_id";
    $config["total_rows"] = $this->EmployeeModel->get_all_count();
    $config["per_page"] = 5;
    $config["uri_segment"] = 3;
    $config["num_links"] = 2;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(3, 0);
    $links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;', $links);
    
    $data['employee_list'] = $this->EmployeeModel->show_employees_by_technologies($technolgy_id, $config["per_page"], $page);
    $this->load->view('showemployees', $data);
  }
}
?>