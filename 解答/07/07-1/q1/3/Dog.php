<?php

/**
 * Dogクラス
 */
class Dog
{
    /** @var string $name 犬の名前 */
    private $name;

    /** @var int $age 犬の年齢 */
    private $age;

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
     * 年齢を設定します。
     *
     * @param int $age
     * @return void
     */
    public function setAge($age)
    {
        $this->age = $age;
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

    /**
     * プロフィールを表示します。
     *
     * @return void
     */
    public function showProfile()
    {
        echo '<p>名前は' . $this->name . 'です。年齢は' . $this->age . '歳です。</p>';
    }
}
