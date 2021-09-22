<?php

require_once('./Animal.php');
require_once('./Dog.php');
require_once('./Cat.php');

// Dogクラスのインスタンスを生成する
$dog = new Dog('ぽち', 5);

// Catクラスのインスタンスを生成する
$cat = new Cat('たま', 3);

$dog->showProfile();
$dog->run();

$cat->showProfile();
$cat->sleep();
