<?php

// カプセル化

/**
 * サンプルクラス3
 */
class SampleClass3
{
    // クラスの外部から触ってほしくないプロパティやメソッドを隠すことを
    // 「カプセル化」といいます。
    // カプセル化するには、プロパティやメソッドをprivateにします。

    // privateなプロパティを作ります。

    /** @var string プライベートな変数 */
    private $private_var;

    // privateなプロパティにクラスの外部から値を代入するには、
    // プロパティに値を代入するためのメソッドが必要です。

    // コンストラクタを利用する場合、コンストラクタに引数を与えます。

    /**
     * コンストラクタ
     *
     * @param string $private_var
     */
    public function __construct($private_var)
    {
        // プロパティをコンストラクタの引数の値で初期化します。
        $this->private_var = $private_var;
    }

    // プロパティに値を設定するメソッドを作ります。
    // プロパティに値をセットするので、セッターといいます。

    /**
     * プライベートな変数に値を設定します。
     *
     * @param string $private_var
     * @return void
     */
    public function setPrivateVar($private_var)
    {
        $this->private_var = $private_var;
    }

    // privateなプロパティの値をクラスの外部から読み取るには、
    // プロパティの値を返却するメソッドが必要です。
    // プロパティから値をゲットしてくるので、ゲッターといいます。

    /**
     * プライベートなプロパティの値を取得します。
     *
     * @return string プライベートなプロパティの値
     */
    public function getPrivateVar()
    {
        return $this->private_var;
    }
}

// インスタンスを作るときに、privateなプロパティに値を代入してみます。
$obj = new SampleClass3('こんにちは！');

// privateなプロパティの値を直接取得すると怒られます。
// echo $obj->private_var;

// privateなプロパティの値を取得するメソッドを使ってみます。
echo $obj->getPrivateVar();

echo '<br>';

// プロパティに値を設定するメソッドを使ってみます。
$obj->setPrivateVar('まいどおせわになります！');

echo $obj->getPrivateVar();
