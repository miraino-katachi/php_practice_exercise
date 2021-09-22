<?php

// PHP練習問題. 01-3クラスI
// 設問1.	クラスの作成（１）
// (4)	Dogクラスのインスタンスを複数作成し、それぞれに異なる名前と年齢を設定して
// そのプロフィールを表示するプログラムをindex.phpに追記しなさい。

require_once('./Dog.php');

$dog = new Dog();
$dog->setName('ぽち');
$dog->setAge(5);
$dog->showProfile();

$dog2 = new Dog();
$dog2->setName('ココ');
$dog2->setAge(3);
$dog2->showProfile();

$dog3 = new Dog();
$dog3->setName('ムギ');
$dog3->setAge(8);
$dog3->showProfile();

$dog4 = new Dog();
$dog4->setName('ソラ');
$dog4->setAge(12);
$dog4->showProfile();
