<?php
// DateTimeクラスのインスタンスを生成する。
$dt = new DateTime($_POST['date'], new DateTimeZone('Asia/Tokyo'));

// 期間（DateInterval）のインスタンスを生成する
$period = new DateInterval('P' . $_POST['period'] . 'D');

// 日付の計算を行う
switch ($_POST['before_or_after']) {
    case '前':
        $dt->sub($period);
        break;
    case '後':
        $dt->add($period);
        break;
    default:
        break;
}

// 日付のフォーマットを行う
$str = $_POST['date'] . 'の' . $_POST['period'] . '日' . $_POST['before_or_after'] . 'は';
$date = $dt->format('Y/m/d');
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題07-5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p><?= $str ?></p>
                        <p><?= $date ?></p>
                        <p>です</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>