<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題01-2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p>id:
                            <?php
                            echo $_GET['id'];
                            ?>
                        </p>
                        <p>name:
                            <?php
                            echo $_GET['name'];
                            ?>
                        </p>
                        <!-- 下記の書き方もできます -->
                        <!-- <p>id:<?= $_GET['id'] ?></p> -->
                        <!-- <p>name:<?= $_GET['name'] ?></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>