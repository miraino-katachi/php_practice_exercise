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
