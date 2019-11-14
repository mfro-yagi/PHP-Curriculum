<?php
// セッションの開始
session_start();
?>
<html>
<body>
<p>再びセッションを開始</p>
<p>セッション変数の値「<?php echo $_SESSION["title"] ?>」を取得</p>
<p><a href = "session3.php">セッションを破棄</a></p>
</body>
</html>