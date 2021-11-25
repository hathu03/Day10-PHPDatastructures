<?php
include_once 'Dancer.php';
$male = new SplQueue();
$female = new SplQueue();
function pairing($male, $female)
{
    if (!($male->isEmpty()) and !($female->isEmpty())) {
        $mal = $male->dequeue();
        $fema = $female->dequeue();
        echo $mal->name . ' and ' . $fema->name . '<br>';
    } else if($male->isEmpty()) {
        echo $female->count().' female waiting<br>';
    } else if($female->isEmpty()) {
        echo $male->count().' male waiting<br>';
    } else {
        echo '0 people waiting<br>';
    }
}
$dance=new Dancer('Ha','male');
$male->enqueue($dance);
$dance=new Dancer('Ha Thu','female');
$female->enqueue($dance);
$dance=new Dancer('Ha Thu xinh dep','female');
$female->enqueue($dance);


pairing($male,$female);
pairing($male,$female);