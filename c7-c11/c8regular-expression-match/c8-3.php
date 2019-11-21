<html>
<body>
<?php
//前方一致
function Tokyo(){
if (preg_match('/^03.*$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は東京都の電話番号です（ハイフンあり）';
else
    echo '「'.$_POST["name"].'」は電話番号です（ハイフンあり）';
}

if (preg_match('/^([0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4})+?$/', $_POST["name"]))
    Tokyo();
else if (preg_match('/^([0-9]{10})+?$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は電話番号です（固定電話ハイフンなし）';
else if (preg_match('/^([0-9]{11})+?$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は電話番号です（携帯電話ハイフンなし）';
else
    echo '電話番号を入力';

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name" value="">
    <input type="submit" value="送信">
</form>

<br>

<?php
//後方一致
function Docomo(){
    if (preg_match('/^.*@docomo.ne.jp$/', $_POST["mail"]))
        echo '「'.$_POST["mail"].'」はドコモのメールアドレスです';
    else
        echo '「'.$_POST["mail"].'」はメールアドレスです';
}

if (preg_match('/^([a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*)$/', $_POST["mail"]))
    Docomo();
else
    echo 'メールアドレスを入力'

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="mail" value="">
    <input type="submit" value="送信">
</form>


</body>
</html>
