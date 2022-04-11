<?
require_once 'quackbehavior.php';

class Mutequack implements QuackBehavior {
	public function quack() {
		echo 'утка *молчит...* <br>';
	}
}