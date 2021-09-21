<?php

// PHP練習問題. 07-2クラスII
// 設問1.	クラスの継承
// (5)	Animalクラスに“......”という文字列を表示するspeak()メソッドを追加し、
// Dogインスタンス、Catインスタンスそれぞれからspeak()メソッドを実行するプログラムを作成しなさい。

require_once('./Animal.php');
require_once('./Dog.php');
require_once('./Cat.php');

// Dogクラスのインスタンスを生成する
$dog = new Dog('ぽち', 5);

// Catクラスのインスタンスを生成する
$cat = new Cat('たま', 3);

$dog->showProfile();
$cat->showProfile();

$dog->run();
$cat->sleep();

$dog->speak();
$cat->speak();
