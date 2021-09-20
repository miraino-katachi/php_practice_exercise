<?php

/**
 * 商品のたい焼きを作るクラス。
 * たい焼き器クラスを継承します。
 */
class TaiyakiProduct extends Taiyaki
{
    // クラスのプロパティ（クラス変数）
    // privateのプロパティは、自クラスからしか参照と値の変更ができません。
    /** @var int 粉の量（グラム） */
    private $konaQuantity;

    /** @var int たい焼きの個数 */
    private $num;

    /**
     * コンストラクタ
     *
     * @param string $konaType 粉の種類
     * @param string $ann 餡（あん）の種類
     * @param int $konaQuantity 粉の量（グラム）
     * @param int $num たい焼きの個数
     */
    public function __construct(string $konaType, string $ann, int $konaQuantity, int $num)
    {
        // 親クラスのコンストラクタを呼び出します。
        parent::__construct($konaType, $ann);

        // コンストラクタの引数をプロパティに代入します。
        $this->konaQuantity = $konaQuantity;
        $this->num = $num;
    }

    /**
     * たい焼きを焼く処理
     * 親クラスのbake()メソッドをオーバーライド（上書き）しています。
     *
     * @return string
     */
    public function bake()
    {
        // たい焼きを焼く処理
        return $this->konaQuantity . "グラムの" . $this->konaType . "を使って、" .
            $this->ann . "のたい焼きを" . $this->num . "個焼きました。";
    }
}
