<html>
<body>
<?php

echo 'array_unique<br>';

//配列から重複した値を削除する
echo '<pre>';

$input = array("a" => "green", "red", "b" => "green", "blue", "red","yellow","black");
$result = array_unique($input);
print_r($result);

$input = array(4, "4", "3", 4, 3, "3");
$result = array_unique($input);
var_dump($result);

echo '</pre>';

?>


</body>
</html>