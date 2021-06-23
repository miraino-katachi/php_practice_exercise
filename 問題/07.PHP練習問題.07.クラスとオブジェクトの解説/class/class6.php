<?php

// クラスの継承・その2
// 継承とプロパティとメソッド

/**
 * サンプルクラス6
 */
class SampleClass6
{
    /** @var string スーパークラスのプロパティ */
    protected $parent_var;

    /**
     * プロパティに値を設定します。
     *
     * @param string $parent_var
     * @return void
     */
    public function setVar(string $parent_var)
    {
        $this->parent_var = $parent_var;
    }

    /**
     * プロパティの値を返却します。
     *
     * @return void
     */
    public function getVar()
    {
        return $this->parent_var;
    }
}

/**
 * サンプルクラス6を継承したサンプルクラス6サブクラス
 */
class SampleClass6Sub extends SampleClass6
{
    // サブクラス独自のプロパティを作ります。

    /** @var string こんにちは！ */
    private $child_var = 'こんにちは！';

    /**
     * スーパークラスのプロパティの値を利用したサブクラスのメソッド
     *
     * @return string
     */
    public function getVar()
    {
        // スーパークラスのメソッドと同じ名前で再定義するときに親のメソッドを呼び出すには、
        // parent::を使います。
        // 「オーバーライドする」と言います。
        return parent::getVar() . $this->child_var;
    }
}

$obj = new SampleClass6Sub();
$obj->setVar('さかがみさん、');
// サブクラスで同じ名前でオーバーライドされているので、
// スーパークラスのメソッドが呼ばれることはありません。
echo $obj->getVar();
