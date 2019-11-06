<html>
<body>
<?php

function the_day_of_the_week(){
    echo date('D')."<br/>\n";
}
//関数を呼び出す
the_day_of_the_week();


class day {
    function Sunday(){
        echo('Sunday');
    }
}

$obj = new day;

$obj -> Sunday();

?>
</body>
</html>