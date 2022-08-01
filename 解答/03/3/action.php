<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題03-3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <?php
                            if ($_POST['kokugo'] >= 80 && $_POST['sansu'] >= 80) {
                                echo '素晴らしいです！';
                            } elseif ($_POST['kokugo'] >= 80 || $_POST['sansu'] >= 80) {
                                echo '良しとしましょう！';
                            } else {
                                echo 'まあ、いいでしょう・・・';
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>