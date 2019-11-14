<html>
<body>
<?php

echo 'mb_convert_encoding<br>';
//文字エンコーディングを変換する
$str = "元になっている文字列";
print($str."<br>");
echo mb_detect_encoding($str).'<br><br>'; //現在のエンコード検出

$str = mb_convert_encoding($str, "UTF-8", "auto");
print($str).'<br>';

/* 内部文字エンコーディングからSJISに変換 */
$str = mb_convert_encoding($str, "SJIS");
echo $str.'<br>';

/* SJISからUTF-7に変換 */
$str = mb_convert_encoding($str, "UTF-7", "SJIS");
echo $str.'<br>';

/* JIS, eucjp-win, UTF-7の順番で自動検出し、ASCIIに変換 */
$str = mb_convert_encoding($str, "ASCII", "JIS, eucjp-win, UTF-7");
echo $str.'<br>';

/* "auto" は、"ASCII,JIS,UTF-8,EUC-JP,SJIS" に展開される */
$str = mb_convert_encoding($str, "EUC-JP", "auto");
echo $str.'<br>';

echo '<br>';

echo 'mb_split<br>';
//マルチバイト文字列を正規表現により分割する
$arr = mb_split("[0-9]","aaa1bbb2ccc");
foreach ($arr as $item) {
    echo $item."<br />";
}

?>

</body>
</html>