<?php
// セッションを開始する
session_start();
session_regenerate_id();

// 必要なファイルを読み込む
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

// ログインしていないときは、login.phpへリダイレクト
if (empty($_SESSION['user'])) {
    header('Location: ./login.php');
    exit;
}

try {
    // todo_itemテーブルクラスのインスタンスを生成する
    $db = new TodoItems();
    // レコードを全件取得する（期限日の古いものから並び替える）
    $list = $db->selectAll();
} catch (Exception $e) {
    var_dump($e);
    // echo $e->getMessage();
    exit;
}

// 取得したレコードをCSVファイルとしてダウンロードさせる
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="work.csv"');

foreach ($list as $val) {
    foreach ($val as $k => $v) {
        // 配列のキーがtodo_itemのとき
        if ($k == 'todo_item') {
            // 文字コードをSJIS-winからUTF-8に変換する
            $val[$k] = mb_convert_encoding($v, 'SJIS-win', 'UTF-8');
        }
    }
    // 配列を「,」で結合して出力する
    echo implode(',', $val) . "\n";
}
