<?php
// namespace app\controllers;

// use app\libraries\Controller;

	class Pages extends Controller{
		public function __construct(){
			$this->userModel = $this->model('User');
			$this->propertyModel = $this->model('Property');
		}

		public function index(){
			if (isLoggedIn()) {
				redirect('users/dashboard');
			}
			
			$property = $this->propertyModel->allHomeProperty();
			$carouselProperty = $this->propertyModel->carouselProperty();
			$phouse = $this->propertyModel->propertyCountHouse();
			$papartment = $this->propertyModel->propertyCountApartment();
			$pland = $this->propertyModel->propertyCountLand();
			$prestaurant = $this->propertyModel->propertyCountRestaurant();
			$poffice = $this->propertyModel->propertyCountOffice();
			$photel = $this->propertyModel->propertyCountHotel();
			$data = [
				'property' => $property,
				'carouselProperty' => $carouselProperty,
				'phouse' => $phouse,
				'papartment' => $papartment,
				'pland' => $pland,
				'prestaurant' => $prestaurant,
				'poffice' => $poffice,
				'photel' => $photel
			];

			$this->view('pages/index', $data);
		}

		public function about(){
			$data = [
				'title' => 'Welcome to about page'
			];

			$this->view('pages/about', $data);
		}
	}
