<?php
/**
 * 文字列の長さが制限以内かどうかを調べます。
 *
 * @param string $str 文字列
 * @param int $limit 制限文字数
 * @return boolean
 */
function isLengthWithinLimit($str, $limit) {
    if (mb_strlen($str) > $limit) {
        return false;
    }
    return true;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題05-7</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        判定結果
                    </div>
                    <div class="card-body">
                        <?php if (isLengthWithinLimit($_POST['str'], 50)) : ?>
                            入力された文字列は50文字以内です。
                        <?php else : ?>
                            入力された文字列は51文字以上あります。
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>