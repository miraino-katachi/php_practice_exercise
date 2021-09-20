<?php

// PHP練習問題. 07-3クラスI
// 設問1.	クラスの作成（１）
// (1)	以下のプロパティ・メソッドを持つDog クラス(Dog.php）を作成しなさい。

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
