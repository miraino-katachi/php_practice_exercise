<?php

/**
 * メニュークラスです。
 */
class Menu
{
    /** @var string メニューのカテゴリー */
    protected $category;

    /** @var string メニュー */
    protected $menu;

    /** @var integer 値段 */
    protected $price;

    /**
     * コンストラクタ
     *
     * @param string $category メニューのカテゴリー
     * @param string $menu メニュー
     * @param integer $price 値段
     */
    public function __construct($category, $menu, $price)
    {
        $this->category = $category;
        $this->menu = $menu;
        $this->price = $price;
    }

    /**
     * クラス変数の内容を連想配列で返却します。
     *
     * @return array 連想配列
     */
    public function getData()
    {
        $a = [
            'category' => $this->category,
            'menu' => $this->menu,
            'price' => $this->price,
        ];
        return $a;
    }
}

// Menhuクラスのインスタンスを作ります。
$menu = new Menu($_POST['category'], $_POST['menu'], $_POST['price']);

// Menuクラスのインスタンスから、クラス変数の内容を連想配列で取得します。
$data = $menu->getData();
?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習問題07-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-border">
                            <?php foreach ($data as $k => $v) : ?>
                                <tr>
                                    <th><?= $k ?></th>
                                    <td><?= $v ?></td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>