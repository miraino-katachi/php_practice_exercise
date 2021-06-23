<?php

// クラスの継承・その5
// サブクラスのコンストラクタでスーパークラスのコンストラクタを呼び出す

/**
 * サンプルクラス9
 */
class SampleClass9
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
 * サンプルクラス9を継承したサンプルクラス9サブクラス
 */
class SampleClass9Sub extends SampleClass9
{
    // サブクラスにもコンストラクタを定義します。

    public function __construct()
    {
        // スーパークラスのコンストラクタを呼び出したいときは、
        // 明示的にスーパークラスのコンストラクタを呼び出します。
        parent::__construct();
    }
}

$obj = new SampleClass9Sub();
// サブクラスのコンストラクタでスーパークラスのコンストラクタを明示的に呼び出したことで、
// サブクラスのコンストラクタでスーパークラスのコンストラクタも動きます。
echo $obj->sample;
