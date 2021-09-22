<?php

/**
 * Dogクラス
 */
class Dog
{
    /** @var string $name 犬の名前 */
    private $name;

    /**
     * 名前を設定します。
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 名前を表示します。
     *
     * @return void
     */
    public function showName()
    {
        echo '<p>' . $this->name . '</p>';
    }
}
