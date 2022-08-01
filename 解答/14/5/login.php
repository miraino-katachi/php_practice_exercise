<?php
// セッションを開始する
session_start();
session_regenerate_id();

// 必要なファイルの読み込み
require_once('./class/config/Config.php');
require_once('./class/util/SaftyUtil.php');
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
        <div class="row my-3 justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">ログイン</div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['msg']['err'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['msg']['err']  ?>
                            </div>
                        <?php endif ?>
                        <form action="./login_action.php" method="post">
                            <input type="hidden" name="token" value="<?= SaftyUtil::generateToken() ?>">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text" name="email" value="<?php if (isset($_SESSION['login']['email'])) echo $_SESSION['login']['email'] ?>" class="form-control" id="emal">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="ログイン" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>