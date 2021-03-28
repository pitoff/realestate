<?php
	class Properties extends Controller{
		public function __construct(){
			
			$this->propertyModel = $this->model('Property');
			$this->userModel = $this->model('User');
		}

		public function submit(){
			if (!isLoggedIn()) {
				redirect('users/login');
			}
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$data = [
					'title' => trim($_POST['title']),
					'radio' => trim($_POST['radio']),
					'rent_sale' => trim($_POST['r_s']),
					'desc' => trim($_POST['desc']),
					'addr' => trim($_POST['addr']),
					'landmark' => trim($_POST['landmark']),
					'city' => trim($_POST['city']),
					'lga' => trim($_POST['lga']),
					'state' => trim($_POST['state']),
					'price' => trim($_POST['price']),
					'property_img' => trim($_FILES['property_img']['name']),
					'area_size' => trim($_POST['area_size']),
					'parlour' => trim($_POST['parlour']),
					'bedroom' => trim($_POST['bedroom']),
					'bath' => trim($_POST['bath']),
					'kitchen' => trim($_POST['kitchen'])
				];
				if ($this->propertyModel->submitProperty($data) && $this->upload()) {
					flash('added', 'property has been added');
					redirect('users/dashboard');
				}else{
					die('something went wrong');
				}
				$this->view('properties/submit', $data);
			}else{
				$data = [
					'title' => '',
					'radio' => '',
					'rent_sale' => '',
					'desc' => '',
					'addr' => '',
					'landmark' => '',
					'city' => '',
					'lga' => '',
					'state' => '',
					'price' => '',
					'property_img' => '',
					'area_size' => '',
					'parlour' => '',
					'bedroom' => '',
					'bath' => '',
					'kitchen' => ''
				];
				$this->view('properties/submit', $data);
			}	
		}

		public 	function upload(){
			$name = $_FILES['property_img']['name'];
			$tmp_name = $_FILES['property_img']['tmp_name'];
			// $size = $_FILES['food_image']['size'];
			// $max_length = 5000000; 
			$extension = strtolower(substr($name, strpos($name, '.')+1));	
				$location = '../public/image/';
					if (move_uploaded_file($tmp_name, $location.$name)) {
						return true;
					}else{
						return false;
					}
		}

		public function myproperty(){
			if (!isLoggedIn()) {
				redirect('users/login');
			}

			$allproperty = $this->propertyModel->allProperty();
			$data = [
				'property' => $allproperty
			];
			$this->view('properties/myproperty', $data);
		}

		public function viewproperty($id){
			$viewproperty = $this->propertyModel->viewProperty($id);
			
			$data = [
				'viewproperty' => $viewproperty
			];
			$this->view('properties/viewproperty', $data);
		}

		public function updateproperty($id){
			if (!isLoggedIn()) {
				redirect('users/login');
			}

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$data = [
					'id' => $id,
					'title' => trim($_POST['title']),
					'radio' => trim($_POST['radio']),
					'rent_sale' => trim($_POST['r_s']),
					'desc' => trim($_POST['desc']),
					'addr' => trim($_POST['addr']),
					'landmark' => trim($_POST['landmark']),
					'city' => trim($_POST['city']),
					'lga' => trim($_POST['lga']),
					'state' => trim($_POST['state']),
					'price' => trim($_POST['price']),
					'property_img' => trim($_FILES['property_img']['name']),
					'area_size' => trim($_POST['area_size']),
					'parlour' => trim($_POST['parlour']),
					'bedroom' => trim($_POST['bedroom']),
					'bath' => trim($_POST['bath']),
					'kitchen' => trim($_POST['kitchen'])
				];
				if ($this->propertyModel->updateProperty($data) && $this->upload()) {
					flash('updated', 'property has been updated');
					redirect('properties/myproperty');
				}else{
					die('something went wrong');
				}
				$this->view('properties/updateproperty', $data);
			}else{
				$existingdetails = $this->propertyModel->viewProperty($id);
				$data = [
					'id' => $id,
					'title' => $existingdetails->title,
					'radio' => $existingdetails->type,
					'rent_sale' => $existingdetails->rent_sale,
					'desc' => $existingdetails->description,
					'addr' => $existingdetails->address,
					'landmark' => $existingdetails->landmark,
					'city' => $existingdetails->city,
					'lga' => $existingdetails->lga,
					'state' => $existingdetails->state,
					'price' => $existingdetails->price,
					'property_img' => $existingdetails->image,
					'area_size' => $existingdetails->size,
					'parlour' => $existingdetails->parlour,
					'bedroom' => $existingdetails->rooms,
					'bath' => $existingdetails->bath,
					'kitchen' => $existingdetails->kitchen
				];
				$this->view('properties/updateproperty', $data);
			}				
		}

		public function removeproperty($id){
			if (!isLoggedIn()) {
				redirect('users/login');
			}

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				if ($this->propertyModel->deleteProperty($id)) {
					redirect('properties/myproperty');
				}else{
					die('something went wrong');
				}
			}else{
				$this->view('properties/myproperty');
			}
		}



	}

	
