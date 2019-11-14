<html>
<body>
<?php

echo 'strrpos<br>';
//文字列内の部分文字列が最後に現れる場所を見つける
$foo = "0123456789a123456789b123456789c";

var_dump(strrpos($foo, '7', -5));  // 末尾から 5 文字戻ったところから逆向きに検索開始
// 結果: int(17)

var_dump(strrpos($foo, '7', 20));  // 文字列の 20 文字目から検索を始めます
// 結果: int(27)

var_dump(strrpos($foo, '7', 28));  // 結果: bool(false)

?>

</body>
</html>