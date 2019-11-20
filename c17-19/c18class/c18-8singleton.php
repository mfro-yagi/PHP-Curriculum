<html>
<body>

<?php
/**
 * Singleton
 */
class Singleton
{
    private static $singleton;

    private function __construct()
    {
        echo "インスタンスを生成しました。" .'<br>';
    }

    public static function getInstance()
    {
        if (!isset(self::$singleton)) {
            self::$singleton = new Singleton();
        }

        return self::$singleton;
    }
}

$singleton1 = Singleton::getInstance(); //インスタンスを生成しました。
$singleton2 = Singleton::getInstance();

if ($singleton1 === $singleton2) {
    echo "singleton1とsingleton2は同じインスタンスです。" .'<br>'; //
} else {
    echo "singleton1とsingleton2は違うインスタンスです。" .'<br>';
}


//$test = new Singleton();
// 外部からインスタンス化できない


?>

</body>
</html>