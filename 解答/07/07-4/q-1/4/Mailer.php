<?php

/**
 * Mailerクラス
 */
class Mailer implements IMailer
{
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
}
