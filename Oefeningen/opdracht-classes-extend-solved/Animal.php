<?php

	class Animal
	{

		protected   $name, 
					$gender,
					$health;

		public function __construct( $name, $gender, $health ){
			$this->name		=	$name;
			$this->sex		=	$gender;
			$this->health	=	$health;
		}

		public function getName(){
            
			return $this->name;
            
		}

		public function getGender(){
            
			return $this->gender;
            
		}
        

		public function getHealth(){
            
			return $this->health;
            
		}

		public function changeHealth( $healthPoint ){
            
			$this->health 	+= 	$healthPoint;

			return $this->health;
            
		}

		public function doSpecialMove(){
            
			return 'Walk';
            
		}

	}

?>