<html>
<body>

<?php
/**
 * MyClass の定義
 */
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    // public メソッドの宣言
    public function MyPublic() {
        echo 'foo';
    }

    function printHello()
    {
        echo $this->public.'<br>';
        echo $this->protected.'<br>';
        echo $this->private.'<br>';
    }
}

$obj = new MyClass();
echo $obj->public.'<br>'; // 動作する
//echo $obj->protected; // Fatal エラー
//echo $obj->private; // Fatal エラー
echo $obj->MyPublic().'<br>'; // 動作する
$obj->printHello(); // Public, Protected, Private を表示


/**
 * MyClass2 の定義
 */
class MyClass2 extends MyClass
{
    // public, protected プロパティは再定義できる
    // private はできない
    public $public = 'Public2';
    //protected $protected = 'Protected2'; //再定義できる

    function printHello()
    {
        echo $this->public.'<br>';
        echo $this->protected.'<br>';
        //echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public.'<br>'; // 動作
//echo $obj2->protected; // Fatal エラー
//echo $obj2->private; // 未定義
$obj2->printHello(); // Public2, Protected(MyClassから継承)　を表示

/**
 * Rose の定義　(static)
 */
class Rose {

    // メンバ
    public $name;           // 「名前」というインスタンス変数
    public static $family = "バラ科";  // 「科」というstatic変数/クラス変数

}

$apple = new Rose();
$apple->name = "リンゴ";

$peach = new Rose();
$peach->name = "モモ";

echo Rose::$family.PHP_EOL;    // バラ科

echo $apple->name.PHP_EOL;       // リンゴ
echo $apple::$family.PHP_EOL;    // バラ科
echo $peach->name.PHP_EOL;     // モモ
echo $peach::$family.PHP_EOL;  // バラ科

Rose::$family = "果物";
echo Rose::$family.PHP_EOL;    // 果物
echo $apple::$family.PHP_EOL;    // 果物
echo $peach::$family.PHP_EOL;  // 果物

$apple::$family = "デザート";
echo Rose::$family.PHP_EOL;    // デザート
echo $apple::$family.PHP_EOL;    // デザート
echo $peach::$family.PHP_EOL;  // デザート

?>

</body>
</html>