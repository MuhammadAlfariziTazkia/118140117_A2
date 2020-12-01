<?php 
	defined('BASEPATH') OR exit ('No direct access allowrd');

	class User extends CI_Controller{

		public function _construct(){
			parent::_construct();
			$this->load->model('Model', 'model_model');
			index();
		}

		public function index(){
			if($this->session->userdata('username') == NULL){
				$this->session->set_flashdata('message', '<p> Login Dulu </p>');
				redirect('login');
			}
			if($this->session->userdata('username') != NULL){
				if($this->model_model->isLoginSessionExpired()){
					$this->session->set_flashdata('message', '<p> Sesi login sudah habis, silakan login kembali');
					redirect('user/logout');
				}
			}
			$sessionUser = $this->session->userdata('username');
			if($sessionUser == 'admin'){
				$data['user'] = $this->model_model->getDataAdmin();
				$this->load->view('articleadmin', $data);
			}else if($sessionUser == 'user1'){
				$data['user'] = $this->model_model->getDataUser1();
				$this->load->view('articleuser', $data);
			}else if($sessionUser == 'user2'){
				$data['user'] = $this->model_model->getDataUser2();
				$this->load->view('articleuser', $data);
			}
		}

		public function logout(){
			if($this->session->flashdata('message') != NULL){
				$this->session->set_flashdata('message', '<p> sesi login telah habis, silahkan login lagi <p>');
				$this->session->userdata('username');
				redirect('login');
			}else{
				$this->session->set_flashdata('message', '<p> sukses logout </p>');
				$this->session->unset_userdata('username');
				redirect('login');
			}
		}
		public function forminputadmin(){
			$this->load->view('forminputadmin');
		}

		public function aksiinputadmin(){
			$kegiatan = $this->input->post('kegiatan');
			$actor = $this->input->post('actor');

			$datainsert = array(
				'kegiatan' => $kegiatan,
				'actor' => $actor
			);

			$this->model_model->insertdataadmin($datainsert, $actor);
			redirect(base_url('user/index'));
		}
		public function forminputuser(){
			$this->load->view('forminputuser');
		}

		public function aksiinputuser(){
			$kegiatan = $this->input->post('kegiatan');
			$actor =$this->session->userdata('username');

			$datainsert = array(
				'kegiatan' => $kegiatan,
				'actor' => $actor
			);

			$this->model_model->insertdatauser($datainsert, $actor);
			redirect(base_url('user/index'));
		}

		public function formedit($id){
			$data['user'] = $this->model_model->getDataEdit($id);
			$this->load->view('formedit', $data);
		}

		public function aksiedit(){
			$kegiatan = $this->input->post('kegiatan');
			$id = $this->input->post('id');
			$user = $this->input->post('kegiatan');

			$this->model_model->prosesedit($id, $kegiatan, $user);
			redirect(base_url('user/index'));
		}
		public function aksidelete($id){
			$this->model_model->delete($id);
			redirect(base_url('user/index'));
		}
	}

		
	


 ?>