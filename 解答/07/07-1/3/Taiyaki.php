<?php

/**
 * たい焼き器クラス
 */
class Taiyaki
{
    // クラスのプロパティ（クラス変数）
    // 自クラス、および、継承先のクラスからのみアクセスできるように、アクセス修飾子をprotectedにしています。
    /** @var string 粉の種類 */
    protected $konaType;

    /** @var string 餡（あん）の種類 */
    protected $ann;

    /**
     * コンストラクタ
     *
     * @param string $konaType 粉の種類
     * @param string $ann 餡（あん）の種類
     */
    public function __construct(string $konaType, string $ann)
    {
        // プロパティの値を初期化するために引数を使っています。
        // コンストラクタの引数をプロパティに代入します
        $this->konaType = $konaType;
        $this->ann = $ann;
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
