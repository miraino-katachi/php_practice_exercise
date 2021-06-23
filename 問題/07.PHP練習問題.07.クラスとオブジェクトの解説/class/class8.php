<?php

// クラスの継承・その4
// サブクラスにコンストラクタを定義する時

/**
 * サンプルクラス8
 */
class SampleClass8
{
    /** @var string サンプルのプロパティ */
    public $sample;

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // サンプルのプロパティを初期化します。
        $this->sample = 'こんにちは！';
    }
}

/**
 * サンプルクラス8を継承したサンプルクラス8サブクラス
 */
class SampleClass8Sub extends SampleClass8
{
    // サブクラスにもコンストラクタを定義します。

    public function __construct()
    {
        // 処理は何も書かないことにします。
    }
}

$obj = new SampleClass8Sub();
// サブクラスにコンストラクタを定義した場合は、
// 暗黙的にスーパークラスのコンストラクタが呼ばれることはありません。
echo $obj->sample;
