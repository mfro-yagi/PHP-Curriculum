<?php

//namespaceを使用して同名の関数を区別する
//名前空間の外に命令文を記述できない
namespace name1;

function getName(){
    return 'Apple';
}

namespace name2;

function getName(){
    return 'Pen';
}

?>

