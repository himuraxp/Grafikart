<?php
	class Personnage {
		public $nom;
		public $vie = 80;
		public $atk = 20;

		public function __construct($nom) {
			$this->nom = $nom;
		}

		public function crier()
		{
			echo "HAHAHAHAHA!";
		}

		public function regenerer($vie = null) {
			if (is_null($vie)) {
				$this->vie = 100;
			} else {
				$this->vie += $vie;
			}
		}

		public function attaque($cible) {
			var_dump($cible);
		}

		public function mort() {
			return $this->vie <= 0;
		}
	}
?>
