<?php

/**
 * 戦闘機クラスです
 */
class FighterAircraft extends Airplane
{
    /**
     * 飛行します。
     *
     * @return void
     */
    public function fly()
    {
        echo '<p>攻撃に出るために飛行します</p>';
    }

    /**
     * 戦闘します。
     *
     * @return void
     */
    public function fight()
    {
        echo '<p>戦闘します</p>';
    }
}
