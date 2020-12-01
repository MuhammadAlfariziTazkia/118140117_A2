<?php 
	defined('BASEPATH') OR exit ('No Direct Script Access Allowed');

	class Login extends CI_Controller{
		public function _construct(){
			parent::_construct();
			$this->load->model('Model', 'model_model');
		}

		public function index(){
			if($this->session->userdata('email')){
				redirect('user');
			}
			$this->load->view('login/index');
		}

		public function cekLogin(){
			$username = $this->input->post('user_name');
			$password = $this->input->post('password');

			$getUser = $this->model_model->getUsername($username);

			if($getUser){
				$data=[
					'username' => $username,
					'loggedin_time' => time()
				];
					$this->session->set_userdata($data);
					redirect('user/index');
			}else{
				$this->session->flashdata('Meesage', '<p> User tidak terdaftar </p>');
				redirect('login');
			}
		}
	}

	
 ?>