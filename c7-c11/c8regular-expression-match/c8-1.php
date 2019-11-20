<html>
<body>
<?php

if (preg_match('/^[aiueoAIUEO]+$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は母音です';  //a, eiなど母音だけの文字列
else if (preg_match('/^[^aiueoAIUEO]+$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は子音です';  //s, GVなど母音だけの文字列
else if (preg_match('/^b.g$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」はbで始まりgで終わる三文字の単語';// .　は任意の１文字
else if (preg_match('/^[a-zA-Z]+$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」はすべてアルファベットでできた文字列です';//アルファベットでできた文字列
else if (preg_match('/^[ぁ-んー]+$/', $_POST["name"]))//小さいあから始まる
    echo '「'.$_POST["name"].'」はすべてひらがなでできた文字列です';
else if (preg_match('/^[ァ-ヶー]+$/', $_POST["name"]))//小さいアから始まる
    echo '「'.$_POST["name"].'」はすべてカタカナでできた文字列です';
else if (preg_match('/^[一-龠]+$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」はすべて漢字でできた文字列です';
else if (preg_match('/^[!#<>:;&~@%+$"\'\*\^\(\)\[\]\|\/\.,_-]+$/', $_POST["name"])) //　\は直後の特殊文字を普通文字として扱う
    echo '「'.$_POST["name"].'」はすべて指定記号でできた文字列です';
else if (preg_match('/^1{5,}$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は1の五回以上の繰り返し';

else
    echo '下に文字列を入力'

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name" value="">
    <input type="submit" value="送信">
</form>

<br>

<?php

if (preg_match('/^([a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*)$/', $_POST["mail"]))
    echo '「'.$_POST["mail"].'」はメールアドレスです';
else
    echo 'メールアドレスを入力'

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="mail" value="">
    <input type="submit" value="送信">
</form>

</body>
</html>
