<?php
// ファイルを書き込みモードで開く。
$fp = fopen('./work.txt', 'w');
// POSTされてきたデータをテキストファイルに書き込む
if (fwrite($fp, $_POST['text'])) {
    $msg = '書き込みが完了しました。';
} else {
    $msg = '書き込みに失敗しました。';
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題11-1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p><?= $msg ?></p>
                        <a href="./">もどる</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>