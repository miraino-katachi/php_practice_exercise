<?php
// 必要なファイルを読み込む
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try {
    // インスタンス生成
    $db = new TodoItems();
    // インサート実行
    $db->insert($_POST['expiration_date'], $_POST['todo_item']);

    // 処理が完了したらトップページ（index.php）へリダイレクト
    header('Location: ./');
    exit;
} catch (Exception $e) {
    var_dump($e);
    // echo $e->getMessage();
    exit;
}
