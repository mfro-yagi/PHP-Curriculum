<html>
<body>

<?php
/**
 * final class
 */
class H{
    function hoge1(){
        echo "abc";
    }
}

final class I extends H {
    function hoge2(){
        echo "def";
    }
}

class J //extends I     継承不可
{
    function hoge3(){
        echo "ghi";
    }
}

$fu = new I();
$fu->hoge1();
$fu->hoge2();
echo ' ';
$foo = new J();
//$foo->hoge2();
$foo->hoge3();


/**
 * final public function
 */
class Color1{
    final public function getName1(){
		return "赤";
	}
}
class Color2 extends Color1
{
	//public function getName1(){
	//	return "青";
	//}
}
$color = new Color2();
print $color->getName1(); //赤


?>

</body>
</html>