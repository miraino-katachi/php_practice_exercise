<?php

// PHP練習問題. 07-2クラスII
// 設問1.	クラスの継承
// (7)	ここまで作成したクラスを使用して次のプログラムを作成しなさい。

require_once('./Animal.php');
require_once('./Dog.php');
require_once('./Cat.php');

// 要素数が4つの配列を用意し、それぞれの要素にDogインスタンスとCatインスタンスを交互に設定する
$animals = [
    new Dog('ぽち', 5),
    new Cat('たま', 3),
    new Dog('ジョン', 7),
    new Cat('チャチャマル', 6),
];

// foreach文を使用し、すべての要素のspeak()メソッドを実行する
foreach ($animals as $animal) {
    $animal->speak();
}
