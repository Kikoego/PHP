<?
require_once 'flybehavior.php';

class ReactiveFly implements FlyBehavior {
	public function fly() {
		echo 'Звук паленых торомозов <br>';
	}
}
?>