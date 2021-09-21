<?php

/**
 * コンピュータクラス
 */
class Computer implements IComputer
{
    /**
     * ゲームをします。
     *
     * @return void
     */
    public function playGame()
    {
        echo '<p>ゲームをする</p>';
    }

    /**
     * ウェブを閲覧します。
     *
     * @return void
     */
    public function browseWeb()
    {
        echo '<p>ウェブを閲覧する</p>';
    }
}
