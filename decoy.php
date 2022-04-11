<?
require_once 'duck.php';
require_once 'flynoway.php';
require_once 'mutequack.php';


class DecoyDuck extends Duck {
	public function __construct(){
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new mutequack();
	}
	public function display(){
		echo '*Деревянные утки тоже молчат*. <br>';
	}
} 
?>