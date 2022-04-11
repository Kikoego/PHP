<?
require_once 'duck.php';
require_once 'flynoway.php';
require_once 'squeak.php';


class RubberDuck extends Duck {
	public function __construct(){
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new Squack();
	}
	public function display(){
		echo '*Резиновые утки не разговаривают*. <br>';
	}
} 
?>