<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function admin_model_info($email_address, $password)
	{
		$this->db->select("*");
		$this->db->from("tbl_admin");
		$this->db->where("email_address", $email_address);
		$this->db->where("password", md5($password));
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function save_content_info()
	{
		$data = array();
		$data["content_title"] = $this->input->post("content_title", true);
		$data["content_desc"] = $this->input->post("content_desc", true);
		$data["category_id"] = $this->input->post("category_id", true);
		$sdata = array();
		$error = "";
		$config['upload_path'] = 'image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100000;
		$config['max_width'] = 2048;
		$config['max_height'] = 1024;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('content_img')) {
			$error = $this->upload->display_errors();
		} else {
			$sdata = $this->upload->data();
			$data['content_img'] = $config['upload_path'] . $sdata['file_name'];
		}
		$this->db->insert("tbl_content", $data);
	}

	public function get_category()
	{
		$this->db->select("*");
		$this->db->from("tbl_category");
		$query_result = $this->db->get();
		$content_info = $query_result->result();
		return $content_info;
	}

	public function all_content_info()
	{
		$this->db->select("*");
		$this->db->from("tbl_content");
		$this->db->join("tbl_category", "tbl_category.category_id = tbl_content.category_id");
		$query_result = $this->db->get();
		$content_info = $query_result->result();
		return $content_info;
	}

	public function all_content_info_by_id($content_id)
	{
		$this->db->select("*");
		$this->db->from("tbl_content");
		$this->db->where("content_id", $content_id);
		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;
	}

	public function update_content_info()
	{
		$data = array();
		$content_id = $this->input->post("content_id", true);
		$data["content_title"] = $this->input->post("content_title", true);
		$data["content_desc"] = $this->input->post("content_desc", true);

		$old_filename = $this->input->post('old_img');
		$new_filename = $_FILES['content_img']['name'];

		if ($new_filename == true) {
			$update_filename = time() . "-" . str_replace('', '-', $_FILES['content_img']['name']);
			$config['upload_path'] = 'image/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('content_img')) {
				if (file_exists("image/" . $old_filename)) {
					unlink("image/" . $old_filename);
				}
				$sdata = $this->upload->data();
				$data['content_img'] = $config['upload_path'] . $sdata['file_name'];
			} else {
				$error = $this->upload->display_errors();
			}
		} else {
			$update_filename = $old_filename;
		}
	
		$this->db->where("content_id", $content_id);
		$this->db->update("tbl_content", $data);
	}

	public function delete_content_by_id($content_id)
	{
		$this->db->where("content_id", $content_id);
		$this->db->delete('tbl_content');
	}
}
