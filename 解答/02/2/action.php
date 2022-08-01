<?php
// POSTされた値を変数に入れます。
$familyName = $_POST['family_name'];
$lastName = $_POST['last_name'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題02-2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <!-- 変数の値を結合（文字列結合）して表示します。 -->
                        <p>あなたのお名前は<?= $familyName . ' ' . $lastName ?>さんですね？</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>