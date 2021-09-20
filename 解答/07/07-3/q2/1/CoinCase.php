<?php

// (1)	以下のようなコインケースを表すクラスCoinCaseを作成しなさい。

/**
 * コインケースクラス
 */
class CoinCase
{
    /** @var array コインの種類 */
    private $coin_type = [
        500 => 0,
        100 => 0,
        50 => 0,
        10 => 0,
        5 => 0,
        1 => 0,
    ];

    /**
     * 硬貨を追加します。
     *
     * @param int $type 硬貨の種類
     * @param int $num 硬貨の枚数
     * @return void
     */
    public function addCoins($type, $num)
    {
        $this->coin_type[$type] = $num;
    }

    /**
     * 指定した硬貨が何枚あるか返却します。
     *
     * @param int $type
     * @return int
     */
    public function getCount($type)
    {
        return $this->coin_type[$type];
    }

    /**
     * 硬貨の総額を返却します。
     *
     * @return void
     */
    public function getAmount()
    {
        $sum = 0;
        foreach ($this->coin_type as $k => $v) {
            $sum += $k * $v;
        }
        return $sum;
    }
}
