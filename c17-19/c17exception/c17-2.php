<html>
<body>

<?php
$a = 100;
echo $a.'を↓で割る';
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="number" value="">
    <input type="submit" value="送信">
</form>

<?php

try {
    try {
        if (htmlspecialchars($_POST["number"]) == 0){
            throw new Exception('割れません');
        } else if (htmlspecialchars($_POST["number"])>100){
            throw new Exception('100以下の数字を入力してください');
        }
        echo $a/$_POST["number"];
    } catch(Exception $e) {
        throw new Exception('ErrorException発生：'.$e->getMessage());
    }
} catch(Exception $e) {
    echo $e->getMessage(), "<br>";
}


?>

</body>
</html>