<?php

// PHP練習問題. 07-3クラスI
// 設問1.	クラスの作成（１）
// (5)	Dog クラスに次の内容を追加・修正し、その内容を確認できるプログラムを作成しなさい。

require_once('./Dog.php');

$dog = new Dog();
$dog->setName('ぽち');
$dog->setAge(5);
$dog->setType('柴犬');
$dog->showProfile();
