<html>
<body>
<?php

echo 'count<br>';

// 配列の中に含まれる項目数を取得
$array_fruit = array('りんご', 'メロン', 'トマト');
$array_food = array('野菜', '魚', $array_fruit);

$count1 = count($array_food);
$count2 = count($array_food, COUNT_RECURSIVE);

print('配列に含まれる項目数は'.$count1.'です<br>');//3
print('再帰的に数えた場合、項目数は'.$count2.'です<br>');//6(配列の項目も「1」としてカウント)

?>


</body>
</html>