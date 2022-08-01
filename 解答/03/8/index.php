<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題03-8</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <style>
        th,
        td {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <table class="table table-bordered my-3">
                    <?php
                    // 横方向（行）のループ。見出しの分を含めて10回ループします。
                    for ($row = 0; $row < 10; $row++) {
                    ?>
                        <tr>
                            <?php
                            // 縦方向（列）のループ。見出しの分も含めて10回ループします。
                            for ($col = 0; $col < 10; $col++) {
                                if ($col == 0 && $row == 0) {
                                    // 行と列のカウントが共に0だったら（つまり、左上のセルだったら）、何も表示しません。
                            ?>
                                    <th class="table-primary"></th>
                                <?php
                                } elseif ($row == 0) {
                                    // 行のカウントが0だったら（つまり、一番上のセルだったら）、行のカウントを表示します。
                                ?>
                                    <th class="table-primary"><?= $col ?></th>
                                <?php
                                } elseif ($col == 0) {
                                    // 列のカウントが0だったら（つまり、左端のセルだったら）、列のカウントを表示します。
                                ?>
                                    <th class="table-primary"><?= $row ?></th>
                                    <?php
                                } else {
                                    // 上のどれにも該当しなかったら、行と列のカウントを乗算します。
                                    $ret = $col * $row;
                                    if ($ret % 2 == 0) {
                                        // 乗算した結果が偶数なら、セルに背景色をつけます。
                                    ?>
                                        <td class="table-active"><?= $ret ?></td>
                                    <?php
                                    } else {
                                        // 乗算した結果が奇数なら、セルに背景色はつけません。
                                    ?>
                                        <td><?= $ret ?></td>
                                <?php
                                    }
                                }
                            }
                            ?>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>