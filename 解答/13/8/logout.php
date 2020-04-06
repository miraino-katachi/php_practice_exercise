<?php
// セッションを開始する
session_start();
session_regenerate_id();

// セッションに保存されているユーザー情報を削除する
unset($_SESSION['user']);

// login.phpへリダイレクト
header('Location: ./login.php');
exit;
