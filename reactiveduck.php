<?
require_once 'duck.php';
require_once 'reactivefly.php';
require_once 'reactivequack.php';


class ReactiveDuck extends Duck {
	public function __construct(){
		$this->flyBehavior = new ReactiveFly();
		$this->quackBehavior = new Reactivequack();
	}
	public function display(){
		echo '*Ливнул из катки за 0.0000001сек.* <br>';
	}
} 
?>