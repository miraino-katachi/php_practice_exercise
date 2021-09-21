<?php

/**
 * コンピュータクラス
 */
abstract class Computer
{
    /** @var string $type コンピュータの種類 */
    public $type;

    /**
     * コンストラクタ
     *
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * コンピュータの種類を表示します。
     *
     * @return void
     */
    public function showType()
    {
        echo '<p>コンピュータの種類:' . $this->type . '</p>';
    }

    /**
     * 入力処理
     *
     * @return void
     */
    abstract public function input();

    /**
     * 出力処理
     *
     * @return void
     */
    abstract public function output();

    /**
     * "インターネットで通信"と表示します。
     *
     * @return void
     */
    public function communication()
    {
        echo '<p>インターネットで通信</p>';
    }
}
