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
    <title>練習問題14-５</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4"></div>
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
                <div class="col-4"></div>
            </div>
        </div>
</body>

</html>
<?php
// エラーを削除する
unset($_SESSION['msg']['err']);
