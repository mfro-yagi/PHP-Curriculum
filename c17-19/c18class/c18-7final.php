<html>
<body>

<?php
/**
 * final class
 */
class H{
    function hoke1(){
        echo "abc";
    }
}

final class I extends H {
    function hoke2(){
        echo "def";
    }
}

class J //extends I     継承不可
{
    function hoke3(){
        echo "ghi";
    }
}

$fu = new I();
$fu->hoke1();
$fu->hoke2();
echo ' ';
$foo = new J();
//$foo->hoge2();
$foo->hoke3();


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