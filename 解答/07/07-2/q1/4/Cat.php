<?php

// PHP練習問題. 07-2クラスII
// 設問1.	クラスの継承
// (4)	DogクラスとCatクラスで共通するname/ageプロパティおよびshowProfile()メソッドをAnimalクラスとして取り出し、
// DogクラスとCatクラスはAnimalクラスを継承するように変更しなさい。
// また、変更後に(3)のプログラムを実行し、変更前と実行結果が変わらないことを確認しなさい。

/**
 * Catクラス
 */
class Cat extends Animal
{
    /**
     * コンストラクタ
     *
     * @param string $name
     * @param int $age
     */
    public function __construct($name, $age)
    {
        parent::__construct($name, $age);
    }

    /**
     * "スースー"という文字列を表示します。
     *
     * @return void
     */
    public function sleep()
    {
        echo '<p>スースー</p>';
    }
}