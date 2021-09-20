<?php

/**
 * たい焼き器クラス
 */
class Taiyaki
{
    // クラスのプロパティ（クラス変数）
    // クラス外から直接アクセスできないように、アクセス修飾子をprivateにしています。
    /** @var string 粉の種類 */
    private $konaType;

    /** @var string 餡（あん）の種類 */
    private $ann;

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
