<?php
// セッションをスタートする。
session_start();
// セッションIDをリクエストのたびに更新する。
session_regenerate_id();
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題10-2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        画像のアップロード
                    </div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['err']['msg'])) : ?>
                            <div class="alert alert-danger" role="alert">
                                画像のアップロードに失敗しました。
                            </div>
                        <?php endif ?>
                        <form method="post" action="./action.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="image_file" class="form-label">画像ファイルを選択してください</label>
                                <input type="file" name="image_file" id="image_file" class="form-control-file">
                            </div>
                            <input type="submit" value="送信" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="./show.php">一覧を見る→</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>