<?php

/**
 * コンピュータインターフェイス
 */
interface IComputer
{
    /**
     * ゲームをします。
     *
     * @return void
     */
    public function playGame();

    /**
     * ウェブを閲覧します。
     *
     * @return void
     */
    public function browseWeb();
}
