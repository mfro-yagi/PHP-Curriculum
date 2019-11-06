<html>
<body>
<?php
//探索（特定の文字が含まれるかどうかだけ）
if (strpos("abcdef", "c") !== false) {	// 見つかった位置(0番目から)を返す
    echo "見つかりました！<br/>\n";
} else {
    echo "見つかりませんでした…<br/>\n";

}

if (strpos("abcdef", "c", 3) !== false) {	// offset3指定だと"def"から探索
    echo "見つかりました！<br/>\n";
} else {
    echo "見つかりませんでした…<br/>\n";

}


?>
</body>
</html>