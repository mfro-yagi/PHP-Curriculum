<html>
<body>
<?php
//指定した変数が数値であるかどうかを調べる
$tests = array(
    "42",  //'42' is numeric
    1337,  //1337 is numeric
    0x539, //1337 is numeric
    02471, //1337 is numeric
    0b10100111001,  //1337 is numeric
    1337e0,         //1337.0 is numeric
    "not numeric",  //'not numeric' is NOT numeric
    array(),        //array ( ) is NOT numeric
    9.1,            //9.1 is numeric
    null            //NULL is NOT numeric
);

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element) . " is numeric";
    } else {
        echo var_export($element) . " is NOT numeric";
    }
    echo '<br>';
}
?>
</body>
</html>

