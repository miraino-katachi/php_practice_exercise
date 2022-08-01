<?php
// 必要なファイルを読み込む
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try {
    // インスタンス生成
    $db = new TodoItems();
    // レコード抽出
    $list = $db->selectAll();
} catch (Exception $e) {
    var_dump($e);
    // echo $e->getMessage();
    exit;
}

// CSVファイルを書き込みモードで開く
$fp = fopen('./work.csv', 'w');

$b = true;

// 文字列をSJIS-winに変換して、ファイルに書き込む
foreach ($list as $val) {
    foreach ($val as $k => $v) {
        if ($k == 'todo_item') {
            $val[$k] = mb_convert_encoding($v, 'SJIS-win', 'UTF-8');
        }
    }
    if (fputcsv($fp, $val, ',', '"') === false) {
        $b = false;
        break;
    }
}

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
    <title>練習問題12-1</title>
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