<?php

// PHP練習問題. 07-2クラスII
// 設問1.	クラスの継承
// (6)	Dogは”ワンワン”、Catは”ニャー”と表示するように、それぞれのクラスでspeak()メソッドをオーバーライドしなさい。
// また(5)のプログラムを実行し、オーバーライドの結果を確認しなさい。

/**
 * Dogクラス
 */
class Dog extends Animal
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
     * "トコトコ"という文字列を表示します。
     *
     * @return void
     */
    public function run()
    {
        echo '<p>トコトコ</p>';
    }

    /**
     * "ワンワン"と表示します。
     *
     * @return void
     */
    public function speak()
    {
        echo '<p>ワンワン</p>';
    }
}