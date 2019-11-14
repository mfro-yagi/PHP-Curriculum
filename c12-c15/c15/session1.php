<?php
// セッションの開始
session_start();
// セッション変数に値を代入
$_SESSION["title"] = "apple";
?>
<html>
<body>
<p>セッション開始</p>
<p>$_SESSION["title"]=「<?php echo $_SESSION["title"] ?>」</p>
<p><a href = "session2.php">次のページ</a>に遷移</p>
</body>
</html>