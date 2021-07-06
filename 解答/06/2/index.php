<?php
// セッションをスタートする。
session_start();
// セッションIDをリクエストのたびに更新する。
session_regenerate_id();

if (isset($_SESSION['count']) && isset($_GET['reset'])) {
    unset($_SESSION['count']);
}

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題06-2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card my-3">
                    <div class="card-header">
                        セッションを使ったカウンタ
                    </div>
                    <div class="card-body">
                        <p>
                            <?= $_SESSION['count'] ?>
                        </p>
                        <a href="./" class="btn btn-primary">カウント</a>
                        <a href="./?reset" class="btn btn-outline-primary">リセット</a>
                    </div>
                </div>
            </div>
            <div class="cols-md-4"></div>
        </div>
    </div>

</body>

</html>