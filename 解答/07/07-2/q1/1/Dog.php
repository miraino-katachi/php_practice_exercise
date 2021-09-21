<?php

// PHP練習問題. 07-2クラスII
// 設問1.	クラスの継承
// (1)	以下のプロパティ・メソッドを持つDog クラスを作成しなさい。

/**
 * Dogクラス
 */
class Dog
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
        echo '<p>名前は'.$this->name.'です。年齢は'.$this->age.'です。';
    }

    /**
     * "トコトコ"という文字列を表示します。
     *
     * @return void
     */
    public function run()
    {
        echo '<p>トコトコ</p>';
    }
}