<?php
	class Users extends Controller{
		public function __construct(){
			$this->userModel = $this->model('User');
			$this->propertyModel = $this->model('Property');
		}

		public function regularsignup(){
				if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				#process form
				//sanitize post data
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = [
					'sn' => trim($_POST['sn']),
					'fn' => trim($_POST['fn']),
					'email' => trim($_POST['email']),
					'password' => trim($_POST['password']),
					'confirm_password' => trim($_POST['confirm_password']),
					'phonenumber' => trim($_POST['phonenumber']),
					'sn_err' => '',
					'fn_err' => '',
					'email_err' => '',
					'password_err' => '',
					'confirm_password_err' => '',
					'phonenumber_err' => ''
				];

				if (empty($data['sn'])) {
					$data['sn_err'] = 'Please enter sur name';
				}
				if (empty($data['fn'])) {
					$data['fn_err'] = 'Please enter first name';
				}
				if (empty($data['email'])) {
					$data['email_err'] = 'Enter email address';
				}else{
					if ($this->userModel->findUserByEmail($data['email'])) {
						$data['email_err'] = 'Email is already taken';
					}
				}
				if (empty($data['phonenumber'])) {
					$data['phonenumber_err'] = 'Please enter your phonenumber';
				}
				if (empty($data['password'])) {
					$data['password_err'] = 'Please enter password';
				}elseif (strlen($data['password']) < 3) {
					$data['password_err'] = 'password must be at least 3 xters';
				}
				if (empty($data['confirm_password'])) {
					$data['confirm_password_err'] = 'Please confirm password';
				}elseif (($data['password']) != ($data['confirm_password'])) {
					$data['confirm_password_err'] = 'Password does not match';
				}

				if (empty($data['sn_err']) && empty($data['fn_err']) && empty($data['email_err']) && empty($data['phonenumber_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
					$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
					if ($this->userModel->regularsignup($data)) {
						flash('register_ok', 'Sign up was successful, you can now login');
						redirect('users/login');
					}else{
						die('something went wrong');
					}
				}else{
					$this->view('users/regularsignup', $data);
				}
			}else{
				$data = [
					'sn' => '',
					'fn' => '',
					'email' => '',
					'password' => '',
					'confirm_password' => '',
					'phonenumber' => '',
					'sn_err' => '',
					'fn_err' => '',
					'email_err' => '',
					'password_err' => '',
					'confirm_password_err' => '',
					'phonenumber_err' => ''
				];
				$this->view('users/regularsignup', $data);
			}
		}

		public function agentsignup(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				#process form
				//sanitize post data
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = [
					'sn' => trim($_POST['sn']),
					'fn' => trim($_POST['fn']),
					'email' => trim($_POST['email']),
					'agent_img' => trim($_FILES['agent_img']['name']),
					'agent_desc' => trim($_POST['agent_desc']),
					'password' => trim($_POST['password']),
					'confirm_password' => trim($_POST['confirm_password']),
					'phonenumber' => trim($_POST['phonenumber']),
					'sn_err' => '',
					'fn_err' => '',
					'email_err' => '',
					'agent_img_err' => '',
					'password_err' => '',
					'confirm_password_err' => '',
					'phonenumber_err' => ''
				];

				if (empty($data['sn'])) {
					$data['sn_err'] = 'Please enter sur name';
				}
				if (empty($data['fn'])) {
					$data['fn_err'] = 'Please enter first name';
				}
				if (empty($data['email'])) {
					$data['email_err'] = 'Enter email address';
				}else{
					if ($this->userModel->findUserByEmail($data['email'])) {
						$data['email_err'] = 'Email is already taken';
					}
				}
				if (empty($data['phonenumber'])) {
					$data['phonenumber_err'] = 'Please enter your phonenumber';
				}
				if (empty($data['agent_img'])) {
					$data['agent_img_err'] = 'Please upload your passport photo';
				}
				if (empty($data['password'])) {
					$data['password_err'] = 'Please enter password';
				}elseif (strlen($data['password']) < 3) {
					$data['password_err'] = 'password must be at least 3 xters';
				}
				if (empty($data['confirm_password'])) {
					$data['confirm_password_err'] = 'Please confirm password';
				}elseif (($data['password']) != ($data['confirm_password'])) {
					$data['confirm_password_err'] = 'Password does not match';
				}

				if (empty($data['sn_err']) && empty($data['fn_err']) && empty($data['email_err']) && empty($data['phonenumber_err']) && empty($data['password_err']) && empty($data['confirm_password_err']) && empty($data['agent_img_err'])) {
					$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
					if ($this->userModel->agentsignup($data) && $this->upload()) {
						flash('register_ok', 'Sign up was successful, you can now login');
						redirect('users/login');
					}else{
						die('something went wrong');
					}
				}else{
					$this->view('users/agentsignup', $data);
				}
			}else{
				$data = [
					'sn' => '',
					'fn' => '',
					'email' => '',
					'agent_img' => '',
					'agent_desc' => '',
					'password' => '',
					'confirm_password' => '',
					'phonenumber' => '',
					'sn_err' => '',
					'fn_err' => '',
					'email_err' => '',
					'agent_img_err' => '',
					'password_err' => '',
					'confirm_password_err' => '',
					'phonenumber_err' => ''
				];
				$this->view('users/agentsignup', $data);
			}
		}

		public 	function upload(){
		$name = $_FILES['agent_img']['name'];
		$tmp_name = $_FILES['agent_img']['tmp_name'];
		// $size = $_FILES['food_image']['size'];
		// $max_length = 5000000; 
		$extension = strtolower(substr($name, strpos($name, '.')+1));	
			$location = '../public/image/';
			if ($extension=='jpg' || $extension=='jpeg'){
				if (move_uploaded_file($tmp_name, $location.$name)) {
					return true;
				}else{
					return false;
				}
			}
		}

		public function login(){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

				$data = [
					'email' => trim($_POST['email']),
					'password' => trim($_POST['password']),
					'email_err' => '',
					'password_err' => ''
				];

				if (empty($data['email'])) {
					$data['email_err'] = 'please enter email address';
				}
				if (empty($data['password'])) {
					$data['password_err'] = 'please enter password';
				}

				if ($this->userModel->findUserByEmail($data['email'])) {
					//user found
				}else{
					$data['email_err'] = 'no user found';
				}

				if (empty($data['email_err']) && empty($data['password_err'])) {
					$loggedInUser = $this->userModel->login($data['email'], $data['password']); 
					if ($loggedInUser) {
						$this->createUserSession($loggedInUser);
					}else{
						$data['password_err'] = 'password is invalid';

						$this->view('users/login', $data);
					}
				}else{
					$this->view('users/login', $data);
				}
			}else{
				$data = [
					'email' => '',
					'password' => '',
					'email_err' => '',
					'password_err' => ''
				];
				$this->view('users/login', $data);
			}
		}

		public function createUserSession($user){
			$_SESSION['user_id'] = $user->id;
			$_SESSION['email'] = $user->email;
			$_SESSION['firstname'] = $user->firstname;
			$_SESSION['surname'] = $user->surname;
			$_SESSION['role'] = $user->role;
			$_SESSION['status'] = $user->status;
			redirect('users/dashboard');
		}

		public function logout(){
			unset($_SESSION['user_id']);
			unset($_SESSION['email']);
			unset($_SESSION['firstname']);
			unset($_SESSION['surname']);
			unset($_SESSION['role']);
			unset($_SESSION['status']);
			session_destroy();
			redirect('users/login');
		}

		public function dashboard(){
			$allproperty = $this->propertyModel->allProperty();
			$data = [
				'property' => $allproperty
			];
			$this->view('users/dashboard', $data);
		}

		public function profile($id){
			$viewagent = $this->userModel->getUserById($id);
			$data = [
				'viewagent' => $viewagent
			];
			$this->view('users/profile', $data);
		}

		public function updateprofile($id){
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				#process form
				//sanitize post data
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = [
					'id' => $_SESSION['user_id'],
					'sn' => trim($_POST['sn']),
					'fn' => trim($_POST['fn']),
					'email' => trim($_POST['email']),
					'agent_img' => trim($_FILES['agent_img']['name']),
					'agent_desc' => trim($_POST['agent_desc']),
					'phonenumber' => trim($_POST['phonenumber']),
					'sn_err' => '',
					'fn_err' => '',
					'email_err' => '',
					'agent_img_err' => '',
					'phonenumber_err' => ''
				];

				if (empty($data['sn'])) {
					$data['sn_err'] = 'Please enter sur name';
				}
				if (empty($data['fn'])) {
					$data['fn_err'] = 'Please enter first name';
				}
				if (empty($data['email'])) {
					$data['email_err'] = 'Enter email address';
				}
				if (empty($data['phonenumber'])) {
					$data['phonenumber_err'] = 'Please enter your phonenumber';
				}
				if (empty($data['agent_img'])) {
					$data['agent_img_err'] = 'Please upload your passport photo';
				}
				
				if (empty($data['sn_err']) && empty($data['fn_err']) && empty($data['email_err']) && empty($data['phonenumber_err']) && empty($data['agent_img_err'])) {
					if ($this->userModel->agentUpdate($data) && $this->upload()) {
						flash('agentupdated', 'your profile has been updated');
						redirect('users/agents');
					}else{
						die('something went wrong');
					}
				}else{
					$this->view('users/updateprofile', $data);
				}
			}else{
				$agentdetails = $this->userModel->getUserById($id);
				$data = [
					'id' => $_SESSION['user_id'],
					'sn' => $agentdetails->surname,
					'fn' => $agentdetails->firstname,
					'email' => $agentdetails->email,
					'agent_img' => $agentdetails->agent_image,
					'agent_desc' => $agentdetails->agent_desc,
					'phonenumber' => $agentdetails->phonenumber,
					'sn_err' => '',
					'fn_err' => '',
					'email_err' => '',
					'agent_img_err' => '',
					'phonenumber_err' => ''
				];
				$this->view('users/updateprofile', $data);
			}			
		}

		public function agents(){
			$allagents = $this->userModel->getAllAgents();
			$data = [
				'allagents' => $allagents
			];
			$this->view('users/agents', $data);
		}


	}