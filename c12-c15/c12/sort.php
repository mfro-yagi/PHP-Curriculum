<html>
<body>
<?php

echo 'sort<br>';

echo '<pre>';

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
echo '<br>';

//大文字小文字を区別しない
$oranges = array(
    "Orange1", "orange2", "Orange3", "orange20"
);
sort($oranges, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($oranges as $key => $val) {
    echo "oranges[" . $key . "] = " . $val . "\n";
}
echo '</pre>';

echo '<br><br>';

echo 'rsort<br>';
//逆ソート
echo '<pre>';
$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
echo '</pre>';

echo '<br><br>';

echo 'asort<br>';
//連想キーと要素との関係を維持しつつ配列をソートする
echo '<pre>';
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
echo '</pre>';

echo '<br><br>';

echo 'arsort<br>';
//rsort+asort
echo '<pre>';
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
echo '</pre>';

?>


</body>
</html>