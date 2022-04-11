<?
require_once 'duck.php';
require_once 'flywithwings.php';
require_once 'quack.php';


class MallarDuck extends Duck {
	public function __construct(){
		$this->flyBehavior = new FlyWithWings();
		$this->quackBehavior = new Quack();
	}
	public function display(){
		echo 'Я кряква. <br>';
	}
} 
?>