<?php

// PHP練習問題. 07-2クラスII
// 設問1.	クラスの継承
// (4)	DogクラスとCatクラスで共通するname/ageプロパティおよびshowProfile()メソッドをAnimalクラスとして取り出し、
// DogクラスとCatクラスはAnimalクラスを継承するように変更しなさい。
// また、変更後に(3)のプログラムを実行し、変更前と実行結果が変わらないことを確認しなさい。

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
