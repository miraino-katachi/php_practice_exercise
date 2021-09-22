<?php

/**
 * 携帯電話クラス
 */
class CellPhone implements IPhone, IMailer, IComputer
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

    /**
     * メールを送信します。
     *
     * @return void
     */
    public function sendMail()
    {
        echo '<p>メールを送信する</p>';
    }

    /**
     * メールを受信します。
     *
     * @return void
     */
    public function receiveMail()
    {
        echo '<p>メールを受信する</p>';
    }

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
