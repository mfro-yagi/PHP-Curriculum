<html>
<body>
<?php
if(htmlspecialchars($_GET["name"]) != null)
    echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!<br>';
else
    echo 'Hello World!<br>Urlの後に「/?name=[好きな名前]」を入力<br>';


if(htmlspecialchars($_POST["name"]) != "")
    echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
else
    echo 'Hello World!<br>Urlの後に「/?name=[好きな名前]」を入力';

?>
</body>
</html>
