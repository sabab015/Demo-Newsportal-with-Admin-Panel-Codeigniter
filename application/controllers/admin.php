<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function admin_home()
    {
        $data = array();
        $this->load->view('login', $data);
    }

    public function admin_login()
    {
        $email_address = $this->input->post("email_address", true);
        $password = $this->input->post("password", true);
        $this->load->model("admin_model");
        $result = $this->admin_model->admin_model_info($email_address, $password);
        $sdata = array();

        if ($result) {
            $sdata["admin_id"] = $result->admin_id;
            $sdata["admin_name"] = $result->admin_name;
            $this->session->set_userdata($sdata);
            redirect("dashboard");
        } else {
            $sdata["message"] = "Your Email or Password is Invalid";
            $this->session->set_userdata($sdata);
            redirect("login");
        }
    }

    public function create_form()
    {
        $data = array();
        $page_data = array();
        $page_data['get_category'] = $this->admin_model->get_category();
        $data['admin_main_content'] = $this->load->view('pages/create_form', $page_data, true);
        $this->load->view('dashboard', $data);
    }

    public function save_content()
    {
        $this->admin_model->save_content_info();
        $sdata = array();
        $sdata["message"] = "Data uploaded successfully";
        $this->session->set_userdata($sdata);
        redirect("create-form");
    }

    public function manage_form()
    {
        $data = array();
        $data["all_content_info"] = $this->admin_model->all_content_info();
        $data['admin_main_content'] = $this->load->view('pages/manage_form', $data, true);
        $this->load->view('dashboard', $data);
    }

    public function home_page()
    {
        $data = array();
        $data["all_content_info"] = $this->admin_model->all_content_info();
        $this->load->view('home', $data);
    }

    public function edit_admin()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/edit_admin', '', true);
        $this->load->view('dashboard', $data);
    }

    public function dashboard()
    {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/admin_index', '', true);
        $this->load->view('dashboard', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata["message"] = "Logged out successfully";
        $this->session->set_userdata($sdata);
        redirect(base_url());
    }



    public function edit_form($content_id)
    {
        $data = array();
        $data["all_content_info_by_id"] = $this->admin_model->all_content_info_by_id($content_id);
        $data['admin_main_content'] = $this->load->view('pages/edit_form', $data, true);
        $this->load->view('dashboard', $data);
    }

    public function update_content()
    {
        $this->admin_model->update_content_info();
        $sdata = array();
        $sdata['message'] = "updated successfully";
        $this->session->set_userdata($sdata);
        redirect("manage-form");
    }

    public function delete_form($content_id)
    {
        $this->admin_model->delete_content_by_id($content_id);
        $sdata = array();
        $sdata['message'] = "deleted successfully";
        $this->session->set_userdata($sdata);
        redirect("manage-form");
    }
}
