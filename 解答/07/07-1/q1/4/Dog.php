<?php

// PHP練習問題. 07-1クラスI
// 設問1.	クラスの作成（１）
// (3)	Dog クラスに次の内容を追加しなさい。
// また前問と同様に、追加した内容を確認できるプログラムをindex.phpに追記しなさい。

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
