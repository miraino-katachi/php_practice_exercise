<?php
$fruits = ['みかん', 'りんご', 'メロン', 'バナナ', 'パイナップル'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題04-1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        果物のリスト
                    </div>
                    <div class="card-body">
                        <ul>
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                            ?>
                                <li><?= $fruits[$i] ?></li>
                            <?php
                            }
                            ?>
                            <!--
                            for文は、
                            <?php for ($i = 0; $i < 5; $i++) : ?>
                                <li><?= $fruits[$i] ?></li>
                            <?php endfor ?>
                            の記法で書いてもOKです。
                             -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>