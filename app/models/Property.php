<?php
	class Property{
		private $db;

		public function __construct(){
			$this->db = new Database();
		}

		public function submitProperty($data){
			$this->db->query("INSERT INTO property (user_id, title, type, rent_sale, description, size, image, address, landmark, city, lga, state, price, parlour, rooms, kitchen, bath) VALUES (:id, :title, :type, :rent_sale, :description, :size, :image, :address, :landmark, :city, :lga, :state, :price, :parlour, :rooms, :kitchen, :bath)");

			$this->db->bind(':id', $_SESSION['user_id']);
			$this->db->bind(':type', $data['radio']);
			$this->db->bind(':title', $data['title']);
			$this->db->bind(':rent_sale', $data['rent_sale']);
			$this->db->bind(':description', $data['desc']);
			$this->db->bind(':size', $data['area_size']);
			$this->db->bind(':image', $data['property_img']);
			$this->db->bind(':address', $data['addr']);
			$this->db->bind(':landmark', $data['landmark']);
			$this->db->bind(':city', $data['city']);
			$this->db->bind(':lga', $data['lga']);
			$this->db->bind(':state', $data['state']);
			$this->db->bind(':price', $data['price']);
			$this->db->bind(':parlour', $data['parlour']);
			$this->db->bind(':rooms', $data['bedroom']);
			$this->db->bind(':kitchen', $data['kitchen']);
			$this->db->bind(':bath', $data['bath']);

			if($this->db->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function allProperty(){
			$this->db->query("SELECT *, property.user_id as agentId, property.id as propertyId, user.id as userId FROM property INNER JOIN user on user.id = property.user_id");
			$result = $this->db->resultSet();
			return $result;
		}

		public function allHomeProperty(){
			$this->db->query("SELECT *, property.user_id as agentId, property.id as propertyId, user.id as userId FROM property INNER JOIN user on user.id = property.user_id ORDER BY property.id DESC LIMIT 6");
			$result = $this->db->resultSet();
			return $result;
		}

		public function carouselProperty(){
			$this->db->query("SELECT *, property.user_id as agentId, property.id as propertyId, user.id as userId FROM property INNER JOIN user on user.id = property.user_id ORDER BY property.id DESC LIMIT 3");
			$result = $this->db->resultSet();
			return $result;
		}

		public function viewProperty($id){
			$this->db->query("SELECT *, property.user_id as agentId, property.id as propertyId, user.id as userId FROM property INNER JOIN user on user.id = property.user_id WHERE property.id = :id");
			$this->db->bind(':id', $id);
			$row = $this->db->single();
			return $row;
		}

		public function updateProperty($data){
			$this->db->query("UPDATE property SET title = :title, type = :type, rent_sale = :rent_sale, description = :description, size = :size, image = :image, address = :address, landmark = :landmark, city = :city, lga = :lga, state = :state, price = :price, parlour = :parlour, rooms = :rooms, kitchen = :kitchen, bath = :bath WHERE id = :id");

			$this->db->bind(':id', $data['id']);
			$this->db->bind(':type', $data['radio']);
			$this->db->bind(':title', $data['title']);
			$this->db->bind(':rent_sale', $data['rent_sale']);
			$this->db->bind(':description', $data['desc']);
			$this->db->bind(':size', $data['area_size']);
			$this->db->bind(':image', $data['property_img']);
			$this->db->bind(':address', $data['addr']);
			$this->db->bind(':landmark', $data['landmark']);
			$this->db->bind(':city', $data['city']);
			$this->db->bind(':lga', $data['lga']);
			$this->db->bind(':state', $data['state']);
			$this->db->bind(':price', $data['price']);
			$this->db->bind(':parlour', $data['parlour']);
			$this->db->bind(':rooms', $data['bedroom']);
			$this->db->bind(':kitchen', $data['kitchen']);
			$this->db->bind(':bath', $data['bath']);

			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}

		public function deleteProperty($id){
			$this->db->query('DELETE FROM property WHERE id = :id');
			$this->db->bind(':id', $id);
			if ($this->db->execute()) {
				return true;
			}else{
				return false;
			}
		}

		public function propertyCountHouse(){
			$this->db->query("SELECT * FROM property WHERE type = 'house'");
			$count = $this->db->resultSet();
			$count1 = count($count);
			return $count1;
		}

		public function propertyCountApartment(){
			$this->db->query("SELECT * FROM property WHERE type = 'apartment'");
			$count = $this->db->resultSet();
			$count1 = count($count);
			return $count1;
		}

		public function propertyCountLand(){
			$this->db->query("SELECT * FROM property WHERE type = 'land'");
			$count = $this->db->resultSet();
			$count1 = count($count);
			return $count1;
		}

		public function propertyCountRestaurant(){
			$this->db->query("SELECT * FROM property WHERE type = 'restaurant'");
			$count = $this->db->resultSet();
			$count1 = count($count);
			return $count1;
		}

		public function propertyCountOffice(){
			$this->db->query("SELECT * FROM property WHERE type = 'office'");
			$count = $this->db->resultSet();
			$count1 = count($count);
			return $count1;
		}

		public function propertyCountHotel(){
			$this->db->query("SELECT * FROM property WHERE type = 'hotel'");
			$count = $this->db->resultSet();
			$count1 = count($count);
			return $count1;
		}

		public function getPropertyLike($type, $state, $lga){
			$type = "%$type%";
			$state = "%$state%";
			$lga = "%$lga%";

			$this->db->query("SELECT *, property.user_id as agentId, property.id as propertyId, user.id as userId FROM property INNER JOIN user on user.id = property.user_id WHERE property.type LIKE :type AND property.state LIKE :state AND property.lga LIKE :lga");
			$this->db->bind(':type', $type);
			$this->db->bind(':state', $state);
			$this->db->bind(':lga', $lga);

			$result = $this->db->resultSet();
			return $result;

		}

		

	}
