<?php
// セッションを開始する
session_start();
session_regenerate_id();

// エラーがなかったらトップページにリダイレクトする
if (!isset($_SESSION['msg']['err'])) {
    header('Location: ./');
    exit;
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題14-5</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        エラーが発生しました
                    </div>
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            <p><?= $_SESSION['msg']['err'] ?></p>
                        </div>
                        <a href="./logout.php" class="btn btn-danger">もどる</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<?php
// エラーを削除する
unset($_SESSION['msg']['err']);
