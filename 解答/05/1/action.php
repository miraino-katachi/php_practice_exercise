<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

// 最大値を求める
$max = max($num1, $num2, $num3);

// 最小値を求める
$min = min($num1, $num2, $num3);

// 平均値を求める
$ave = ave($num1, $num2, $num3);

/**
 * 3つの数の平均値を求めます。
 *
 * @param integer $num1
 * @param integer $num2
 * @param integer $num3
 * @return integer
 */
function ave($num1, $num2, $num3)
{
    // 3つの数を合計し、3で割って平均値を求めます（小数点以下四捨五入）。
    $ave = round(($num1 + $num2 + $num3) / 3);
    return $ave;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題05-1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>最大値</th>
                                <th>最小値</th>
                                <th>平均値</th>
                            </tr>
                            <tr>
                                <td><?= $max ?></td>
                                <td><?= $min ?></td>
                                <td><?= $ave ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>