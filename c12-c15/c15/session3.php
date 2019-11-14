<?php
// セッションの開始
session_start();
// セッション変数の初期化
$_SESSION = array();
// セッションファイルの削除
session_destroy();
?>
<html>
<body>
<p>再びセッションを開始し、セッションを破棄</p>
<p>$_SESSION["title"] = 「<?php echo $_SESSION["title"] ?>」</p>
<a href = "session1.php">最初に戻る</a>
</body>
</html>