<?php

require_once('./CoinCase.php');

$coin = new CoinCase();

// 硬貨を追加する
$coin->addCoins(500, 10);
$coin->addCoins(100, 9);
$coin->addCoins(50, 8);
$coin->addCoins(10, 7);
$coin->addCoins(5, 6);
$coin->addCoins(1, 5);
$coin->addCoins(500, 4);
$coin->addCoins(100, 3);
$coin->addCoins(50, 2);
$coin->addCoins(10, 1);

// 各硬貨が何枚あるのか表示する
echo '<p>500円玉は' . $coin->getCount(500) . '枚</p>';
echo '<p>100円玉は' . $coin->getCount(100) . '枚</p>';
echo '<p>50円玉は' . $coin->getCount(50) . '枚</p>';
echo '<p>10円玉は' . $coin->getCount(10) . '枚</p>';
echo '<p>5円玉は' . $coin->getCount(5) . '枚</p>';
echo '<p>1円玉は' . $coin->getCount(1) . '枚</p>';

// 総額を表示する
echo '<p>総額は' . $coin->getAmount() . '円です。</p>';
