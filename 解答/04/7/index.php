<?php
$poroduct = [
    'product_name' => 'みかん',
    'production_area' => '愛媛県',
    'quality' => '優',
    'price' => 3000,
];
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題04-7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <?php foreach ($poroduct as $k => $v) : ?>
                                <tr>
                                    <th><?= $k ?></th>
                                    <td><?= $v ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                        <!--
                        foreach () {
                        }
                        の記法で書いてもOkです。
                         -->
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

</body>

</html>