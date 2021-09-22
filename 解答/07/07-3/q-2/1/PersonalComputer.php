<?php

/**
 * パーソナルコンピュータクラス
 */
class PersonalComputer extends Computer
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        parent::__construct('パーソナルコンピュータ');
    }

    /**
     * 入力処理
     *
     * @return void
     */
    public function input()
    {
        echo '<p>キーボード・マウスで入力</p>';
    }

    /**
     * 出力処理
     *
     * @return void
     */
    public function output()
    {
        echo '<p>ディスプレイに出力</p>';
    }
}
