<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index() {
		$this->load->view('header');
		$this->load->view('pages/admin-ui/dashboard');
		$this->load->view('footer');
	}

	public function view_user() {
		$this->load->view('header');
		$this->load->view('template-parts/header-admin');
		$this->load->view('template-parts/sidebar-left-admin');
		$this->load->view('pages/admin-ui/user-management/view-user');
		$this->load->view('footer-copyright');
		$this->load->view('template-parts/sidebar-control-admin');
		$this->load->view('footer');
	}

	public function add_user() {
		$this->load->helper('form');

		// get roles from database
		$role_rs = $this->db->query("SELECT id, name FROM user_role;");
		$data['role_arr'] = $role_rs->result_array();

		// $data['title'] = 'News archive';
		
		$this->load->view('header');
		$this->load->view('template-parts/header-admin');
		$this->load->view('template-parts/sidebar-left-admin');
		$this->load->view('pages/admin-ui/user-management/add-user', $data);
		$this->load->view('footer-copyright');
		$this->load->view('template-parts/sidebar-control-admin');
		$this->load->view('footer');
	}

	public function save_user() {
		$this->load->helper('form');
		$name = $this->input->post('txtName');
		$email = $this->input->post('txtEmail');
		$role_id = $this->input->post('cmbRole');
		$pass = $this->input->post('pwdPass');

		// echo $role_id;
		
		$user = array(
			'name' => $name,
			'email' => $email,
			'role_id' => $role_id,
			'password' => $pass
		);
		$this->db->insert('users', $user);

		$this->view_user();
		// $this->load->view('header');
		// $this->load->view('template-parts/header-admin');
		// $this->load->view('template-parts/sidebar-left-admin');
		// $this->load->view('pages/admin-ui/user-management/view-user');
		// $this->load->view('footer-copyright');
		// $this->load->view('template-parts/sidebar-control-admin');
		// $this->load->view('footer');
	}

	public function edit_user() {
		$this->load->view('header');
		$this->load->view('template-parts/header-admin');
		$this->load->view('template-parts/sidebar-left-admin');
		$this->load->view('pages/admin-ui/user-management/edit-user');
		$this->load->view('footer-copyright');
		$this->load->view('template-parts/sidebar-control-admin');
		$this->load->view('footer');
	}
}