<?php
// セッションをスタートする。
session_start();
// セッションIDをリクエストのたびに更新する。
session_regenerate_id();

// 指定インデックスのセッションのカートを削除する。
unset($_SESSION['cart'][$_POST['id']]);

// セッションのカートの要素数が0だったら、セッションのカートを削除する。
if (count($_SESSION['cart']) == 0) {
    unset($_SESSION['cart']);
}

// cart_show.phpへリダイレクトする。
header('location: ./cart_show.php');
exit;
