<?
header('Content-type: text/html; charset=utf-8');
require_once 'mallardduck.php';
require_once 'redheadduck.php';
require_once 'rubberduck.php';
require_once 'decoy.php';
require_once 'reactiveduck.php';

//echo '|<br>';
$duck1 = new MallarDuck();
$duck1->display();
$duck1->performFly();
$duck1->performQuack();
$duck1->swim();

echo '<br>';

$duck2 = new RedHeadDuck();
$duck2->display();
$duck2->performFly();
$duck2->performQuack();
$duck2->swim();

echo '<br>';

$duck3 = new RubberDuck();
$duck3->display();
$duck3->performFly();
$duck3->performQuack();
$duck3->swim();

echo '<br>';

$duck4 = new DecoyDuck();
$duck4->display();
$duck4->performFly();
$duck4->performQuack();
$duck4->swim();

echo '<br>';

$duck5 = new ReactiveDuck();
$duck5->display();
$duck5->performFly();
$duck5->performQuack();
$duck5->swim();

?>