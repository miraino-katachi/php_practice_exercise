<?php
// セッションをスタートする。
session_start();
// セッションIDをリクエストのたびに更新する。
session_regenerate_id();

// POSTされてきた値を、そのままセッションに保存する。
$_SESSION['cart'][] = $_POST;

// index.phpへリダイレクトする。
header('location: ./');
exit;
