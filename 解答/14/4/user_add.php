<?php
// セッションを開始する
session_start();
session_regenerate_id();

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
            <div class="col-6">
                <div class="card">
                    <div class="card-header">新規ユーザー登録</div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['msg']['err'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['msg']['err']  ?>
                            </div>
                        <?php endif ?>
                        <form action="./user_add_action.php" method="post">
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
                                <label for="name" class="form-label">お名前</label>
                                <input type="text" name="name" value="<?php if (isset($_SESSION['login']['name'])) echo $_SESSION['login']['name'] ?>" class="form-control" id="name">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="登録" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>