<?php
// セッションをスタートする。
session_start();
// セッションIDをリクエストのたびに更新する。
session_regenerate_id();

// 合計金額
$total = 0;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題06 カートの練習</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
        .num {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>商品名</th>
                                <th class="num">価格</th>
                                <th class="num">注文数</th>
                                <th>小計</th>
                                <th></th>
                            </thead>
                            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
                            <tbody>
                                <?php foreach ($_SESSION['cart'] as $k => $v) : ?>
                                    <form method="post" action="./cart_del.php">
                                        <tr>
                                            <td>
                                                <?= $v['product_name'] ?>
                                                <input type="hidden" name="product_name" value="<?= $v['product_name'] ?>">
                                            </td>
                                            <td class="num">
                                                <?= $v['price'] ?>円
                                                <input type="hidden" name="price" value="<?= $v['price'] ?>">
                                            </td>
                                            <td class="num">
                                                <?= $v['num'] ?>
                                                <input type="hidden" name="num" value="<?= $v['num'] ?>">
                                            </td>
                                            <td>
                                                <?php
                                                // 小計金額
                                                $sum = $v['price'] * $v['num'];
                                                // 合計金額に小計を加算する。
                                                $total += $sum;
                                                // 小計を表示する。
                                                echo $sum . '円';
                                                ?>
                                            </td>
                                            <td>
                                                <input type="hidden" name="id" value="<?= $k ?>">
                                                <input type="submit" value="削除" class="btn btn-primary">
                                            </td>
                                        </tr>
                                    </form>
                                <?php endforeach ?>
                            </tbody>
                            <?php endif ?>
                        </table>
                        <p>合計金額：<?= $total ?>円</p>
                        <p><a href="./cart_del_all.php">カートを空にする</a></p>
                        <p><a href="./">戻る</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>