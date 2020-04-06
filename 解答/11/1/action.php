<?php
// アップロードされたテキストファイルを読み込みモードで開く。
$fp = fopen($_FILES['text_file']['tmp_name'], 'r');
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題11-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <?php
                        // 開いたファイルを1行ずつ読み込む
                        while (($buffer = fgets($fp)) !== false) {
                            echo '<p>' . $buffer . '</p>';
                        }
                        ?>
                        <a href="./">もどる</a>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    </div>
</body>

</html>