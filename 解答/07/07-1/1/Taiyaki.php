<?php

/**
 * たい焼き器クラス
 */
class Taiyaki
{
    // クラスのプロパティ（クラス変数）
    // クラス外から値を代入するために、アクセス修飾子をpublicにしています。
    /** @var string 粉の種類 */
    public $konaType;

    /** @var string 餡（あん）の種類 */
    public $ann;

    /**
     * コンストラクタ
     * クラスをインスタンス化するときに自動的に呼び出されるメソッドです。
     */
    public function __construct()
    {
        // コンストラクタは、プロパティの初期化などに使われます。
        // この場合はコンストラクタでの処理がありませんので、コンストラクタを定義する必要はありません。
        // コンストラクタは、定義しなくても「暗黙的に」呼び出されます。
    }

    /**
     * たい焼きを焼く処理
     *
     * @return string
     */
    public function bake()
    {
        // たい焼きを焼く処理
        return $this->konaType . "を使って、" . $this->ann . "のたい焼きを焼きました。";
    }
}
