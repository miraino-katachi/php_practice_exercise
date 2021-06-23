<?php

// publicとprivateとコンストラクタ

/**
 * サンプルクラス2
 */
class SampleClass2
{
    // publicキーワードを使うと、クラスの外からでもアクセスできます。

    /** @var string publicな変数 */
    public $public_var;

    // privateキーワードを使うと、クラスの外からはアクセスできません。

    /** @var string privateな変数 */
    private $private_var;

    // public、private、（あと、protectedもあります）は、「アクセス修飾子」と言います。
    // public => クラスの中、外からでも、自由にアクセスできる。
    // private => 同じクラスの中でしかアクセスできない。
    // protected => 同じクラスと、クラスを継承したサブクラスでしかアクセスできない。

    // クラスのインスタンスを作ったときに自動的に動くメソッドのことを
    // 「コンストラクタ」といいます。
    // Javaのコンストラクタはクラス名と同じ名前にしますが、
    // PHPの場合は、__consruct()になります。

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // コンストラクタでプロパティを初期化します。
        $this->public_var = 'こんにちは！';
        $this->private_var = '毎度お世話になります！';
    }

    // Javaと違って、メソッドをオーバーロード
    // （引数の数が違う同じ名前のメソッドを作成すること）
    // することはできません。

    /**
     * コンストラクタ
     */
    // public function __construct($str1, $str2)
    // {
    //     $this->public_var = $str1;
    //     $this->private_var = $str2;
    // }

    // ちなみに、「デストラクタ」といって、
    // インスタンスが破棄されるときに動くメソッドもあるのですが、
    // PHPの場合はリクエスト→レスポンスが終わると自動的にオブジェクトが破棄されるので、
    // あまり使い所はないかもしれません。

    /**
     * デストラクタ
     */
    public function __destruct()
    {
        // インスタンスが破棄されるときに行いたい処理を書く。
    }
}

$obj = new SampleClass2();
echo $obj->public_var;

// privateなプロパティにクラスの外からアクセスしようとすると怒られます。
$obj->private_var = 'こんばんは！';
echo $obj->private_var;
