<html>
<body>
<?php
function foo(&$var)
{
    $var++;
}

$a = 5;
foo($a);
echo($a); //6

function abc(&$b)
{
    $b = 1;
}
$c = 6;
abc($c);
echo $c; //1

function def(&$d)
{
    $d = "apple";
}
$e = "book";
def($e);
echo $e.'<br>'; //apple

class ghi
{
    function do_ghi()
    {
        echo "ghi を実行します。<br><br>";
    }
}
$bar = new ghi;
$bar->do_ghi();
var_dump($bar);
echo '<br>';
?>
</body>
</html>
