<html>
<body>
<?php

echo 'array_map<br>';

//指定した配列の要素にコールバック関数を適用する
function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
echo '<pre>';
print_r($b);

echo '<br><br>';

$func = function($value) {
    return $value * 2;
};
print_r(array_map($func, range(1, 5)));

echo '<br>';

function show_French($n, $m)
{
    return("The number $n is called $m in French");
}

function map_French($n, $m)
{
    return(array($n => $m));
}

$e = array(1, 2, 3, 4, 5);
$f = array("un", "deux", "trois", "quatre", "cinq");

$c = array_map("show_French", $a, $b);
print_r($c);

$d = array_map("map_French", $a , $b);
print_r($d);

echo '<br><br>';

//配列の配列を生成
$g = $e;
$h = array("one", "two", "three", "four", "five");
$i = $f;

$j = array_map(null, $g, $h, $i);
print_r($j);

echo '</pre>';

?>


</body>
</html>
