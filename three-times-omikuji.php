<?php

$omikuji = array('大吉', '中吉', '小吉', '吉', '凶', '大凶');
$first_time = mt_rand(0, 5);
$second_time = mt_rand(0, 5);
$third_time = mt_rand(0, 5);

function counter() {
    $i = 0;
    return function () use (&$i) {
        $i++;
        return $i;
    };
}

$counter = counter();
echo $counter() . "回目 >> " . $omikuji[$first_time] . PHP_EOL;
echo $counter() . "回目 >> " . $omikuji[$second_time] . PHP_EOL;
echo $counter() . "回目 >> " . $omikuji[$third_time] . PHP_EOL;

if (in_array(0, array($first_time, $second_time, $third_time))) {
    echo "おめでとうございます！大吉です！ヽ(*´∀`)ﾉｵﾒﾃﾞﾄ─ｯ♪" . PHP_EOL;
}
