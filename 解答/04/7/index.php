<?php
$product = [
    'product_name' => 'みかん',
    'production_area' => '愛媛県',
    'quality' => '優',
    'price' => 3000,
];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題04-7</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <?php foreach ($product as $k => $v) : ?>
                                <tr>
                                    <th><?= $k ?></th>
                                    <td><?= $v ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                        <!--
                        foreach () {
                        }
                        の記法で書いてもOkです。
                         -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>