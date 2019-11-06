<html>
<body>
<?php
//置き換え
$s = "abcabcabc";

$t = str_replace('a', 'A', $s);	// "AbcAbcAbc"
print($t."<br/>\n");
$t = str_replace('a', '', $s);	// "bcbcbc"
print($t."<br/>\n");
$t = str_replace('abc', '@abc', $s);	// "@abc@abc@abc"
print($t."<br/>\n");
$t = str_replace(array('a', 'b'), array('A', 'B'), $s);	// "ABcABcABc"
print($t."<br/>\n");
$t = str_replace(array('a', 'b'), '', $s);	// "ccc"
print($t."<br/>\n");


?>
</body>
</html>

