<html>
<body>
<?php
//empty
$var = 0;
//変数：0なのでTRUE
if (empty($var)){
    echo '$varは0です。<br>';
}
$var = 1;
//変数：0なのでTRUE
if (empty($var)){
    echo '$varは0です。<br>';
}

$str = '';
//変数：空なのでTRUE
if (empty($str)){
    echo '$strは空です。<br>';
}

$array = [];
//配列：空なのでTRUE
if (empty($array)){
    echo '$arrayは空です。<br>';
}

//isset 変数に値がセットされており、かつNULLでない
$fruits = ['apple', 'orange', NULL, 'banana', 'pineapple'];

foreach($fruits as $value){
    //isset関数の場合NULLの場合はFALSEになります
    if (isset($value)){
        //TRUEの場合に下記の内容を出力させます
        echo 'NULLではありません';
    }else{
        //FALSEの時に下記の内容を出力させます
        echo 'NULLです';
    }
    echo '<br>';
}

?>
</body>
</html>
