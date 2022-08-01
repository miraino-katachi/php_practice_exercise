<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題03-7</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p><?= $_POST['num'] ?>回ループします。</p>
                        <table class="table table-bordered my-3">
                            <?php
                            $i = 1;
                            while (true) {
                                if ($i > $_POST['num']) {
                                    break;
                                }
                                echo '<tr>';
                                echo '<td>' . $i . '回目</td>';
                                echo '</tr>';
                                $i++;
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>