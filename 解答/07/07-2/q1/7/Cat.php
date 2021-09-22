<?php

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

    /**
     * "ニャー"と表示します。
     *
     * @return void
     */
    public function speak()
    {
        echo '<p>ニャー</p>';
    }
}
