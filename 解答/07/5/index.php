<?php
// 現在日時を求める
$dt = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
$date = $dt->format('Y/m/d');
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題07-5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="./action.php" method="post">
                            <div class="form-group">
                                <label for="date">日付を入力してください</label>
                                <input type="text" name="date" id="date" value="<?= $date ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="period">期間（日）を入力してください</label>
                                <input type="text" name="period" id="period" class="form-control">
                            </div>
                            <div class="form-group form-check-inline">
                                <input type="radio" name="before_or_after" id="before_or_after1" value="前" class="form-check-input" checked>
                                <label for="before_or_after1" class="form-check-label">前</label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input type="radio" name="before_or_after" id="before_or_after2" value="後" class="form-check-input">
                                <label for="before_or_after2" class="form-check-label">後</label>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="送信" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>