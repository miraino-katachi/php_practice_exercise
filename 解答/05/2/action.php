<?php
$num = $_POST['num'];

// 切り上げ
$ceil = ceil($num);

// 切り捨て
$floor = floor($num);

// 四捨五入
$round = round($num);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題05-2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>切り上げ</th>
                                <th>切り捨て</th>
                                <th>四捨五入</th>
                            </tr>
                            <tr>
                                <td><?= $ceil ?></td>
                                <td><?= $floor ?></td>
                                <td><?= $round ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>