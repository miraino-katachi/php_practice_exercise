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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">TODOリストの期限日で検索</div>
                    <div class="card-body">
                        <form action="./show.php" method="post">
                            <div class="form-group">
                            <label for="date">検索日</label>
                                <input type="text" name="date" value="<?= $today ?>" class="form-control" id="date1" >
                            </div>
                            <input type="submit" value="検索" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>