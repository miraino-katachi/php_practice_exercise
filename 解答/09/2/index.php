<?php
// セッションを開始する
session_start();
session_regenerate_id();

if (isset($_SESSION['error'])) {
    // エラーが有ったとき
    $msg = $_SESSION['error']['msg'];
    $date = $_SESSION['error']['date'];
} else {
    // エラーがなかったとき、または、初回アクセス時
    $msg = '';
    $dt = new DateTime();
    $date = $dt->format('Y/m/d');
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
                    <div class="card-body">
                        <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $msg ?>
                        </div>
                        <?php endif ?>
                        <form action="./action.php" method="post">
                            <div class="form-group">
                                <label for="date">日付を入力してください</label>
                                <input type="text" name="date" value="<?=$date ?>" id="date" class="form-control">
                            </div>
                            <input type="submit" value="送信" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>