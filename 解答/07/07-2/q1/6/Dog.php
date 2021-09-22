<?php

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
