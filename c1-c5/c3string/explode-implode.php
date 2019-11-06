<html>
<body>
<?php
//文字列を分割したり、配列データを連結して１つの文字列にするときに使う
$s = 'This is a pen.';

list($one, $two, $three, $four) = explode(" ", $s);	// "This" "is" "a" "pen."
echo "{$one}と{$two}と{$three}と{$four}<br/>\n<br/>\n";

list($one, $two, $three) = explode(" ", $s, 3);	// "This" "is" "a pen."
echo "{$one}と{$two}と{$three}<br/>\n";
echo "{$one}と{$two}と{$three}と{$four}<br/>\n";
list($one, $two, $three) = explode("s", $s, 3);	// "This" "is" "a pen."
echo "{$one}と{$two}と{$three}<br/>\n<br/>\n";

list(,,$three) = explode(" ", $s);	// "a"
echo "{$three}<br/>\n";
echo "{$one}と{$two}と{$three}<br/>\n<br/>\n";

list($one, $two, $three, $four) = explode(" ", $s);
echo implode(" ", array($one, $two, $three, $four))."<br/>\n<br/>\n";	// "This is a pen."

$array = explode(" ", $s);
if ($i=count($array)) echo "{$i}個に分割<br/>\n<br/>\n";	// 4

echo implode($array);	// "Thisisapen."
echo implode("-", $array);	// "This-is-a-pen."

?>
</body>
</html>