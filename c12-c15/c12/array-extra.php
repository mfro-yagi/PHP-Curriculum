<html>
<body>
<?php

echo 'array_shift<br>';
//配列の先頭から要素を一つ取り出す
echo '<pre>';
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);
echo '</pre>';

echo '<br><br>';

echo 'array_unshift<br>';
//一つ以上の要素を配列の最初に加える
echo '<pre>';
$stack = array("orange", "banana");
array_unshift($stack,"apple", "raspberry");
print_r($stack);
echo '</pre>';

echo '<br><br>';

echo 'array_pop<br>';
//配列の末尾から要素を取り除く
echo '<pre>';
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
echo '</pre>';

echo '<br><br>';

echo 'array_push<br>';
//一つ以上の要素を配列の最後に追加する
echo '<pre>';
$stack = array("orange", "banana");
array_push($stack,"apple", "raspberry");
print_r($stack);
echo '</pre>';

?>


</body>
</html>
