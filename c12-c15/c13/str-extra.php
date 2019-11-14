<html>
<body>
<?php

echo 'strlen<br>';
//文字列の長さを得る
$str = 'abcdef';
echo strlen($str); // 6
echo '<br>';
$str = ' ab cd ';
echo strlen($str); // 7

echo '<br><br>';

echo 'strtoupper<br>';
//文字列を大文字にする
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str; // MARY HAD A LITTLE LAMB AND SHE LOVED IT SO

echo '<br><br>';

echo 'strtoupper<br>';
//文字列を小文字にする
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str; // mary had a little lamb and she loved it so

echo '<br><br>';

echo 'substr<br>';
//文字列の一部分を返す
//文字列 string の、start で指定された位置から length バイト分の文字列を返す
//length を省略した場合は、 start の位置から文字列の最後までの部分文字列を返す
echo substr("abcdef", -1).'<br>';    // "f"
echo substr("abcdef", -2).'<br>';    // "ef"
echo substr("abcdef", -3, 1).'<br>'; // "d"
//length が指定され、かつ負である場合、 string の終端からその文字数分の文字が省略
echo substr("abcdef", 0, -1).'<br>';  // "abcde"
echo substr("abcdef", 2, -1).'<br>';  // "cde"
echo substr("abcdef", 4, -4).'<br>';  // false
echo substr("abcdef", -3, -1).'<br>'; // "de"

// 文字列中の 1 文字にアクセスすることも [] を使用することで可能
$string = 'abcdef';
echo $string[0].' ';                 // a
echo $string[3].' ';                 // d
echo $string[strlen($string)-1].' '; // f

?>

</body>
</html>