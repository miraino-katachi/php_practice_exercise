<?php

/**
 * Phoneインターフェイス
 */
interface IPhone
{

    /**
     * 電話をかけます。
     *
     * @return void
     */
    public function callPhone();

    /**
     * 電話を受けます。
     *
     * @return void
     */
    public function receivePhone();
}
