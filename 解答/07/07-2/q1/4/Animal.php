<?php

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
        echo '<p>名前は' . $this->name . 'です。年齢は' . $this->age . '歳です。';
    }
}
