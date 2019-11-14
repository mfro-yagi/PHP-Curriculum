<html>
<body>
<?php

echo 'strpos<br>';
//文字列内の部分文字列が最初に現れる場所を見つける
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// == ではなく　=== を使用。　'a' が 0 番目 (最初) の文字だから
if ($pos === false) {
    echo "文字列 '$findme' は、文字列 '$mystring' の中で見つかりませんでした";
    echo '<br>';
} else {
    echo "文字列 '$findme' が文字列 '$mystring' の中で見つかりました";
    echo " 見つかった位置は $pos です";
    echo '<br>';
}

// != でなく　!== 演算子を使用。(0 != false) は false になる。
if ($pos !== false) {
    echo "文字列 '$findme' が文字列 '$mystring' の中で見つかりました";
    echo " 見つかった位置は $pos です";
    echo '<br>';
} else {
    echo "文字列 '$findme' は、文字列 '$mystring' の中で見つかりませんでした";
    echo '<br>';
}

$newstring = 'abcdef abcdef';
$pos = strpos($newstring, 'a', 1); //offsetの位置から探索　 負の数を指定すると、文字列の末尾からこの数だけ戻った場所から検索を開始
echo $pos; //7 (offsetを　-12 にしても同じ結果)

?>

</body>
</html>