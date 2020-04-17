<?php
// セッションを開始する
session_start();
session_regenerate_id();

// 必要なファイルを読み込む
require_once('./class/db/Base.php');
require_once('./class/db/Users.php');

// フォームから入力した情報をセッションに保存する
$_SESSION['login'] = $_POST;

try {
    // ユーザーテーブルクラスのインスタンスを生成する。
    $db = new Users();

    // レコードのインサート
    $ret = $db->addUser($_POST['email'], $_POST['password'], $_POST['name']);
    if (!$ret) {
        // エラーメッセージをセッションに保存して、リダイレクトする
        $_SESSION['err_msg'] = '既に同じメールアドレスが登録されています。';
        header('Location: ./user_add.php');
        exit;
    }

    // 正常終了したときは、ログイン情報とエラーメッセージを削除して、index.phpにリダイレクトする。
    unset($_SESSION['login']);
    unset($_SESSION['err_msg']);
    header('Location: ./login.php');
    exit;
} catch (Exception $e) {
    var_dump($e);
    // echo $e->getMessage();
    // 例外が発生したときは、エラーメッセージをセッションに保存して、リダイレクトする。
    $_SESSION['err_msg'] = '申し訳ございません。エラーが発生しました。';
    header('Location: ./user_add.php');
    exit;
}
