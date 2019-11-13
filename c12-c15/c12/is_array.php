<html>
<body>
<?php

echo 'is_array<br><br>';
//指定した変数が配列であるかどうかを調べる
$yes = array('this', 'is', 'an array');
echo is_array($yes) ? 'Array' : 'not an Array';

echo "<br>";

$no = 'this is a string';
echo is_array($no) ? 'Array' : 'not an Array';

?>


</body>
</html>
