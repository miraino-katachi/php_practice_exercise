<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題05-5</title>
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
                        <?php if (is_numeric($_POST['str'])) : ?>
                            入力されたのは数字です。
                        <?php else : ?>
                            入力されたのは数字ではありません。
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>