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
                        <?php if (isLengthWithinLimit($_POST['str'], 50)) : ?>
                            入力された文字列は50文字以内です。
                        <?php else : ?>
                            入力された文字列は50文字以上あります。
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>