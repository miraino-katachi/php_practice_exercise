<?php
// セッションを開始する
session_start();
session_regenerate_id();

// ログインしていないときは、login.phpへリダイレクト
if (empty($_SESSION['user'])) {
    header('Location: ./login.php');
    exit;
}

// 必要なファイルを読み込む
require_once('./class/config/Config.php');
require_once('./class/util/SaftyUtil.php');
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題14-4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        CSVファイルのアップロード
                    </div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['msg']['err'] )) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['msg']['err'] ?>
                            </div>
                        <?php endif ?>
                        <form method="post" action="./update.php" enctype="multipart/form-data">
                        <input type="hidden" name="token" value="<?= SaftyUtil::generateToken() ?>">
                            <div class="mb-3">
                                <label for="csv_file" class="form-label">CSVファイルを選択してください</label>
                                <input type="file" name="csv_file" id="csv_file" class="form-control-file">
                            </div>
                            <input type="submit" value="送信" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="./">←もどる</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>