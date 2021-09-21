<?php

abstract class Airplane
{
    /** @var string 飛行機のタイプ */
    protected $type;

    /**
     * コンストラクタ
     *
     * @param string $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * 飛行機のタイプを表示します。
     *
     * @return string
     */
    public function showType()
    {
        echo '<p>' . $this->type . '</p>';
    }

    /**
     * 飛行します。
     *
     * @return void
     */
    abstract public function fly();
}
