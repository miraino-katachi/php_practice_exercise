<?php

// PHP練習問題. 07-2クラスII
// 設問1.	クラスの継承
// (3)	先のDog クラス、Catクラスを使って、次のプログラムを作成しなさい。

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
