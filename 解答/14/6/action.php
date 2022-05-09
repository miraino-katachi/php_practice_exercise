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
require_once('./class/util/SaftyUtil.php');

// ワンタイムトークンのチェック
if (!SaftyUtil::isValidToken($_POST['token'])) {
    // エラーメッセージをセッションに保存して、リダイレクトする
    $_SESSION['msg']['err']  = Config::MSG_INVALID_PROCESS;
    header('Location: ./');
    exit;
}

// サニタイズを行う
$post = SaftyUtil::sanitize($_POST);

// エラーメッセージをクリア
unset($_SESSION['msg']['err']);

try {
    // インスタンス生成
    $db = new TodoItems();

    // 削除チェックボックスにチェックが入っているとき
    if (isset($post['delete']) && $post['delete'] == "1") {
        // レコードを削除する
        $db->delete($post['id']);
    } else {
        // レコードをアップデートする
        $db->updateIsCompletedByID($post['id'], $post['is_completed']);
    }

    // index.phpへリダイレクトする
    header('Location: ./');
    exit;
} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error.php');
    exit;
}
