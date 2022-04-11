<?
require_once 'quackbehavior.php';

class ReactiveQuack implements QuackBehavior {
	public function quack() {
		echo '*Звук преодоления звукового барьера*! <br>';
	}
}
?>