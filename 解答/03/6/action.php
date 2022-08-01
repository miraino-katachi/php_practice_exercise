<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題03-6</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p><?= $_POST['num'] ?>回ループします。ただし、奇数回は表示しません。</p>
                        <ul>
                            <?php
                            for ($i = 1; $i <= $_POST['num']; $i++) {
                                if ($i % 2 == 1) {
                                    continue;
                                }
                                echo '<li>' . $i . '回目</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>