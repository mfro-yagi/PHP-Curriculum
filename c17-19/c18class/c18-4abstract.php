<html>
<body>

<?php
/**
 * abstract
 */
abstract class Judge
{
    abstract public function yellow();
    abstract public function green();
    public function red(){
        echo 'アウト ';
    }
}

class BaseBall extends Judge{

    public function yellow(){
        echo 'ストライク ';
    }

    public function green(){
        echo 'ボール ';
    }

}
$obj = new BaseBall();
$obj -> yellow();
$obj -> green();
$obj -> red();

?>

</body>
</html>