<?php
// 必要なファイルを読み込む
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try {
    // 日本標準時の現在日付を取得
    $dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
    $date = $dt->format('Y-m-d');

    // todo_itemテーブルクラスのインスタンスを生成する
    $db = new TodoItems();
    // レコードを全件取得する（期限日の古いものから並び替える）
    $list = $db->selectAll();
} catch (Exception $e) {
    var_dump($e);
    // echo $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題13</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
        .complete {
            text-decoration: line-through;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">TODOリスト</div>
                    <div class="card-body">
                        <form action="./add.php" method="post">
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
                                    <th></th>
                                </tr>
                                <?php foreach ($list as $v) : ?>
                                    <tr>
                                        <td class="<?php if ($v['is_completed'] == 1) echo 'complete' ?>"><?= $v['expiration_date'] ?></td>
                                        <td class="<?php if ($v['is_completed'] == 1) echo 'complete' ?>"><?= $v['todo_item'] ?></td>
                                        <td>
                                            <form method="post" action="./action.php" class="form-inline">
                                                <input type="hidden" name="id" value="<?= $v['id'] ?>">
                                                <div class="form-check form-check-inline mb-3 mr-1">
                                                    <input type="radio" value="0" name="is_completed" id="camplete1" class="form-check-input" <?php if ($v['is_completed'] == 0) echo ' checked' ?>>
                                                    <label for="complete1" class="form-check-label">未完了</label>
                                                </div>
                                                <div class="form-check form-check-inline mb-3 mr-1">
                                                    <input type="radio" value="1" name="is_completed" id="complete2" class="form-check-input" <?php if ($v['is_completed'] == 1) echo ' checked' ?>>
                                                    <label for="complete2" class="form-check-label">完了</label>
                                                </div>
                                                <div class="form-check form-check-inline mb-3 mr-1">
                                                    <input type="checkbox" value="1" name="delete" id="delete" class="form-check-input">
                                                    <label for="delete" class="form-check-label">削除</label>
                                                </div>
                                                <input type="submit" value="実行" class="btn btn-primary mb-3">
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </table>
                            <a href="./csv.php" class="btn btn-outline-primary btn-sm">CSVファイルに変換</a>
                            <a href="./download.php" class="btn btn-outline-primary btn-sm">CSVファイルをダウンロード</a>
                            <a href="./upload.php" class="btn btn-outline-primary btn-sm">CSVファイルをアップロードして更新</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>