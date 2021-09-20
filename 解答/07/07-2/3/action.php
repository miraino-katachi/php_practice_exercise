<?php
// クラスのPHPファイルを読み込みます。
require_once('./Menu.php');
require_once('./Noodle.php');
require_once('./Drink.php');

// Noodleクラスのインスタンスを作ります。
$noodle = new Noodle($_POST['category'][0], $_POST['menu'][0], $_POST['price'][0], $_POST['option'][0]);

// Drinkクラスのインスタンスを作ります。
$drink = new Drink($_POST['category'][1], $_POST['menu'][1], $_POST['price'][1], $_POST['option'][1]);

// Noodleクラスのインスタンスから、クラス変数の内容を連想配列で取得します。
$dataNoodle = $noodle->getData();

// Drinkクラスのインスタンスから、クラス変数の内容を連想配列で取得します。
$dataDrink = $drink->getData();
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題07-3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">ラーメン</div>
                    <div class="card-body">
                        <table class="table table-border">
                            <?php foreach ($dataNoodle as $k => $v) : ?>
                                <tr>
                                    <th><?= $k ?></th>
                                    <td><?= $v ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">ドリンク</div>
                    <div class="card-body">
                        <table class="table table-header">
                        <?php foreach ($dataDrink as $k => $v) : ?>
                            <tr>
                                <th><?= $k ?></th>
                                <td><?= $v ?></td>
                            </tr>
                        <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>
</body>

</html>