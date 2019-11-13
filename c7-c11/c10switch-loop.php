<html>
<body>

<p>switch</p>
<p>0か1か2か3を入力</p>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="number" value="">
    <input type="submit" value="送信">
</form>
<?php

switch ($_POST["number"]) {
    case "":
        echo "a";
        break;
    case 0:
        echo "0を入力しました";
        break;
    case 1:
        echo "1を入力しました";
        break;
    case 2:
        echo "2を入力しました";
        break;
    case 3:
        echo "3を入力しました";
        break;
    default:
        echo "入力が正しくありません";
}

?>

<br><br><br>

<?php

echo 'while ';
$i = 0;
while($i <= 10) {
    //$a++	後置加算子	$a を返し、$a に1を加える
    echo $i++." ";
}
echo '<br>';
$i = 0;
while($i <= 10):
    echo $i." ";
    $i++;
endwhile;

echo '<br><br>';

echo 'for ';
for ($i = 0; $i <= 10; ++$i) {
    echo $i . " ";
}

echo '<br><br>';

echo 'foreach ';
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo $value." ";
}
unset($value); // 最後の要素への参照を解除
echo '<br><pre>';
foreach ($arr as $key => $value) {
    // $arr[3] が、$arr の各要素で上書きされて...
    echo "{$key} => {$value} "; //0 => 2 1 => 4 2 => 6 3 => 8
    print_r($arr);
}
unset($value);
echo '</pre>';

echo '<br>';

echo 'do~while ';
$i = 10;
do {
    echo --$i." ";
} while ($i > 0);
echo "a ";
$i = 0;
do {
    echo $i;
} while ($i > 0);
//上記のループは一度だけ実行

?>

</body>
</html>