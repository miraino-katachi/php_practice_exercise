<?php
// セッションを開始する
session_start();
session_regenerate_id();

// 必要なファイルを読み込む
require_once('./class/db/Base.php');
require_once('./class/db/Users.php');

// ログインの情報をセッションに保存する
$_SESSION['login'] = $_POST;

try {
    // ユーザーテーブルクラスのインスタンスを生成する
    $db = new Users();

    // ログイン情報からユーザーを検索
    $user = $db->getUser($_POST['email'], $_POST['password']);

    // ログイン不可のとき
    if (empty($user)) {
        // エラーメッセージをセッションに保存して、リダイレクトする
        $_SESSION['err_msg'] = 'メールアドレス、または、パスワードに誤りがあります。';
        header('Location: ./login.php');
        exit;
    }

    // ユーザー情報をセッションに保存する
    $_SESSION['user'] = $user;

    // エラーメッセージを削除して、index.phpにリダイレクト
    unset($_SESSION['err_msg']);
    header('Location: ./');
    exit;
} catch (Exception $e) {
    // var_dump($e);
    // echo $e->getMessage();
    // 例外が発生したときは、エラーメッセージをセッションに保存して、リダイレクトする。
    $_SESSION['err_msg'] = '申し訳ございません。エラーが発生しました。';
    header('Location: ./login.php');
    exit;
}
