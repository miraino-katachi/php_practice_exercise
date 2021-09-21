<?php

class SmartPhone extends Computer
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        parent::__construct('スマートフォン');
    }

    /**
     * 入力処理
     *
     * @return void
     */
    public function input()
    {
        echo '<p>タッチパネルディスプレイをタップして操作</p>';
    }

    /**
     * 出力処理
     *
     * @return void
     */
    public function output()
    {
        echo '<p>タッチパネルディスプレイに出力</p>';
    }
}
