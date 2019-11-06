<html>
<body>
<?php
//探索
$email = 'foo@example.com';
$domain = strstr($email, '@');	// "@example.com"
print($domain."<br/>\n");

$user = strstr($email, '@', true);	// "foo" PHP5.3.0以降
print($user);


?>
</body>
</html>