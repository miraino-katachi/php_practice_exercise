<?php
// セッションを開始する
session_start();
session_regenerate_id();

// セッションに保存されているエラーメッセージを削除する
if(isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}

try {
    // 日付が正しいかどうか判断する
    if (!isDate($_POST['date'])) {
        // 日付が正しくないときは、例外をスローする
        throw new Exception('日付の形式が正しくありません');
    }
} catch (Exception $e) {
    $_SESSION['error']['msg'] = $e->getMessage();
    $_SESSION['error']['date'] = $_POST['date'];
    header('Location: ./');
    exit;
}

/**
 * 正しい日付かどうかを確認します
 *
 * @param string $str /区切りの日付の文字列
 * @return boolean
 */
function isDate($str)
{
    $d = explode('/', $str);
    // 要素数が3かどうかのチェック
    if (count($d) !== 3) {
        return false;
    }

    // 数値かどうかのチェック
    for ($i = 0; $i < count($d); $i++) {
        if (!is_numeric($d[$i]) || $i >= 3) {
            return false;
        }
    }

    return checkdate($d[1], $d[2], $d[0]);
}
?>
<!DOCTYPE html>
<html lang="練習問題09-2">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題09-2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">判定結果</div>
                    <div class="card-body">
                        正しい日付です
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>

</html>