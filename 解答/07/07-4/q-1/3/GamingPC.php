<?php

/**
 * ゲーミングPCクラス
 */
class GamingPC implements IComputer
{
    /**
     * ゲームをします
     *
     * @return void
     */
    public function playGame()
    {
        echo '<p>3Dゲームをする</p>';
    }

    /**
     * ウェブを閲覧します
     *
     * @return void
     */
    public function browseWeb()
    {
        echo '<p>ウェブを閲覧する</p>';
    }
}
