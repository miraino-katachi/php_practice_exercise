<?php
$numA = $_POST['num_a'];
$numB = $_POST['num_b'];
$result = $numA % $numB;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題02-7</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p>数字A ÷ 数字Bの余りは</p>
                        <p><?= $result ?></p>
                        <p>です</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>