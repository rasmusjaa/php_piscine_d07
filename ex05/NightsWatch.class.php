<?php

class NightsWatch {

	private $recruits = [];

	public function recruit($person) {
		$this->$recruits[] = $person;
	}
	
	public function fight() {
		foreach ($this->$recruits as $recruit) {
			if ($recruit instanceof IFighter && method_exists($recruit, 'fight'))
				$recruit->fight();
		}
	}
}

?>
