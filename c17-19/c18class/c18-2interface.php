<html>
<body>

<?php
require 'c18-3.php';
/**
 * interface
 */
interface Greetings
{
    public function morning();
    public function afternoon();
    public function evening();
}

class Hello extends Nights implements Greetings{
    public function morning(){
        echo 'おはよう';
    }

    public function afternoon(){
        echo 'こんにちは';
    }

    public function evening(){
        echo 'こんばんは';
    }

}
$obj = new Hello;
$obj -> morning();
$obj -> afternoon();
$obj -> evening();
$obj -> night();

?>

</body>
</html>