<?php
$menu = [
    'Aランチ',
    'Bランチ',
    'Cランチ',
    '唐揚げ定食',
    'とんかつ定食',
    'エビフライ定食',
    'オムライス',
    'カレーライス',
    'ごはん大',
    'ごはん小',
    'ビール',
    '烏龍茶',
];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題04-3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        メニュー
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <?php
                            foreach ($menu as $k => $v) {
                            ?>
                                <tr>
                                    <td><?= $k ?></td>
                                    <td><?= $v ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                        <!--
                        foreach () :
                        endforeach
                        の記法で書いてもOkです。
                         -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>