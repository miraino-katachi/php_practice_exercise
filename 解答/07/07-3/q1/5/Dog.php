<?php

// PHP練習問題. 07-3クラスI
// 設問1.	クラスの作成（１）
// (5)	Dog クラスに次の内容を追加・修正し、その内容を確認できるプログラムを作成しなさい。

/**
 * Dogクラス
 */
class Dog
{
    /** @var string $name 犬の名前 */
    private $name;

    /** @var int $age 犬の年齢 */
    private $age;

    /** @var string 犬の種類 */
    private $type;

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
     * @return void
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * 犬の種類を設定します。
     *
     * @param String $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
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
        echo '<p>名前は' . $this->name . 'です。年齢は' . $this->age . '歳です。犬種は' . $this->type . 'です。</p>';
    }
}
