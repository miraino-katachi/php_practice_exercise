<?php
require_once('./Taiyaki.php');

// 1個めのたい焼きの粉の種類
$konaType1 = '普通の小麦粉';

// 1個目のたい焼きの餡（あん）の種類
$ann1 = 'チョコレートクリーム';

// 1個目のたい焼き機クラスのインスタンスを作ります。
$object1 = new Taiyaki($konaType1, $ann1);

// 1個めのたい焼きを焼く
// 普通の小麦粉のチョコレートクリームのたい焼きが出来上がります。
$taiyaki1 = $object1->bake();


// 2個めのたい焼きの粉の種類
$konaType2 = 'たい焼き専用粉';

// 2個めのたい焼きの餡（あん）
$ann2 = 'カスタードクリーム';

// 2個めのたい焼き機クラスのインスタンスを作ります。
$object2 = new Taiyaki($konaType2, $ann2);

// 2個めのたい焼きを焼く
// たい焼き専用粉のカスタードクリームのたい焼きが出来上がります
$taiyaki2 = $object2->bake();


// たい焼き器クラスのプロパティのあんの種類は「private」になっているので、クラス外から変更ができません。
// 下記はエラーになります。
// $object2->konaType = '特別ブレンド小麦';
// $object2->ann = 'こしあん';

// 3個めのたい焼きの粉の種類
$konaType3 = '特別ブレンド小麦';

// 3個めのたい焼きの餡（あん）
$ann3 = '北海道産小豆のこしあん';

// 3個めのたい焼き機クラスのインスタンスを作ります。
$object3 = new Taiyaki($konaType3, $ann3);

// 3個めのたい焼きを焼く
$taiyaki3 = $object3->bake();

?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>たい焼き焼いた（その2）｜クラスの説明</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">たい焼き焼けましたよ（その2）</div>
                    <div class="card-body">
                        <p>1個め</p>
                        <p><?= $taiyaki1 ?></p>
                        <hr>
                        <p>2個め</p>
                        <p><?= $taiyaki2 ?></p>
                        <hr>
                        <p>3個め</p>
                        <p><?= $taiyaki3 ?></p>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>