<?php
// セッションをスタートする。
session_start();
// セッションIDをリクエストのたびに更新する。
session_regenerate_id();

$_SESSION['str'] = $_POST['str'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題06-1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        入力された文字は
                    </div>
                    <div class="card-body">
                        <p><?= $_POST['str'] ?></p>
                        <p><a href="./">戻る</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>