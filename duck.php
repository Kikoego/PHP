<?
require_once 'flybehavior.php';
require_once 'quackbehavior.php';

abstract class Duck {
	protected $flyBehavior;
	protected $quackBehavior;


	abstract public function display();

	public function performFly(){
		$this->flyBehavior->fly();
	}

	public function performQuack(){
		$this->quackBehavior->quack();
	}

	public function swim() {
		echo 'Все утки умеют плавать, даже деревянные <br>';
	}
}
?>