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
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

// エラーメッセージをクリア
unset($_SESSION['msg']['err']);

try {
    // インスタンス生成
    $db = new TodoItems();

    // レコード抽出
    $list = $db->selectAll();
} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error.php');
    exit;
}

// 書き込み成功/失敗フラグ
$b = true;

// CSVファイルを書き込みモードで開く
// 関数の前に「@」をつけることでエラーが表示されなくなります（対応していない関数もあります）。
if (!$fp = @fopen('./work.csv', 'w')) {
    $b = false;
} else {
    // 文字列をSJIS-winに変換して、ファイルに書き込む
    foreach ($list as $val) {
        foreach ($val as $k => $v) {
            if ($k == 'todo_item') {
                $val[$k] = mb_convert_encoding($v, 'SJIS-win', 'UTF-8');
            }
        }
        if (@fputcsv($fp, $val, ',', '"') === false) {
            $b = false;
            break;
        }
    }
}

// フラグによる結果判定
if ($b) {
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
    <title>練習問題14-５</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p><?= $msg ?></p>
                        <a href="./">もどる</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    </div>
</body>

</html>