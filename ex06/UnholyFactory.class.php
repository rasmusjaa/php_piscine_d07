<?php

class UnholyFactory {

	private $absorbed = [];

	private function array_has_type($person) {
		foreach ($this->absorbed as $abs)
		{
			if ($abs->type == $person->type)
			{
				return true;
			}
		}
		return false;
	}

	public function absorb($person) {
		if ($person instanceof Fighter)
		{
			if ($this->array_has_type($person))
				print("(Factory already absorbed a fighter of type {$person->type})" . PHP_EOL);
			else
			{ 
				$this->absorbed[] = $person;
				print("(Factory absorbed a fighter of type {$person->type})" . PHP_EOL);
			}
		}
		else
			print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
		}
	
	public function fight() {
		foreach ($this->$absorbed as $person) {
			if ($person instanceof IFighter && method_exists($person, 'fight'))
				$person->fight();
		}
	}

	public function fabricate($rf) {
		foreach ($this->absorbed as $abs)
		{
			if ($abs->type == $rf)
			{
				print("(Factory fabricates a fighter of type {$abs->type})" . PHP_EOL);
				return $abs;
			}
		}
		print("(Factory hasn't absorbed any fighter of type {$rf})" . PHP_EOL);
		return null;
	}
}

?>