<?php
// 日本標準時の現在日付を取得
$dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$date = $dt->format('Y-m-d');
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題08-2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-8">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>