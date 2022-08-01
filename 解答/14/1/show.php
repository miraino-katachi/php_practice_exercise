<?php
// データベースに接続するための文字列（DSN 接続文字列）
$dsn = 'mysql:dbname=php_work;host=localhost;charset=utf8';

// PDOクラスのインスタンスを作る
// 引数は、上記のDSN、データベースのユーザー名、パスワード
// XAMPPの場合はデフォルトでパスワードなし、MAMPの場合は「root」
$dbh = new PDO($dsn, 'root', 'root');

// SQL文（SQLインジェクションが起きるようにしています）
$sql = "select * from todo_items ";
$sql .= "where expiration_date='" . $_POST['date'] . "'";

// SQL文を実行する準備
$stmt = $dbh->prepare($sql);

// SQLを実行する
$stmt->execute();

// 連想配列でレコードを取得
$lists = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題14-1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderd">
                            <tr>
                                <th>期限日</th>
                                <th>TODO項目</th>
                            </tr>
                            <?php foreach ($lists as $list) : ?>
                                <tr>
                                    <td><?= $list['expiration_date'] ?></td>
                                    <td><?= $list['todo_item'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>