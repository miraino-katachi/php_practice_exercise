<?php
$poroducts = [
    0 => [
        'product_name' => 'みかん',
        'production_area' => '愛媛県',
        'quality' => '優',
        'price' => 3000,
        'num' => 5,
    ],
    1 => [
        'product_name' => 'りんご',
        'production_area' => '青森県',
        'quality' => '優',
        'price' => 5000,
        'num' => 2,
    ],
    2 => [
        'product_name' => 'バナナ',
        'production_area' => 'フィリピン',
        'quality' => '優',
        'price' => 1500,
        'num' => 3,
    ],
];
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題04-8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>品名</th>
                                <th>産地</th>
                                <th>品質</th>
                                <th>価格（円）</th>
                                <th>数量</th>
                                <th>小計（円）</th>
                            </tr>
                            <?php
                            $sum = 0;
                            foreach ($poroducts as $poroduct) : ?>
                                <tr>
                                    <td><?= $poroduct['product_name'] ?></td>
                                    <td><?= $poroduct['production_area'] ?></td>
                                    <td><?= $poroduct['quality'] ?></td>
                                    <td><?= $poroduct['price'] ?></td>
                                    <td><?= $poroduct['num'] ?></td>
                                    <td><?= $poroduct['price'] * $poroduct['num'] ?></td>
                                </tr>
                            <?php
                                $sum += $poroduct['price'] * $poroduct['num'];
                            endforeach ?>
                            <!--
                            foreach () {
                            }
                            の記法で書いてもOKです。
                             -->
                        </table>
                        合計金額：<?= $sum ?>円
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

</body>

</html>