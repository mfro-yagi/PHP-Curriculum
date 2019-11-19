<html>
<body>

<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('ゼロによる除算。');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "<br>";
    echo inverse(0) . "<br>";
    echo inverse(3) . "<br>";
    echo 'a';
} catch (Exception $e) {
    echo '捕捉した例外: ',  $e->getMessage(), "<br>";
}
// 実行は継続される
echo "Hello World<br><br>";


try {
    echo inverse(5) . "<br>";
} catch (Exception $e) {
    echo '捕捉した例外: ',  $e->getMessage(), "<br>";
} finally {
    echo "First finally.<br>";
}

try {
    echo inverse(0) . "<br>";
} catch (Exception $e) {
    echo '捕捉した例外: ',  $e->getMessage(), "<br>";
} finally {
    echo inverse(3) . "<br>";
    echo "Second finally.<br>";
}



?>

</body>
</html>