<html>
<body>
<?php

echo 'htmlspecialchars<br>';
//特殊文字を HTML エンティティに変換する
// HTMLエンティティ化した場合
echo htmlspecialchars('<a href="#">HTMLエンティティ化する。</a>', ENT_QUOTES, 'UTF-8').'<br>';

// HTMLエンティティ化しない場合
echo '<a href="#">HTMLエンティティ化しない。</a>'.'<br>';

//HTMLエンティティを元に戻す関数
echo htmlspecialchars_decode('&lt;a href=&quot;#2&quot;&gt;HTMLエンティティを元に戻す。&lt;/a&gt;', ENT_QUOTES);

?>



</body>
</html>