<?php

/**
 * Phoneクラス
 */
class Phone implements IPhone
{
    /**
     * 電話をかけます。
     *
     * @return void
     */
    public function callPhone()
    {
        echo '<p>電話をかける</p>';
    }

    /**
     * 電話を受けます。
     *
     * @return void
     */
    public function receivePhone()
    {
        echo '<p>電話を受ける</p>';
    }
}
