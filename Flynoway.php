<?
require_once 'flybehavior.php';

class FlyNoWay implements FlyBehavior {
	public function fly() {
		echo 'Я не умею летать(((! <br>';
	}
}
?>