<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題03-2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p>
                            <?php
                            if ($_POST['num'] == 100) {
                                echo '満点です！';
                            } elseif ($_POST['num'] >= 80 && $_POST['num'] < 100) {
                                echo '優秀です！';
                            } elseif ($_POST['num'] >= 70 && $_POST['num'] < 80) {
                                echo 'まずまずです。';
                            } elseif ($_POST['num'] >= 60 && $_POST['num'] < 70) {
                                echo '合格です。';
                            } else {
                                echo '残念でした、次回は頑張りましょう！';
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>