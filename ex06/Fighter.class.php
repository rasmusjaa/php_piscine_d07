<?php

class Fighter {

    private $recruits = [];
    public $type;

    public function __construct($string) {
		$this->type = $string;
    }
    
	public function recruit($person) {
		$this->$recruits[] = $person;
	}
	
	public function fight() {
		foreach ($this->$recruits as $recruit) {
			if ($recruit instanceof Fighter && method_exists($recruit, 'fight'))
				$recruit->fight();
		}
	}
}

?>