<?php
/**
 * 日付が正しいかどうかを調べます。
 *
 * @param string $str 日付文字列（yyyy/mm/dd形式）
 * @return boolean
 */
function isDate($str) {
    $d = explode('/', $str);
    return checkdate($d[1], $d[2], $d[0]);
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題05-6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        判定結果
                    </div>
                    <div class="card-body">
                        <?php if (isDate($_POST['str'])) : ?>
                            入力されたのは正しい日付です。
                        <?php else : ?>
                            入力されたのは正しい日付ではありません。
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>