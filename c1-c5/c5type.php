<html>
<body>
<pre>
<?php

//string
$a = "apple";
var_dump($a);
echo '<br>';

//int
$b = 6;
var_dump($b);
echo '<br>';
echo '<br>';

//object
class foo
{
    function do_foo()
    {
        echo "foo を実行します。<br><br>";
    }
}
$bar = new foo;
$bar->do_foo();
var_dump($bar);
echo '<br>';

$obj = (object) array('1' => 'foo');
var_dump($obj);
echo '<br>';
var_dump(isset($obj->{'1'})); // 出力は 'bool(false)'
var_dump(key($obj)); // 出力は 'int(1)'
echo '<br>';
echo '<br>';

//array
$d = array("book", "pen", "seed");
var_dump($d);
echo '<br>';

?>
</pre>
</body>
</html>
