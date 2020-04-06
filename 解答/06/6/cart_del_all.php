<?php
// セッションをスタートする。
session_start();
// セッションIDをリクエストのたびに更新する。
session_regenerate_id();

// カートを空にする。
unset($_SESSION['cart']);

// cart_show.phpへリダイレクトする。
header('location: ./cart_show.php');
exit;
