<html>
<body>
<?php

echo 'cookie<br>';
//コンピュータのブラウザ側に一時的にデータを保存するための仕組み
setcookie('username', 'yamada', time()+60*60*24*7); //有効期限一週間
echo $_COOKIE['username'];//yamada

setcookie('user', 'nakagawa', time()+60*60*24*7); //
echo $_COOKIE['user'];//

setcookie('user', 'nakagawa', time()-1); //削除
echo $_COOKIE['user'];//


echo '<br><br>';


if (isset($_COOKIE["visited"])){
    $count = $_COOKIE["visited"] + 1;
}else{
    $count = 1;
}

    $flag = setcookie("visited", $count);

print('<p>訪問回数は'.$count.'回目です</p>');

?>


</body>
</html>
