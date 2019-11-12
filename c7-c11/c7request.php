<html>
<body>
<?php
if(htmlspecialchars($_GET["name"]) != null)
    echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!<br>';
else
    echo 'Hello World!<br>Urlの後に「/?name=[好きな名前]」を入力<br><br>';

if(htmlspecialchars($_GET["name"]) != null)
    echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!<br>';
else
    echo 'Hello World!<br>Urlの後に「/?name=[好きな名前]」を入力<br><br>';

//サーバーのホスト名
echo $_SERVER['SERVER_NAME'].'<br>';
//サーバーのIPアドレス
echo $_SERVER['SERVER_ADDR'].'<br>';
//リクエストの開始時のタイムスタンプ
echo $_SERVER['REQUEST_TIME_FLOAT'].'<br>';
//レスポンスヘッダ上に書かれている、 サーバーの認識文字列
echo $_SERVER['SERVER_SOFTWARE'].'<br>';
//現在ページをみているユーザーの IP アドレス
echo $_SERVER['REMOTE_ADDR'].'<br>';
//現在ページをみているユーザーの IP アドレス
echo $_SERVER['SCRIPT_NAME'].'<br><br>';

if(htmlspecialchars($_POST["name"]) != null)
    echo 'Hello ' . $_POST["name"] . '!';
else
    echo '下記のフォームに名前を入力'

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name" value="">
    <input type="submit" value="送信">
</form>

</body>
</html>
