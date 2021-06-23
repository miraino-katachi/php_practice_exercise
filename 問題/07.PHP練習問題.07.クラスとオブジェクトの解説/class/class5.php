<?php

// クラスの継承

/**
 * サンプルクラス5
 */
class SampleClass5
{
    /** @var string こんにちは！ */
    public $var = 'こんにちは！';

    /**
     * プロパティの値を返却します。
     *
     * @return void
     */
    public function sample5()
    {
        return $this->var;
    }
}

// クラスは、おおもとのクラスを継承してクラスを作成することができます。
// おおもとのクラスのことを、スーパークラス、ベースクラス、親クラス、基底クラス、
// と言ったりします。
// おおもとのクラスを継承したクラスは、サブクラス、子クラス、派生クラス、と言ったります。

/**
 * サンプルクラス5を継承したサンプルクラス5サブクラス
 */
class SampleClass5Sub extends SampleClass5
{

}

// サブクラスからスーパークラスのプロパティにアクセスすることができます。
// サブクラスのインスタンスを作ります。
$obj = new SampleClass5Sub();
echo $obj->var;

echo '<br>==========</br>';

// サブクラスからスーパークラスのメソッドも使えます。
echo $obj->sample5();
