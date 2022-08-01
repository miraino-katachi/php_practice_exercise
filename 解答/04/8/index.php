<?php
$poroducts = [
    0 => [
        'product_name' => 'みかん',
        'production_area' => '愛媛県',
        'quality' => '優',
        'price' => 3000,
    ],
    1 => [
        'product_name' => 'りんご',
        'production_area' => '青森県',
        'quality' => '優',
        'price' => 5000,
    ],
    2 => [
        'product_name' => 'バナナ',
        'production_area' => 'フィリピン',
        'quality' => '優',
        'price' => 1500,
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>品名</th>
                                <th>産地</th>
                                <th>品質</th>
                                <th>価格（円）</th>
                            </tr>
                            <?php foreach ($poroducts as $poroduct) : ?>
                                <tr>
                                    <?php foreach ($poroduct as $v) : ?>
                                        <td><?= $v ?></td>
                                    <?php endforeach ?>
                                </tr>
                            <?php endforeach ?>
                            <!--
                            foreach () {
                            }
                            の記法で書いてもOKです。
                             -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>