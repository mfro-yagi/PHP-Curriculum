<html>
<body>
<?php
//指定した変数を破棄
function destroy_foo()
{
    global $foo;
    unset($foo);
}
$foo = 'bar';
destroy_foo();
echo $foo.'<br>'; //bar


function foo()
{
    unset($GLOBALS['bar']);
}
$bar = "something";
foo();
echo $bar.'<br>'; //(何も出力されない);

function foo_a()
{
    static $bar;
    echo $bar;
    $bar++;
    echo "Before unset: $bar, ";
    unset($bar);
    //$bar = 23;
    echo "after unset: $bar\n";
}

foo_a();
echo '<br>';
foo_a(); //関数を再度コールすると、破棄する前の値が復元
echo '<br>';
foo_a();
echo '<br>';

?>
</body>
</html>

