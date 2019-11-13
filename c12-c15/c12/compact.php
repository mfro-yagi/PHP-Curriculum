<html>
<body>
<?php

echo 'compact<br>';
// 変数名とその値から配列を作成する
echo '<pre>';

$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", $location_vars);
print_r($result);

echo '</pre>';

?>


</body>
</html>