<?php

/**
 * ラーメンクラスです。
 */
class Noodle extends Menu
{
    /** @var string 麺の硬さ */
    protected $noodleHardness;

    /**
     * コンストラクタ
     *
     * @param string $category メニューのカテゴリー
     * @param string $menu メニュー
     * @param integer $price 値段
     * @param string $noodlesHardness 麺の硬さ
     */
    public function __construct($category, $menu, $price, $noodleHardness)
    {
        // 親コンストラクタの呼び出し
        parent::__construct($category, $menu, $price);

        // Noodleクラスの麺の硬さプロパティに麺の硬さを代入する
        $this->noodleHardness = $noodleHardness;
    }

    /**
     * クラス変数の内容を連想配列で返却します。
     * 親クラスのメソッドをオーバーライド（上書き）しています。
     *
     * @return array 連想配列
     */
    public function getData()
    {
        $a = [
            'category' => $this->category,
            'menu' => $this->menu,
            'price' => $this->price,
            'noodleHardness' => $this->noodleHardness,
        ];
        return $a;
    }
}
