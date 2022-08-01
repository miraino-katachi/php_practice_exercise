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
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題05-6</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
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
        </div>
    </div>
</body>

</html>