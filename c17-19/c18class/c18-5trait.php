<html>
<body>

<?php
/**
 * trait
 */
trait A{
    function hoge1(){
        echo "abc";
    }
}

trait B{
    function hoge2(){
        echo "def";
    }
}

class C{
    use A,B;
    function hoge3(){
        echo "ghi";
    }
}
$foo = new CF;
$foo->hoge1();
$foo->hoge2();
$foo->hoge3();

echo '<br><br>';

trait D{
    function hoge4(){
        echo "abc";
    }
}

trait E{
    use D;
    function hoge5(){
        echo "def";
    }
}

class F{
    function hoge6(){
        echo "ghi";
    }
}

class G extends F{
    use E;
    function hoge7(){
        echo "jkl";
    }
}
$fo = new G();
$fo->hoge4();
$fo->hoge5();
$fo->hoge6();
$fo->hoge7();

?>

</body>
</html>