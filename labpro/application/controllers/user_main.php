<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_main extends CI_Controller {

  public function index()
  {
    //default function call itself
    $this->load->view('index1');
  }
  public function test_view()
  {
    //admin test add function
    $this->load->model("main_model");//table
    $data["fetch_data"] = $this->main_model->fetch_data();//table
    $this->load->view("test_view",$data);
  }
  public function app_list_view()
  {
    $this->load->model("main_model");//table
    $data["fetch_data_contact"] = $this->main_model->fetch_data_contact();//table
    $this->load->view("app_list",$data);
  }

  public function package_view()
  {
    //admin test add function
    $this->load->model("main_model");//table
    $data["fetch_data"] = $this->main_model->fetch_data();//test_table
    $data["package_fetch_data"] = $this->main_model->package_fetch_data();//test_table
    $this->load->view("package_view",$data);
  }
  public function appointment_view()
  {
    //admin test add function
    $this->load->model("main_model");//table
    $data["fetch_data"] = $this->main_model->fetch_data();//test_table
    $data["package_fetch_data"] = $this->main_model->package_fetch_data();//test_table
    $this->load->view("appointment",$data);
  }
  public function form_validation()
  {
    //test admin function
    $this->load->library("form_validation");
    $this->form_validation->set_rules("first_name", "First Name", 'required|alpha');
    //	$this->form_validation->set_rules("last_name", "Last Name", 'required|alpha');

    if ($this->form_validation->run()) {
      // true
      $this->load->model("Main_model");
      $data = array(
        'first_name' =>$this->input->post("first_name")//,
        //		     'last_name' =>$this->input->post("last_name"),
      );

      $this->Main_model->insert_data($data);
      redirect(base_url()."user_main/test_inserted");
    }
    else
    {
      $this->test_view();
    }
  }
  public function package_form_validation()
  {
    //test admin function
    $this->load->library("form_validation");
    $this->form_validation->set_rules("Package_name", "Package Name", 'required');
    $this->form_validation->set_rules("video0_tags","Tests",'required');
    //	$this->form_validation->set_rules("last_name", "Last Name", 'required|alpha');

    if ($this->form_validation->run()) {
      // true
      $this->load->model("Main_model");
      $data = array(
        'name' =>$this->input->post("Package_name"),
        'tests' =>$this->input->post("video0_tags"),
      );

      $this->Main_model->insert_package_data($data);
      redirect(base_url()."user_main/package_inserted");
    }
    else
    {
      $this->package_view();
    }
  }


  public function Appointment_form_validation()
  {

    //test admin function
    $this->load->library("form_validation");
    $this->form_validation->set_rules("result", "Appointment Date", 'trim|required');
    $this->form_validation->set_rules("fname", "First Name", 'trim|required|alpha');
    $this->form_validation->set_rules("lname","First Name",'trim|required|alpha');
    $this->form_validation->set_rules("p_number", "Phone Number", 'required|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/] ');
    $this->form_validation->set_rules("e-mail", "Email ID", 'trim|required|valid_email');
    $this->form_validation->set_rules("rfdr", "Referred Doctor", 'required|min_length[3]|max_length[20]');
    $this->form_validation->set_rules("usr_time", "Appointment Time", 'required');
	$this->form_validation->set_rules("video0_tags", "Tests", 'trim');

    if ($this->form_validation->run()) {

      $this->load->model("Main_model");
      $data = array(
        'fname' =>$this->input->post("fname"),
        'lname' =>$this->input->post("lname"),
        'e_mail' =>$this->input->post("e-mail"),
        'p_number' =>$this->input->post("p_number"),
        'rfdr' =>$this->input->post("rfdr"),
        'app_date' =>$this->input->post("result"),
        'app_time' =>$this->input->post("usr_time"),
        'tests_pck' =>$this->input->post("video0_tags"),
      );
        $this->Main_model->insert_apoi_data($data);
        redirect(base_url()."user_main/appointment_inserted");
    }
    else
    {
      $this->appointment_view();
    }
  }
  public function test_delete_data()
  {
    $id = $this->uri->segment(3);
    $this->load->model("main_model");
    $this->main_model->test_delete_data($id);
    redirect(base_url()."user_main/test_deleted");

  }
  public function package_delete_data()
  {

    $id = $this->uri->segment(3);
    $this->load->model("main_model");
    $this->main_model->package_delete_data($id);
    redirect(base_url()."user_main/package_deleted");

  }

  public function test_deleted()
  {
    $this->test_view();
  }


  public function package_deleted()
  {
    $this->package_view();
  }
  public function package_inserted()
  {
    $this->package_view();
  }
  public function appointment_inserted()
  {
    $this->appointment_view();
  }
  public function test_inserted()
  {
    $this->test_view();
  }

  public function test_update_data()
  {
    $user_id = $this->uri->segment(3);
    $this->load->model("main_model");
    $data["user_data"] = $this->main_model->fetch_single_data($user_id);
    $data["fetch_data"] = $this->main_model->fetch_data();
    $this->load->view("test_view", $data);
  }
  public function package_update_data()
  {
    $user_id = $this->uri->segment(3);
    $this->load->model("main_model");
    $data["package_data"] = $this->main_model->package_fetch_single_data($user_id);
    $data["fetch_data"] = $this->main_model->fetch_data();
    $data["package_fetch_data"] = $this->main_model->package_fetch_data();//test_table
    $this->load->view("package_view", $data);
  }

}
