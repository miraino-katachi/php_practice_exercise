<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題03-4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
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
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>