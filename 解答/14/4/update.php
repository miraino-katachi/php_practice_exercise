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
    header('Location: ./user_add.php');
    exit;
}

// $_FILESが存在しない、もしくは、アップロード時にエラーが発生したとき
if (!isset($_FILES['csv_file']) || $_FILES['csv_file']['error'] > 0) {
    $_SESSION['msg']['err']  = Config::MSG_UPLOAD_FAILURE;
    header('Location: ./upload.php');
    exit;
}

// アップロードされたCSVファイルを開く
// 関数の前に「@」をつけることでエラーが表示されなくなります（対応していない関数もあります）。
if (!$fp = @fopen($_FILES['csv_file']['tmp_name'], 'r')) {
    // ファイルのオープンに失敗したとき
    $_SESSION['msg']['err']  = Config::MSG_UPLOAD_FAILURE;
    header('Location: ./upload.php');
    exit;
}

try {
    // インスタンス生成
    $db = new TodoItems();

    // トランザクション開始
    // 複数のupdateが行われるので、エラーが発生したときにはすべてのトランザクションをロールバックします。
    // アップデートされているレコードとされていないレコードが混在しないようにするためです。
    $db->begin();

    // 開いたCSVファイルを1行ずつ読み込む
    while (($buf = fgetcsv($fp)) !== false) {
        // アップデート実行
        // $bufにはCSVから読み込んだ項目が配列として代入されている
        $db->update($buf[0], $buf[1], mb_convert_encoding($buf[2], 'UTF-8', 'SJIS-win'), $buf[3]);
    }

    // トランザクションをコミット
    $db->commit();

    // トップページへリダイレクトする
    header('Location: ./');
    exit;
} catch (Exception $e) {
    var_dump($e);
    // echo $e->getMessage();
    exit;
}
