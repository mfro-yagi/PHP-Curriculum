<html>
<body>

<?php

try {
    try {
        throw new Exception('エラー');
    } catch(Exception $e) {
        throw new Exception($e->getMessage());
    }
} catch(Exception $e) {
    echo $e->getMessage(), "<br>";
}


?>

</body>
</html>