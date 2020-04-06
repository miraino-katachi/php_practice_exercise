<?php
// 「商品のリスト」の連想配列を作成する。
$poducts = [
    0 => [
        'product_name' => 'みかん',
        'price' => '300',
    ],
    1 => [
        'product_name' => 'りんご',
        'price' => '500',
    ],
    2 => [
        'product_name' => 'バナナ',
        'price' => '150',
    ],
];
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題06 カートの練習</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>商品名</th>
                                <th>価格</th>
                                <th>注文数</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <!-- 連想配列から要素を1件ずつ抜き出す -->
                                <?php foreach ($poducts as $v) : ?>
                                    <form method="post" action="./cart_add.php">
                                        <tr>
                                            <td>
                                                <?= $v['product_name'] ?>
                                                <input type="hidden" name="product_name" value="<?= $v['product_name'] ?>">
                                            </td>
                                            <td>
                                                <?= $v['price'] ?>円
                                                <input type="hidden" name="price" value="<?= $v['price'] ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="num" class="form-control" style="width: 3rem; text-align: right;">
                                            </td>
                                            <td>
                                                <input type="submit" value="カートに入れる" class="btn btn-primary">
                                            </td>
                                        </tr>
                                    </form>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <a href="./cart_show.php">カートを見る</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

</body>

</html>