<html>
<body>

<?php
/**
 * スコープ定義演算子 (::)
 */
//self::
class CP
{
    public static function foo () {
        self::bar(); //bar()のスコープはself::が記載されたクラス（CP）
    }

    public static function bar () {
        echo 'CP_foo'.'<br>';
    }
}

class CC extends CP
{
    public static function bar () {
        echo 'CC_foo'.'<br>';
    }
}

CP::foo(); //CP_foo　　　非転送コール
CC::foo(); //CP_foo　　　非転送コール

echo '<br>';

//static::
class CA
{
    public static function foo () {
        static::bar(); //直近の「非転送コール」のクラス　　非転送コール…C::foo()や$c->foo()といったクラス名（もしくはオブジェクト）を明示した呼び出し
    }

    public static function bar () {
        echo 'CA_foo'.'<br>';
    }
}

class CB extends CA
{
    public static function bar () {
        echo 'CB_foo'.'<br>';
    }
}

CA::foo(); //CA_foo　　　非転送コール
CB::foo(); //CB_foo　　　非転送コール

echo '<br>';

//parent::
class CD
{
    public static function bar () {
        echo 'CD_bar'.'<br>';
    }
}

class CE extends CD
{
    public static function foo () {
        parent::bar(); //bar()のスコープはparent::が記載されたクラス（CE）の親クラス（CD）
    }

    public static function bar () {
        echo 'CE_bar'.'<br>';
    }
}

CE::foo(); //CD_bar

echo '<br>';

//非転送コール
class CF
{
    public static function foo() {
        CF::hoge(); //非転送コール
    }

    public static function hoge() {
        static::bar(); // bar()のスコープは直近の "非転送コール" のクラス（この場合、CF）
    }

    public static function bar() {
        echo 'CF_bar'.'<br>';
    }
}

class CG extends CF
{

    public static function bar() {
        echo 'CG_bar'.'<br>';
    }
}

CG::foo(); //CF_bar
?>

</body>
</html>