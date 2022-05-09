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
    $_SESSION['msg']['err'] = Config::MSG_INVALID_PROCESS;
    header('Location: ./');
}

// サニタイズを行う
$post = SaftyUtil::sanitize($_POST);

// エラーメッセージをクリア
unset($_SESSION['msg']['err']);

try {
    // インスタンス生成
    $db = new TodoItems();

    // インサート実行
    $db->insert($post['expiration_date'], $post['todo_item']);

    // 処理が完了したらトップページ（index.php）へリダイレクト
    header('Location: ./');
    exit;
} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error.php');
    exit;
}
