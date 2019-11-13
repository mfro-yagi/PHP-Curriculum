<html>
<body>
<?php

echo 'in_array<br>';
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix<br>";
}
if (in_array("mac", $os)) {
    echo "Got mac<br>"; //in_arrayは大文字小文字区別
}

$a = array('1.10', 12.4, 1.13);
if (in_array('12.4', $a, true)) {
    echo "'12.4' found with strict check<br>";
}
if (in_array(1.13, $a, true)) {
    echo "1.13 found with strict check<br>";
}

$a = array(array('p', 'h'), array('p', 'r'), 'o');
//$aの中にarray('p','h')があるか
if (in_array(array('p', 'h'), $a)) {
    echo "'ph' was found<br>";
}
if (in_array(array('f', 'i'), $a)) {
    echo "'fi' was found<br>";
}
if (in_array('o', $a)) {
    echo "'o' was found<br>";
}

?>


</body>
</html>
