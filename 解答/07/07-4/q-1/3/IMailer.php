<?php

/**
 * Mailerインターフェイス
 */
interface IMailer
{
    /**
     * メールを送信します。
     *
     * @return void
     */
    public function sendMail();

    /**
     * メールを受信します。
     *
     * @return void
     */
    public function receiveMail();
}
