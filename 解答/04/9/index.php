<?php
$products = [
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
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題04-8</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
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
                            foreach ($products as $product) : ?>
                                <tr>
                                    <td><?= $product['product_name'] ?></td>
                                    <td><?= $product['production_area'] ?></td>
                                    <td><?= $product['quality'] ?></td>
                                    <td><?= $product['price'] ?></td>
                                    <td><?= $product['num'] ?></td>
                                    <td><?= $product['price'] * $product['num'] ?></td>
                                </tr>
                            <?php
                                $sum += $product['price'] * $product['num'];
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
        </div>
    </div>

</body>

</html>