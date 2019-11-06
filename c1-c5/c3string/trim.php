<html>
<body>
<?php
//空白削除
$s = trim(" abc ");	// "abc"
print($s."<br/>\n");

$s = trim("==abc++", "=+");	// 除去文字を指定して"abc"
print($s."<br/>\n");

$s = ltrim(" abc ");	// "abc "
print($s);

$s = trim(" abc ");	// "abc"
print($s);

$s = rtrim(" abc ");	// " abc"	chop()はエイリアス
print($s."<br/>\n");

?>
</body>
</html>