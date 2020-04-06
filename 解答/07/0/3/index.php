<?php
require_once('./Taiyaki.php');
require_once('./TaiyakiProduct.php');

// たい焼き器を使ってたい焼きを焼きます。
$konaType = "普通の小麦粉";
$ann = 'つぶあん';
$object = new Taiyaki($konaType, $ann);
$taiyaki = $object->bake();

// 1回目の商品のたい焼き粉の種類、餡（あん）の種類、粉のグラム数、焼く個数
$konaType1 = '普通の小麦粉';
$ann1 = 'チョコレートクリーム';
$konaQuantity1 = 100;
$num1 = 1;

// 1回目の商品のたい焼きを焼くクラスのインスタンスを作ります。
$object1 = new TaiyakiProduct($konaType1, $ann1, $konaQuantity1, $num1);

// 1回めの商品のたい焼きを焼く
// チョコレートクリームのたい焼きが出来上がります。
$taiyaki1 = $object1->bake();


// 2回目の商品のたい焼き粉の種類、餡（あん）の種類、粉のグラム数、焼く個数
$konaType2 = 'たい焼き専用粉';
$ann2 = 'カスタードクリーム';
$konaQuantity2 = 200;
$num2 = 2;

// 2回めの商品のたい焼きを焼くクラスのインスタンスを作ります。
$object2 = new TaiyakiProduct($konaType2, $ann2, $konaQuantity2, $num2);

// 2回めの商品のたい焼きを焼く
// カスタードクリームのたい焼きが出来上がります
$taiyaki2 = $object2->bake();


// 3回めの商品のたい焼きの餡（あん）の種類、粉のグラム数、焼く回数
$konaType3 = '特別ブレンド小麦';
$ann3 = '北海道産小豆のこしあん';
$konaQuantity3 = 300;
$num3 = 3;

// 3回めの商品のたい焼きを焼くクラスのインスタンスを作ります。
$object3 = new TaiyakiProduct($konaType3,$ann3, $konaQuantity3, $num3);

// 3回めの商品のたい焼きを焼く
// 北海道産小豆のこしあんのたい焼きが出来上がります
$taiyaki3 = $object3->bake();

?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>たい焼き焼いた（その3）｜クラスの説明</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">たい焼き焼けましたよ（その3）</div>
                    <div class="card-body">
                        <p>とりあえず焼いてみた</p>
                        <p><?= $taiyaki ?></p>
                        <hr>
                        <p>1回め</p>
                        <p><?= $taiyaki1 ?></p>
                        <hr>
                        <p>2回め</p>
                        <p><?= $taiyaki2 ?></p>
                        <hr>
                        <p>3回め</p>
                        <p><?= $taiyaki3 ?></p>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>