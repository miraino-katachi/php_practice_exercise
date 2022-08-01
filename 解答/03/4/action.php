<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題03-4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p>お客様が選ばれたのは<b>
                            <?php
                            switch ($_POST['menu']) {
                                case 1:
                                    echo 'ラーメン';
                                    break;
                                case 2:
                                    echo 'チャーシュー麺';
                                    break;
                                case 3:
                                    echo 'こってりラーメン';
                                    break;
                                case 4:
                                    echo '味玉ラーメン';
                                    break;
                                case 5:
                                    echo '味噌ラーメン';
                                    break;
                                case 6:
                                    echo '特製ラーメン';
                                    break;
                                default:
                                    echo 'メニューが選ばれていません。';
                            }
                            ?>
                            </b>です。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>