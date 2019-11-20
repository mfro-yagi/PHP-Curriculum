<html>
<body>
<?php

if (preg_match('/^([0-9]{3}-[0-9]{4})+?$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は郵便番号です（ハイフンあり）';
else if (preg_match('/^([0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4})+?$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は電話番号です（ハイフンあり）';
else if (preg_match('/^([0-9]{7})+?$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は郵便番号です（ハイフンなし）';
else if (preg_match('/^([0-9]{10})+?$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は電話番号です（固定電話ハイフンなし）';
else if (preg_match('/^([0-9]{11})+?$/', $_POST["name"]))
    echo '「'.$_POST["name"].'」は電話番号です（携帯電話ハイフンなし）';
else
    echo '郵便番号または電話番号を入力'

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name" value="">
    <input type="submit" value="送信">
</form>

<br>

<?php

if (preg_match('/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $_POST["url"]))
    echo '「'.$_POST["url"].'」はURLです';
else
    echo 'URLを入力'

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="url" value="">
    <input type="submit" value="送信">
</form>

</body>
</html>
