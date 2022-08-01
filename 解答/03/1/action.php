<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題03-1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <?php
                        if ($_POST['num'] >= 100) {
                            echo '100以上です！';
                        } else {
                            echo '100未満です！';
                        }
                        ?>
<!--
                        下記のように書くこともできます。
                        <?php if ($_POST['num'] >= 100) : ?>
                            100以上です！
                        <?php else : ?>
                            100未満です！
                        <?php endif ?>
                         -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>