<?php
$str = $_POST['str'];

// 文字列の長さ
$len = mb_strlen($str);

// 文字列から「0番目」の文字を1文字取得する
$firstChar = mb_substr($str, 0, 1);

// 文字列から「文字列の一番最後の文字」を1文字取得する
// 一番最後の文字は、「文字列の長さ - 1」である
$lastChar = mb_substr($str, $len - 1, 1);
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題05-3</title>
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
                            <tr>
                                <th>文字数</th>
                                <th>最初の文字</th>
                                <th>最後の文字</th>
                            </tr>
                            <tr>
                                <td><?= $len ?></td>
                                <td><?= $firstChar ?></td>
                                <td><?= $lastChar ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>