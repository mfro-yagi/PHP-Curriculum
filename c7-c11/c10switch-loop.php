<html>
<body>

<p>1か2か3を入力</p>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="number" value="">
    <input type="submit" value="送信">
</form>
<?php

switch ($_POST["number"]) {
    case 1:
        echo "1を入力しました";
        break;
    case 2:
        echo "2を入力しました";
        break;
    case 3:
        echo "3を入力しました";
        break;
}

?>

</body>
</html>