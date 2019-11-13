<html>
<body>
<?php

echo 'implode<br>';
//配列要素を文字列により連結する
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(", ", $array);

echo $comma_separated.'<br>'; // lastname, email, phone

// 空の配列を使うと空文字列になる
echo '<pre>';
var_dump(implode('hello', array())); // string(0) ""
echo '</pre>';

echo '<br><br>';

echo 'explode<br>';
//文字列を文字列により分割する
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0].'<br>'; // piece1
echo $pieces[1].'<br>'; // piece2

$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user.'<br>'; // foo
echo $pass.'<br>'; // *

echo '<pre>';
$input1 = "hello";
$input2 = "hello,there";
$input3 = ',';
var_dump( explode( ',', $input1 ) );
var_dump( explode( ',', $input2 ) );
var_dump( explode( ',', $input3 ) );
echo '<br><br>';
$str = 'one|two|three|four';
// 正の値を持つ limit  最大 limit の要素が含まれ、その最後の要素には string の残りの部分が全て含まれる
print_r(explode('|', $str, 2));
print_r(explode('|', $str, 3));
print_r(explode('|', $str, 5));
// 負の値を持つ limit (PHP 5.1 以降)  最後の -limit 個の要素を除く全ての構成要素が返される
print_r(explode('|', $str, -1));
print_r(explode('|', $str, -2));
print_r(explode('|', $str, -3));
echo '</pre>'

?>

</body>
</html>