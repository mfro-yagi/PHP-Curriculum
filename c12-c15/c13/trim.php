<html>
<body>
<?php

echo 'trim<br>';
//文字列の先頭および末尾にあるホワイトスペースを取り除く
//" " (ASCII 32 (0x20)), 通常の空白。
//"\t" (ASCII 9 (0x09)), タブ。
//"\n" (ASCII 10 (0x0A)), リターン。
//"\r" (ASCII 13 (0x0D)), 改行。
//"\0" (ASCII 0 (0x00)), NULバイト
//"\x0B" (ASCII 11 (0x0B)), 垂直タブ
echo '<pre>';
$text   = "\t\tThese are a few words :) ...  ";
$binary = "\x09Example string\x0A";
$hello  = "Hello World";
var_dump($text, $binary, $hello);

print "\n";

$trimmed = trim($text);
var_dump($trimmed);

$trimmed = trim($text, " \t.");
var_dump($trimmed);

$trimmed = trim($hello, "Hdle");
var_dump($trimmed);

$trimmed = trim($hello, 'HdWr');
var_dump($trimmed);

// ASCII 制御文字 (0 から 31 まで) を
// $binary の先頭および末尾から取り除く
$clean = trim($binary, "\x00..\x1F");
var_dump($clean);

echo '<br><br>';

function trim_value(&$value)
{
    $value = trim($value);
}

$fruit = array('apple','banana ', ' cranberry ');
var_dump($fruit);

array_walk($fruit, 'trim_value');
var_dump($fruit);

echo '<pre>';

?>

</body>
</html>