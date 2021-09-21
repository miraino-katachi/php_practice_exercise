<?php

class GamingPC implements IComputer
{
    public function playGame()
    {
        echo '<p>3Dゲームをする</p>';
    }

    public function browseWeb()
    {
        echo '<p>ウェブを閲覧する</p>';
    }
}