<?php

// PHP練習問題. 07-1クラスI
// (2)	前問のDogクラスを使用して、次のプログラム(index.php)を作成しなさい。

require_once('./Dog.php');

$dog = new Dog();
$dog->setName('ぽち');
$dog->showName();
