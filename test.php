<?php
    print "Hello";
?>
<dr>
<?php
$variable = "some data";
    print "$variable";
?>
<dr>
<?php
$shion = 24;
var_dump($shion);
?>
<dr>
<?php
$num = 1.2;
var_dump($num);
?>
<br>
<?php
$string1 = "I'll be back.";
$string2 = "I'm a superman.";
var_dump($string1);
var_dump($string2);
?>
<?php
$t = true;
$f = false;
var_dump($t);
var_dump($f);
?>
<br>
<?php
$fruits = ['リンゴ', 'ミカン', 'キウイ'];
print $fruits[0];
print $fruits[2];
var_dump ($fruits);
print_r($fruits);
?>
<?php
$fruits = [
    'apple' => 'リンゴ',
    'banana' => 'バナナ',
    'orange' => 'オレンジ',
    ];
    var_dump($fruits);
    print $fruits['apple']
?>
<?php
$a;
var_dump($a);
$b = null;
var_dump($b);
?>
<?php
$num1 = 50 % 6;
print($num1);
?>
<?php
$str1 = "文字列１";
$str2 = "+ 文字列２";
$str = $str1 . PHP_EOL . $str2 . PHP_EOL;
print $str;
?>
<?php
$result = 1 < 2;
var_dump($result);
$result2 = 1 == 2;
var_dump($result2);
?>
<?php
$num = 10 + "20";
$str = 10 . "です";
print($num);
print($str);
?>
<?php
if (10 > 5) {
    print'ここは表示しろ' . PHP_EOL;
}
if (10 < 5) {
    print'表示すんな' . PHP_EOL;
}
else {
    print'Right here, Right now!';
}
?>
<?php
$number = mt_rand() % 10;

if ($number < 5){
    print $number . 'は５より小さい数' . PHP_EOL;
}

else {
    print $number . 'は５以上の数' . PHP_EOL;
}
?>
<?php
$number = mt_rand();
if ($number < 10) {
    print"やったー";
}
elseif ($number < 20) {
    print'まあまあやったー';
}
elseif ($number < 50) {
    print"おしい。";
}
else {
    print"残念。";
}
?>
<?php
$number = 0;
while ($number !=9) {
    $number = mt_rand() % 10;
    print $number . PHP_EOL;
}
?>
<?php
    $count = 0;
    $number = 0;

    while ($number != 9) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
        $count++;
    }

    print '9が出るまで' . $count . '回かかった。' . PHP_EOL;
?>
<?php
for ($i = 0; $i < 10; $i++) {
    print $i . "回目" . PHP_EOL;
}
?>
<?php
$fruits = ['リンゴ', 'バナナ', 'オレンジ', 'ブドウ', '桃'];
$count = count($fruits);
for ($i = 0; $i < $count; $i++){
    print $i . '回目' . $fruits[$i] . PHP_EOL;
}
?>
<?php
$fruit = ['リンゴ', 'バナナ', 'オレンジ', 'ブドウ', '桃'];
foreach ($fruit as $key => $fruit) {
    print $key . '回目' . $fruit . PHP_EOL;
}
?>
<?php
function sum($a, $b) {
    $result = 0;
    for ($i = $a; $i <= $b; $i++) {
        $result = $result + $i;
}
    return $result;
}
$sum1 = sum(1, 9);
$sum2 = sum(1, 1000);
$sum3 = sum(1000, 9999);
?>
<?php
date_default_timezone_set('Asia/Tokyo');
$now_hour = (int)date("H");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <tittle>タイトル</tittle>
    </head>
    <body>
        <p>今は<?php print $now_hour; ?>時です。</p>
    <?php if (6 <= $now_hour && $now_hour < 12) { ?>
        <p>おはよう、詩音さん</p>
    <?php } elseif (12 <= $now_hour && $now_hour < 18) { ?>
    <p>こんにちは、詩音さん</p>
    <?php } else { ?>
    <p>こんばんは、詩音さん</p>
    <?php } ?>
    </body>
</html>
<?php
    $fruits = ['', 'リンゴ', 'バナナ', 'オレンジ', 'ぶどう', '桃'];
    $count = count($fruits);         // assign the number of items in the array to $count
    for ($i = 1; $i < $count; $i++) {
        print $i . '回目: ' . $fruits[$i] . PHP_EOL;
    }
?>
<?php
date_default_timezone_set('Asia/Tokyo');
$now_hour = (int)date("H");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <tittle>タイトル</tittle>
    </head>
    <body>
       <ul>
           <?php for($i = 1; $i < 10; $i++) { ?>
           <li><?php print '3 x ' . $i . '=' . (3* $i);?></li>
           <?php } ?>
        </ul>
    </body>
</html>

<?php

class Slime {
    public $type = 'スライム';
    public $hp = 10;
    public $power = 3;
    
    function attack($character_name) {
print $this->$type . 'が' . $character_name . '攻撃して' . $this->power . 'ポイントのダメージを与えた！' . PHP_EOL;
     }
}

$slime_A = new Slime();
$slime_A->attack('主人公');
print_r($slime_A);
?>