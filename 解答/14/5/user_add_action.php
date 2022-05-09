<?php
// セッションを開始する
session_start();
session_regenerate_id();

// 必要なファイルを読み込む
require_once('./class/config/Config.php');
require_once('./class/db/Base.php');
require_once('./class/db/Users.php');
require_once('./class/util/SaftyUtil.php');

// ワンタイムトークンのチェック
if (!SaftyUtil::isValidToken($_POST['token'])) {
    // エラーメッセージをセッションに保存して、リダイレクトする
    $_SESSION['msg']['err']  = Config::MSG_INVALID_PROCESS;
    header('Location: ./user_add.php');
    exit;
}

// サニタイズを行う
$post = SaftyUtil::sanitize($_POST);

// フォームから送信された情報をセッションに保存する
$_SESSION['login'] = $_POST;

try {
    // ユーザーテーブルクラスのインスタンスを生成する。
    $db = new Users();

    // レコードのインサート
    $ret = $db->addUser($post['email'], $post['password'], $post['name']);
    if (!$ret) {
        // エラーメッセージをセッションに保存して、リダイレクトする
        $_SESSION['msg']['err']  = Config::MSG_USER_DUPLICATE;
        header('Location: ./user_add.php');
        exit;
    }

    // 正常終了したときは、ログイン情報とエラーメッセージを削除して、index.phpにリダイレクトする。
    unset($_SESSION['login']);
    unset($_SESSION['msg']['err'] );
    header('Location: ./login.php');
    exit;
} catch (Exception $e) {
    // エラーメッセージをセッションに保存してエラーページにリダイレクト
    $_SESSION['msg']['err'] = Config::MSG_EXCEPTION;
    header('Location: ./error.php');
    exit;
}
