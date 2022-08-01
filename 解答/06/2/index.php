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
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題06-2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
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
        </div>
    </div>

</body>

</html>