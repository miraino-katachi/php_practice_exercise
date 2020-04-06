<?php
// セッションをスタートする。
session_start();
// セッションIDをリクエストのたびに更新する。
session_regenerate_id();

// エラーメッセージがあれば削除する
if (isset($_SESSION['err']['msg'])) {
    unset($_SESSION['err']);
}

// アップロードされたファイルを保存するディレクトリ
$path = __DIR__ . '/images/';

// ディレクトリ内のファイルを配列で取得
$tmp = scandir($path);

// 「.」から始まるアイルを削除して、通常ファイルのみを取得する
$files = [];
foreach ($tmp as $v) {
    if (!preg_match('/^\./', $v) && is_file('./images/' . $v)) {
        $files[] = $v;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>練習問題10-3</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <div class="slide-wrapper">
        <h2 class="slide-title">アップロードされた画像の一覧</h2>
        <div class="change-btn-wrapper">
            <div class="change-btn prev-btn">← 前へ</div>
            <div class="change-btn next-btn">次へ →</div>
        </div>
        <ul class="slides">
            <?php for ($i = 0; $i < count($files); $i++) : ?>
                <li class="slide<?php if ($i == 0) echo ' active' ?>"><img src="./images/<?= $files[$i] ?>"></li>
            <?php endfor ?>
        </ul>
        <div class="index-btn-wrapper">
            <?php for ($i = 1; $i <= count($files); $i++) : ?>
                <div class="index-btn"><?= $i ?></div>
            <?php endfor ?>
        </div>

        <p><a href="./">←もどる</a></p>

    </div>
    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>