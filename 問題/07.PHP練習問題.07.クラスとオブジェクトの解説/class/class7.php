<?php

// クラスの継承・その3
// サブクラスにコンストラクタを定義しない時

/**
 * サンプルクラス7
 */
class SampleClass7
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
 * サンプルクラス7を継承したサンプルクラス7サブクラス
 */
class SampleClass7Sub extends SampleClass7
{
    // サブクラスにはコンストラクタを定義しません。
}

$obj = new SampleClass7Sub();
// サブクラスにコンストラクタを定義していなくても、
// 暗黙的にスーパークラスのコンストラクタが動きます。
echo $obj->sample;
