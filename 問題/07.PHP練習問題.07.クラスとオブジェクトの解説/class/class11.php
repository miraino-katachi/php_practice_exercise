<?php

// インターフェイス
// インターフェイスは、それ自体は中身は空っぽで、継承先のクラスで中身を実装します。
// 「こういうメソッドを作って実装してくださいね」という、クラスの「設計図」みたいなものです。
// 抽象クラスと違うところは、
// クラスは1つのクラスからしか継承できない
// インターフェイスは、複数のインターフェイスを継承してクラスを実装することができる
// という点です。

// インターフェイスはinterfaceを使って定義します。

/**
 * 音楽プレーヤーのインターフェイス
 */
interface AudioInterface
{
    // インターフェイスのメソッドは、中身を実装しません。
    // アクセス修飾子はpublicにしなければなりません。

    /**
     * 音楽を再生します。
     *
     * @return string
     */
    public function play();

    /**
     * 音楽を止めます。
     *
     * @return void
     */
    public function stop();
}

// もう一つインターフェイスを作ります。

/**
 * 電話機のインターフェイス
 */
interface PhoneInterface
{
    /**
     * 電話をかけます。
     *
     * @return string
     */
    public function call();

    /**
     * 電話を切ります。
     *
     * @return string
     */
    public function hungUp();
}

// 2つのインターフェイスを実装するクラスを作ります。
// インターフェイスを継承する場合は、implementsというキーワードを使います。

/**
 * スマートフォンクラス
 */
class SmartPhone implements AudioInterface, PhoneInterface
{
    /**
     * 音楽を再生します。
     *
     * @return string
     */
    public function play()
    {
        return '音楽を再生します。';
    }

    /**
     * 音楽を止めます。
     *
     * @return void
     */
    public function stop()
    {
        return '音楽を止めました。';
    }

    /**
     * 電話をかけます。
     *
     * @return string
     */
    public function call()
    {
        return '電話をかけます。';
    }

    /**
     * 電話を切ります。
     *
     * @return string
     */
    public function hungUp()
    {
        return '電話を切りました。';
    }
}

// 機能を実装したクラスを使います。
$smart_phone = new SmartPhone();

echo $smart_phone->play();

echo '<br>==========</br>';

echo $smart_phone->stop();

echo '<br>==========</br>';

echo $smart_phone->call();

echo '<br>==========</br>';

echo $smart_phone->hungUp();
