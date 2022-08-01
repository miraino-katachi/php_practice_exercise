<?php
// セッション開始
session_start();
session_regenerate_id();

// 日本標準時の現在日付を取得
$dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$date = $dt->format('Y-m-d');

// データベースに接続するための文字列（DSN 接続文字列）
$dsn = 'mysql:dbname=php_work;host=localhost;charset=utf8';

// PDOクラスのインスタンスを作る
// 引数は、上記のDSN、データベースのユーザー名、パスワード
// XAMPPの場合はデフォルトでパスワードなし、MAMPの場合は「root」
$dbh = new PDO($dsn, 'root', 'root');

// レコードを全件取得する（期限日の古いものから並び替える）
$sql = 'select * from todo_items order by expiration_date';

// SQL文を実行する準備
$stmt = $dbh->prepare($sql);

// SQLを実行する
$stmt->execute();

// 取得したレコードを連想配列として変数に代入する
$list = $stmt->fetchAll(PDO::FETCH_ASSOC);

// ワンタイムトークンを生成してセッションに保存する
$token = bin2hex(openssl_random_pseudo_bytes(32));
$_SESSION['token'] = $token;
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題14-3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">TODOリスト</div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['err_msg'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_SESSION['err_msg'] ?>
                            </div>
                        <?php endif ?>
                        <form action="./add.php" method="post">
                            <input type="hidden" name="token" value="<?= $token ?>">
                            <div class="row">
                                <div class="col-3">
                                    <input type="date" name="expiration_date" value="<?= $date ?>" id="expiration_date" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="text" name="todo_item" placeholder="TODO項目を入力してください" id="todo_item" class="form-control">
                                </div>
                                <div class="col-2">
                                    <input type="submit" value="追加" class="btn btn-primary mb-3">
                                </div>
                            </div>
                        </form>
                        <?php if (count($list) > 0) : ?>
                            <table class="table table-borderd">
                                <tr>
                                    <th>期限日</th>
                                    <th>TODO項目</th>
                                </tr>
                                <?php foreach ($list as $v) : ?>
                                    <tr>
                                        <td><?= $v['expiration_date'] ?></td>
                                        <td><?= $v['todo_item'] ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </table>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>