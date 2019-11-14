<html>
<body>
<?php

echo 'str_replace<br>';
//検索文字列に一致したすべての文字列を置換する
//subject内のsearchをreplaceに変更

// <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
echo $bodytag.'<br>';

// Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
echo $onlyconsonants.'<br>';

// You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
$newphrase = str_replace($healthy, $yummy, $phrase);
echo $newphrase.'<br>';

// count <- 指定した場合は、マッチして置換が行われた箇所の個数がここに格納
$str = str_replace("ll", "", "good golly miss molly!", $count);
echo $count.'<br><br>'; //2

// 置換の順番を指定
$str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
$order   = array("\r\n", "\n", "\r");
$replace = '<br />';
// まず最初に \r\n を置換するので、二重に変換されることはない
$newstr = str_replace($order, $replace, $str);
echo $newstr.'<br>';

// 出力は F となります。A が B に、そして B が C に、そして……
// 最終的に E が F に置換されるからです。置換は左から右へと順に行われます
$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject).'<br>';

$letters = array('a', 'p');
$fruit   = array('apple', 'pear');
$text    = 'a p';
$output  = str_replace($letters, $fruit, $text); // a p -> apple p -> apearpearle pear
echo $output; //apearpearle pear

?>

</body>
</html>