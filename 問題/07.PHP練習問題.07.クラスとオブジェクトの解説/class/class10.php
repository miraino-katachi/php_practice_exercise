<?php

// 抽象クラス
// 抽象クラスは、それ自体は中身は空っぽで、継承先のクラスで中身を実装するためのものです。
// 「こういうメソッドを作って実装してくださいね」という、クラスの「設計図」みたいなものです。

/**
 * サンプルの抽象クラス
 */
abstract class AudioClass
{
    // 抽象クラスのメソッドは、中身を実装しません。

    /**
     * 音楽を再生します。
     *
     * @return string
     */
    abstract protected function play();

    /**
     * 音楽を止めます。
     *
     * @return void
     */
    abstract protected function stop();
}

/**
 * サンプルの抽象クラスを継承したサンプルクラス
 */
// class MusicPlayer extends AudioClass
// {
//     // スーパークラスで定義したメソッドを実装しないと怒られます。
// }

/**
 * サンプルの抽象クラスを継承したサンプルクラス
 */
class MusicPlayer extends AudioClass
{
    // 抽象クラスであるスーパークラスのメソッドを実装します。

    /**
     * 食べ物の名前を返却します。
     *
     * @return string
     */
    public function play()
    {
        return '音楽を再生します。';
    }

    /**
     * 飲み物の名前を返却します。
     *
     * @return void
     */
    public function stop()
    {
        return '音楽を止めます。';
    }
}

// 抽象クラスのインスタンスを生成しようとすると怒られます
// $obj = new AudioClass();

// 抽象クラスを継承したクラスは、通常通り、インスタンスを生成できます。
$obj = new MusicPlayer();
echo $obj->play();

echo '<br>==========</br>';

echo $obj->stop();
