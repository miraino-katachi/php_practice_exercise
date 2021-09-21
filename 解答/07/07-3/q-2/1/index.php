<?php

require_once('./Computer.php');
require_once('./PersonalComputer.php');
require_once('./SmartPhone.php');
require_once('./TabletPC.php');

$computers = [
    new PersonalComputer(),
    new TabletPC(),
    new SmartPhone(),
];

foreach ($computers as $computer) {
    $computer->showType();
    $computer->input();
    $computer->output();
    $computer->communication();
    echo '<p>--------------------------------------</p>';
}
