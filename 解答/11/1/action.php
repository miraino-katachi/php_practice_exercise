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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3 justify-content-center">
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
        </div>
    </div>
    </div>
</body>

</html>