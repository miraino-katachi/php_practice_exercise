<?php
// セッションをスタートする。
session_start();
// セッションIDをリクエストのたびに更新する。
session_regenerate_id();

// エラー時のメッセージ
$msg = 'アップロードに失敗しました。';

// アップロードされたファイルを保存するディレクトリ
$path = __DIR__ . '/images/';

// アップロードされたファイルを、PC上のファイル名で保存する
if (!isset($_FILES['image_file']) || $_FILES['image_file']['error'] > 0) {
    // $_FILESが存在しない、もしくは、アップロード時にエラーが発生したとき
    $_SESSION['err']['msg'] = $msg;
    header('Location: ./');
    exit;
}

// アップロードファイルを指定ディレクトリに移動させる
if (!move_uploaded_file($_FILES['image_file']['tmp_name'], $path . $_FILES['image_file']['name'])) {
    // 移動に失敗したとき
    $_SESSION['err']['msg'] = $msg;
    header('Location: ./');
    exit;
}

// 全て成功したとき
header('Location: ./show.php');
exit;
