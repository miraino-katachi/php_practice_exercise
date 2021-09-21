<?php

// PHP練習問題. 07-1クラスI
// 設問1.	クラスの作成（１）
// (3)	Dog クラスに次の内容を追加しなさい。
// また前問と同様に、追加した内容を確認できるプログラムをindex.phpに追記しなさい。

require_once('./Dog.php');

$dog = new Dog();
$dog->setName('ぽち');
$dog->showName();

$dog->setAge(5);
$dog->showProfile();
