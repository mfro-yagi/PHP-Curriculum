<html>
<body>

<p> 「YYYY-MM-DD」の形式で入力すると「DD/MM/YYYY」の形式で出力　</p>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="period" value="">
    <input type="submit" value="送信">
</form>
<?php

$patterns = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/',
    '/^\s*{(\w+)}\s*=/');
$replace = array ('\3/\4/\1\2', '$\1 =');
echo preg_replace($patterns, $replace, $_POST["period"]);

?>

<br><br>

<p> 「YYYY-MM-DD」の形式で入力すると「DD/MM/YYYY」の形式で出力　</p>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="period" value="">
    <input type="submit" value="送信">
</form>
<?php

$patterns = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/',
    '/^\s*{(\w+)}\s*=/');
$replace = array ('\3/\4/\1\2', '$\1 =');
echo preg_replace($patterns, $replace, $_POST["period"]);

?>

<br><br>

<?php
$count = 0;
//空白＋数字＋空白のカウント
echo preg_replace(array('/\d/', '/\s/'), '*', 'aaa  42  bb', -1 , $count);
echo $count; //3
?>

</body>
</html>