<?php 
	
	class Model extends CI_model{

		public function getUsername($username){
			return $this->db->get_where('user', ['username'=>$username])->row_array();
		}

		public function isLoginSessionExpired(){
			$login_session_duration = 5;
			$current_time = time();
			if(isset($_SESSION['loggedin_time']) and isset($_SESSION['username'])){
				if((time() - $this->session->userdata('loggedin_time')) > $login_session_duration){
						return true;
				}
			}
			return false;
		}
		public function getDataAdmin(){
			$query = $this->db->get('activity');
			return $query->result();
		}

		public function getDataUser1(){
			$query = $this->db->get_where('activity', ['actor'=>'user1']);
			return $query->result();
		}	

		public function getDataUser2(){
			$query = $this->db->get_where('activity', ['actor'=>'user2']);
			return $query->result();
		}

		public function insertdataadmin($data, $actor){
			$datasesi=[
					'username' =>$actor,
					'loggedin_time' => time()
				];
			$this->session->set_userdata($data);
			$this->db->insert('activity', $data);
		}

		public function insertdatauser($data, $actor){
			$datasesi=[
					'username' =>$actor,
					'loggedin_time' => time()
				];
			$this->session->set_userdata($data);
			$this->db->insert('activity', $data);
		}
		public function prosesedit($id, $kegiatan, $actor){
			$datasesi=[
					'username' =>$actor,
					'loggedin_time' => time()
				];
			$this->session->set_userdata($data);
			$this->db->where('id', $id);
			$this->db->update('activity', ['Kegiatan' => $kegiatan]);
		}

		public function getDataEdit($id){
			$this->db->where('id', $id);
			$query = $this->db->get('activity');
			return $query->row();
		}

		public function delete($id){
			$this->db->where('id', $id);
			$this->db->delete('activity');
		}
	}
 ?>