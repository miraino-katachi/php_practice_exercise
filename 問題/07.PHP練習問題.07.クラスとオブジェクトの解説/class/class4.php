<?php

// staticなメンバとstaticでないメンバ

/**
 * サンプルクラス4
 */
class SampleClass4
{
    // staticなプロパティは、クラス全体で（インスタンスが別であっても）共用されます。

    /** @var int staticなプロパティ */
    public static $num1 = 0;

    // staticでないプロパティは、インスタンスごとに別のものとして扱われます。

    /** @var int staticでないプロパティ */
    public $num2 = 0;

    // staticとstaticでないプロパティの考え方は、Javaと同じです。

    /**
     * コンストラクタ
     */
    public function __construct()
    {
        // 同じクラス内のstaticなプロパティを使うときは、self::で呼び出します。
        self::$num1++;

        // 同じクラス内のstaticでないプロパティを使うときは、$this->で呼び出します。
        $this->num2++;
    }
}

// staticなプロパティとstaticでないプロパティを比べてみます。
echo '1回目<br>';
$obj = new SampleClass4();
echo SampleClass4::$num1 . '<br>';
echo $obj->num2 . '<br>';

echo '<br>==========<br>';

echo '2回目<br>';
$obj = new SampleClass4();
echo SampleClass4::$num1 . '<br>';
echo $obj->num2 . '<br>';

echo '<br>==========<br>';

echo '3回目<br>';
$obj = new SampleClass4();
echo SampleClass4::$num1 . '<br>';
echo $obj->num2 . '<br>';

echo '<br>==========<br>';

echo '4回目<br>';
$obj = new SampleClass4();
echo SampleClass4::$num1 . '<br>';
echo $obj->num2 . '<br>';

echo '<br>==========<br>';

// staticでないなプロパティは、インスタンスごとに別のものなので、
// 値はコンストラクタで毎回初期化されます。
// staticなプロパティは、クラスで共用されるので、
// インスタンスが作られるたびにコンストラクタで1ずつ足されます。

// ちなみに、クラスのインスタンスを配列の要素に代入することも可能です。
$obj = null;    // 作成済みのインスタンスを破棄します。nullを代入することで破棄できます。
for ($i = 0; $i < 4; $i++) {
    $obj[$i] = new SampleClass4();
}

foreach ($obj as $k => $v) {
    echo $k.'回目<br>';
    echo $v->num2 . '<br>';
    echo '<br>==========<br>';
}