<?php
	class User{
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

		public function regularsignup($data){
			$this->db->query("INSERT INTO user (role, surname, firstname, email, password, phonenumber) VALUES (3, :sn, :fn, :email, :password, :phonenumber)");

			$this->db->bind(':sn', $data['sn']);
			$this->db->bind(':fn', $data['fn']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':password', $data['password']);
			$this->db->bind(':phonenumber', $data['phonenumber']);

			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function agentsignup($data){
			$this->db->query("INSERT INTO user (role, surname, firstname, email, password, agent_image, agent_desc, phonenumber) VALUES (2, :sn, :fn, :email, :password, :agent_img, :agent_desc, :phonenumber)");

			$this->db->bind(':sn', $data['sn']);
			$this->db->bind(':fn', $data['fn']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':password', $data['password']);
			$this->db->bind(':phonenumber', $data['phonenumber']);
			$this->db->bind(':agent_img', $data['agent_img']);
			$this->db->bind(':agent_desc', $data['agent_desc']);

			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function findUserByEmail($email){
			$this->db->query("SELECT * FROM user WHERE email = :email");
			$this->db->bind(':email', $email);
			$row = $this->db->single();
			if ($this->db->rowCount() > 0) {
				return true;
			}else{
				return false;
			}

		}

		public function login($email, $password){
			$this->db->query("SELECT * FROM user WHERE email = :email");
			$this->db->bind(':email', $email);
			$row = $this->db->single();

			$hashed_password = $row->password;
			if (password_verify($password, $hashed_password)) {
				return $row;
			}else{
				return false;
			}
		}

		public function getUserById($id){
			$this->db->query("SELECT * FROM user WHERE id = :id");
			$this->db->bind(':id', $id);
			$row = $this->db->single();
			return $row;
		}

		public function agentUpdate($data){
			$this->db->query("UPDATE user SET surname = :sn, firstname = :fn, email = :email, agent_image = :agent_img, agent_desc = :agent_desc, phonenumber = :phonenumber WHERE id = :id");

			$this->db->bind(':id', $data['id']);
			$this->db->bind(':sn', $data['sn']);
			$this->db->bind(':fn', $data['fn']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':phonenumber', $data['phonenumber']);
			$this->db->bind(':agent_img', $data['agent_img']);
			$this->db->bind(':agent_desc', $data['agent_desc']);

			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function getAllAgents(){
			$this->db->query("SELECT * FROM user WHERE role = 2");
			$result = $this->db->resultSet();
			return $result;
		}

		public function deleteAgent($id){
			$this->db->query('DELETE FROM user WHERE id = :id');
			$this->db->bind(':id', $id);
			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}

		public function deleteAgentProperty($id){
			$this->db->query('DELETE FROM property WHERE user_id = :id');
			$this->db->bind(':id', $id);
			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}

		public function allregularUsers(){
			$this->db->query("SELECT * FROM user WHERE role = 3");
			$result = $this->db->resultSet();
			return $result;
		}




}


		
