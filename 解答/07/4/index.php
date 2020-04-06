<?php
$datetime = new DateTime();

/**
 * DateTime::format('w')で得られる曜日の値から、日本語の曜日を取得します。
 *
 * @param integer $num DateTime::format('w')で得られる曜日の値
 * @return string 日本語の曜日の文字列
 */
function getWeekday($num)
{
    switch ($num) {
        case 0:
            $weekday = '日曜日';
        break;
        case 1:
            $weekday = '月曜日';
        break;
        case 2:
            $weekday = '火曜日';
        break;
        case 3:
            $weekday = '水曜日';
        break;
        case 4:
            $weekday = '木曜日';
        break;
        case 5:
            $weekday = '金曜日';
        break;
        case 6:
            $weekday = '土曜日';
        break;
        default:
        $weekday = '';
    }
    return $weekday;
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題07-4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-border">
                            <tr>
                                <th>現在日時</th>
                                <td><?= $datetime->format('Y年m月d日 H時i分s秒') ?></td>
                            </tr>
                            <tr>
                                <th>今日の曜日</th>
                                <td><?= getWeekday($datetime->format('w')) ?></td>
                            </tr>
                            <tr>
                                <th>日本標準時</th>
                                <td>
                                    <?php
                                    $datetime->setTimezone(new DateTimeZone('Asia/Tokyo'));
                                    echo $datetime->format('Y年m月d日 H時i分s秒');
                                    ?>
                                </td>

                                </td>
                            </tr>
                            <tr>
                                <th>世界標準時</th>
                                <td>
                                    <?php
                                    $datetime->setTimezone(new DateTimeZone('UTC'));
                                    echo $datetime->format('Y年m月d日 H時i分s秒');
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>