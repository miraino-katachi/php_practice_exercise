<?php

// PHP練習問題. 07-2クラスII
// 設問1.	クラスの継承
// (4)	DogクラスとCatクラスで共通するname/ageプロパティおよびshowProfile()メソッドをAnimalクラスとして取り出し、
// DogクラスとCatクラスはAnimalクラスを継承するように変更しなさい。
// また、変更後に(3)のプログラムを実行し、変更前と実行結果が変わらないことを確認しなさい。

/**
 * Animalクラス
 */
class Animal
{
    /** @var string $name 名前 */
    private $name;

    /** @var int $age 年齢 */
    private $age;

    /**
     * コンストラクタ
     *
     * @param string $name
     * @param int $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * プロフィールを表示します。
     *
     * @return void
     */
    public function showProfile()
    {
        echo '<p>名前は'.$this->name.'です。年齢は'.$this->age.'歳です。';
    }
}