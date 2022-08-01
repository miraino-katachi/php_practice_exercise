<?php
// 今日の日付のDateTimeオブジェクトを生成する
$dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));

// 今日の日付
$today = $dt->format('Y/m/d');
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
            <div class="col-4">
                <div class="card">
                    <div class="card-header">TODOリストの期限日で検索</div>
                    <div class="card-body">
                        <form action="./show.php" method="post">
                            <div class="mb-3">
                                <label for="date" class="form-label">検索日</label>
                                <input type="text" name="date" value="<?= $today ?>" class="form-control" id="date1">
                            </div>
                            <input type="submit" value="検索" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>