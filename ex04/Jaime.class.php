<?php

class Jaime extends Lannister {

    public function sleepWith($person) {
		if ($person instanceof Cersei)
			print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		else
            parent::sleepWith($person);
	}
}

?>
