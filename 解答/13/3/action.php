<?php
// 必要なファイルを読み込む
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try {
    // インスタンス生成
    $db = new TodoItems();

    // 削除チェックボックスにチェックが入っているとき
    if (isset($_POST['delete']) && $_POST['delete'] == "1") {
        // レコードを削除する
        $db->delete($_POST['id']);
    } else {
        // レコードをアップデートする
        $db->updateIsCompletedByID($_POST['id'], $_POST['is_completed']);
    }

    // index.phpへリダイレクトする
    header('Location: ./');
    exit;
} catch (Exception $e) {
    var_dump($e);
    // echo $e->getMessage();
    exit;
}
